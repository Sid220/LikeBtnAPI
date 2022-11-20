<?php

use App\Actions\GetJS;
use App\Actions\GetLikes;
use App\Actions\SetLikes;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\ConfirmedTwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RecoveryCodeController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\TwoFactorAuthenticationController;
use Laravel\Fortify\Http\Controllers\TwoFactorQrCodeController;
use Laravel\Fortify\Http\Controllers\TwoFactorSecretKeyController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/api/get-likes', function () {
    return GetLikes::run($_GET['website'] ?? null, $_GET['url'] ?? null);
});

Route::get('/api/set-likes', function () {
    return SetLikes::run($_GET['website'] ?? null, $_GET['url'] ?? null);
});

Route::get('/api/get-website', function () {
    return \App\Actions\GetWebsite::run($_GET['website'] ?? null);
});

Route::get('/api/del-likes', function () {
    return \App\Actions\DelLikes::run($_GET['website'] ?? null, $_GET['url'] ?? null);
});

Route::get('/internals/hidden/DropIPs/{pass}', function () {
    return \App\Actions\DropIPs::run(request('pass'));
});

Route::get('/cdn/{website}/likebtnapi.js', function () {
    return GetJS::run(request('website'));
});
Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect'], ], function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            Route::get('/dashboard', \App\Http\Controllers\Dashboard::class)->name('dashboard');
            Route::get('/delete/{id}', [\App\Http\Controllers\Delete::class, 'delete'])->name('delete');
            Route::get('/internals/actuallyDelete/{id}', [\App\Http\Controllers\Delete::class, 'actuallyDelete']);
            Route::get('/add', function () {
                return view('add');
            })->name('add');
            Route::get('/internals/actuallyAdd', [\App\Http\Controllers\Add::class, 'actuallyAdd']);
            Route::get('/edit/{id}', [\App\Http\Controllers\Edit::class, 'edit'])->name('edit');
            Route::get('/internals/actuallyEdit', [\App\Http\Controllers\Edit::class, 'actuallyEdit']);
            Route::get('/code/{id}', \App\Http\Controllers\Code::class)->name('code');
            Route::get('/pages/{id}', [\App\Http\Controllers\Pages::class, '__invoke'])->name('pages');
        });

        // Jetstream + Fortify
        Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
            $enableViews = config('fortify.views', true);

            // Authentication...
            if ($enableViews) {
                Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('login');
            }

            $limiter = config('fortify.limiters.login');
            $twoFactorLimiter = config('fortify.limiters.two-factor');
            $verificationLimiter = config('fortify.limiters.verification', '6,1');

            Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware(array_filter([
                    'guest:'.config('fortify.guard'),
                    $limiter ? 'throttle:'.$limiter : null,
                ]));

            Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

            // Password Reset...
            if (Features::enabled(Features::resetPasswords())) {
                if ($enableViews) {
                    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('password.request');

                    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('password.reset');
                }

                Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('password.email');

                Route::post('/reset-password', [NewPasswordController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('password.update');
            }

            // Registration...
            if (Features::enabled(Features::registration())) {
                if ($enableViews) {
                    Route::get('/register', [RegisteredUserController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('register');
                }

                Route::post('/register', [RegisteredUserController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')]);
            }

            // Email Verification...
            if (Features::enabled(Features::emailVerification())) {
                if ($enableViews) {
                    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
                        ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                        ->name('verification.notice');
                }

                Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'signed', 'throttle:'.$verificationLimiter])
                    ->name('verification.verify');

                Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'throttle:'.$verificationLimiter])
                    ->name('verification.send');
            }

            // Profile Information...
            if (Features::enabled(Features::updateProfileInformation())) {
                Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                    ->name('user-profile-information.update');

                Route::get('/profile', function () {
                    return view('profile.show');
                })->name('profile.show');
            }

            // Passwords...
            if (Features::enabled(Features::updatePasswords())) {
                Route::put('/user/password', [PasswordController::class, 'update'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                    ->name('user-password.update');
            }

            // Password Confirmation...
            if ($enableViews) {
                Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')]);
            }

            Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
                ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                ->name('password.confirmation');

            Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                ->name('password.confirm');

            // Two Factor Authentication...
            if (Features::enabled(Features::twoFactorAuthentication())) {
                if ($enableViews) {
                    Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('two-factor.login');
                }

                Route::post('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
                    ->middleware(array_filter([
                        'guest:'.config('fortify.guard'),
                        $twoFactorLimiter ? 'throttle:'.$twoFactorLimiter : null,
                    ]));

                $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
                    ? [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'password.confirm']
                    : [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')];

                Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.enable');

                Route::post('/user/confirmed-two-factor-authentication', [ConfirmedTwoFactorAuthenticationController::class, 'store'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.confirm');

                Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.disable');

                Route::get('/user/two-factor-qr-code', [TwoFactorQrCodeController::class, 'show'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.qr-code');

                Route::get('/user/two-factor-secret-key', [TwoFactorSecretKeyController::class, 'show'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.secret-key');

                Route::get('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'index'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.recovery-codes');

                Route::post('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'store'])
                    ->middleware($twoFactorMiddleware);
            }
        });

        Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
            $enableViews = config('fortify.views', true);

            // Authentication...
            if ($enableViews) {
                Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('login');
            }

            $limiter = config('fortify.limiters.login');
            $twoFactorLimiter = config('fortify.limiters.two-factor');
            $verificationLimiter = config('fortify.limiters.verification', '6,1');

            Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware(array_filter([
                    'guest:'.config('fortify.guard'),
                    $limiter ? 'throttle:'.$limiter : null,
                ]));

            Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

            // Password Reset...
            if (Features::enabled(Features::resetPasswords())) {
                if ($enableViews) {
                    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('password.request');

                    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('password.reset');
                }

                Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('password.email');

                Route::post('/reset-password', [NewPasswordController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')])
                    ->name('password.update');
            }

            // Registration...
            if (Features::enabled(Features::registration())) {
                if ($enableViews) {
                    Route::get('/register', [RegisteredUserController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('register');
                }

                Route::post('/register', [RegisteredUserController::class, 'store'])
                    ->middleware(['guest:'.config('fortify.guard')]);
            }

            // Email Verification...
            if (Features::enabled(Features::emailVerification())) {
                if ($enableViews) {
                    Route::get('/email/verify', [EmailVerificationPromptController::class, '__invoke'])
                        ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                        ->name('verification.notice');
                }

                Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'signed', 'throttle:'.$verificationLimiter])
                    ->name('verification.verify');

                Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'throttle:'.$verificationLimiter])
                    ->name('verification.send');
            }

            // Profile Information...
            if (Features::enabled(Features::updateProfileInformation())) {
                Route::put('/user/profile-information', [ProfileInformationController::class, 'update'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                    ->name('user-profile-information.update');
            }

            // Passwords...
            if (Features::enabled(Features::updatePasswords())) {
                Route::put('/user/password', [PasswordController::class, 'update'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                    ->name('user-password.update');
            }

            // Password Confirmation...
            if ($enableViews) {
                Route::get('/user/confirm-password', [ConfirmablePasswordController::class, 'show'])
                    ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')]);
            }

            Route::get('/user/confirmed-password-status', [ConfirmedPasswordStatusController::class, 'show'])
                ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                ->name('password.confirmation');

            Route::post('/user/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware([config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')])
                ->name('password.confirm');

            // Two Factor Authentication...
            if (Features::enabled(Features::twoFactorAuthentication())) {
                if ($enableViews) {
                    Route::get('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'create'])
                        ->middleware(['guest:'.config('fortify.guard')])
                        ->name('two-factor.login');
                }

                Route::post('/two-factor-challenge', [TwoFactorAuthenticatedSessionController::class, 'store'])
                    ->middleware(array_filter([
                        'guest:'.config('fortify.guard'),
                        $twoFactorLimiter ? 'throttle:'.$twoFactorLimiter : null,
                    ]));

                $twoFactorMiddleware = Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
                    ? [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard'), 'password.confirm']
                    : [config('fortify.auth_middleware', 'auth').':'.config('fortify.guard')];

                Route::post('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.enable');

                Route::post('/user/confirmed-two-factor-authentication', [ConfirmedTwoFactorAuthenticationController::class, 'store'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.confirm');

                Route::delete('/user/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.disable');

                Route::get('/user/two-factor-qr-code', [TwoFactorQrCodeController::class, 'show'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.qr-code');

                Route::get('/user/two-factor-secret-key', [TwoFactorSecretKeyController::class, 'show'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.secret-key');

                Route::get('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'index'])
                    ->middleware($twoFactorMiddleware)
                    ->name('two-factor.recovery-codes');

                Route::post('/user/two-factor-recovery-codes', [RecoveryCodeController::class, 'store'])
                    ->middleware($twoFactorMiddleware);
            }
        });
    });
