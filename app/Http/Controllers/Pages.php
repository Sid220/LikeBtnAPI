<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Pages extends Controller
{
    public function __invoke($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages', [
            'pages' => DB::table('likes')->where('website', $id)->get(['page', 'likes']),
            'id' => $id,
        ]);
    }
}
