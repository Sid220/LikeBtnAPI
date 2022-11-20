<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class GetJS
{
    use AsAction;

    public function handle(?string $website): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($website) {
            $count = 1;

            return response(GetJSModule::run($website, $_GET))
                ->header('Content-Type', 'text/javascript');
        } else {
            return response('{"error": "NO_WEBSITE_PARAM", "likes": -1}')
                ->header('Content-Type', 'application/json');
        }
    }
}
