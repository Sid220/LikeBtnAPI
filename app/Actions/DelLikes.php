<?php

namespace App\Actions;

use App\Actions\IP\GetUserIPModule;
use App\Actions\IP\SetIPModule;
use App\Actions\IP\TooManyIPsModule;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class DelLikes
{
    use AsAction;

    public function handle(?string $website, ?string $page): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($website && $page) {
            if (DB::table('websites')->where('id', $website)->exists()) {
                $likes = DB::table('likes')->where('website', $website)->where('page', $page);
                if ($likes->exists()) {
                    if ($likes->value('likes') > 0 && ! TooManyIPsModule::run(GetUserIPModule::run(), $website)) {
                        $likes->update([
                            'likes' => $likes->value('likes') - 1,
                        ]);
                    }
                } else {
                    return response('{"status": "OK", "likes": 0}')
                        ->header('Content-Type', 'application/json');
                }
                SetIPModule::run(GetUserIPModule::run(), $website);

                return response('{"status": "OK", "likes": '.$likes->value('likes').'}')
                    ->header('Content-Type', 'application/json');
            }
            // Website not found, quietly fail
            return response('{"status": "OK", "likes": 0}')
                ->header('Content-Type', 'application/json');
        } else {
            return response('{"error": "NO_WEBSITE_OR_PAGE_PARAM", "status": "KO", "likes": -1}')
                ->header('Content-Type', 'application/json');
        }
    }
}
