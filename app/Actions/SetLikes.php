<?php

namespace App\Actions;

use App\Actions\IP\GetUserIPModule;
use App\Actions\IP\SetIPModule;
use App\Actions\IP\TooManyIPsModule;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class SetLikes
{
    use AsAction;

    public function handle(?string $website, ?string $page): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($website && $page) {
            if (DB::table('websites')->where('id', $website)->exists()) {
                // Page doesn't exist in DB
                if ((! (DB::table('likes')->where('website', $website)->where('page', $page)->exists())) && (! (str_contains($page, LaravelLocalization::localizeUrl('/code/'.$website))))) {
                    DB::table('likes')->insertGetId([
                        'website' => $website,
                        'likes' => 0,
                        'page' => $page,
                    ]);
                }
                if (! TooManyIPsModule::run(GetUserIPModule::run(), $website)) {
                    DB::table('likes')->where('website', $website)->where('page', $page)->update([
                        'likes' => DB::raw('likes + 1'),
                    ]);
                }

                SetIPModule::run(GetUserIPModule::run(), $website);

                $likes = 0;
                $query = DB::table('likes')->where('website', $website)->where('page', $page);
                if ($query->exists()) {
                    $likes = $query->value('likes');
                }

                return response('{"status": "OK", "likes": '.$likes.'}')
                    ->header('Content-Type', 'application/json');
            } else {
                SetIPModule::run(GetUserIPModule::run(), $website);

                return response('{"status": "OK", "likes": 0}')
                    ->header('Content-Type', 'application/json');
            }
        } else {
            return response('{"error": "NO_WEBSITE_OR_PAGE_PARAM", "status": "KO", "likes": -1}')
                ->header('Content-Type', 'application/json');
        }
    }
}
