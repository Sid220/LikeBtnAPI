<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class GetLikes
{
    use AsAction;

    public function handle(?string $website, ?string $page): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($website) {
            $likes = 0;
            if ($page) {
                $likes = DB::table('likes')->where('website', $website)->where('page', $page)->value('likes');
            } else {
                $likes = DB::table('likes')->where('website', $website)->sum('likes');
            }
            if ($likes > 0) {
                $count = $likes;
            } else {
                $count = 0;
            }

            return response('{"likes": '.$count.', "status": "OK"}')
                ->header('Content-Type', 'application/json');
        } else {
            return response('{"error": "NO_WEBSITE_PARAM", "likes": -1, "status": "KO"}')
                ->header('Content-Type', 'application/json');
        }
    }
}
