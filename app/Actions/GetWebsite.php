<?php

namespace App\Actions;

use App\Actions\IP\GetUserIPModule;
use App\Actions\IP\SetIPModule;
use App\Actions\IP\TooManyIPsModule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Lorisleiva\Actions\Concerns\AsAction;

class GetWebsite
{
    use AsAction;

    public function handle(?string $website): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($website) {
            $url = null;
            if (! (TooManyIPsModule::run(GetUserIPModule::run(), $website))) {
                $url = DB::table('websites')->where('id', $website)->value('url');
            }

            if ($url === null) {
                $protocols = ['http://', 'https://'];
                $endings = ['.com', '.ml', '.tg.tx', '.co.uk', '.org'];
                $www = ['www.', ''];
                $response = Http::get('https://random-word-api.herokuapp.com/word');
                $url = $protocols[array_rand($protocols)].$www[array_rand($www)].json_decode($response->body())[0].$endings[array_rand($endings)];
            }

            SetIPModule::run(GetUserIPModule::run(), $website);

            return response('{"website": "'.$url.'", "status": "OK"}')
                ->header('Content-Type', 'application/json');
        } else {
            return response('{"error": "NO_WEBSITE_PARAM", "website": "KO", "status": "KO"}')
                ->header('Content-Type', 'application/json');
        }
    }
}
