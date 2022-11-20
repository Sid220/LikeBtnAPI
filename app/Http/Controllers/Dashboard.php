<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $websites = DB::table('websites')->where('owner', Auth::id())->get();

        return view('dashboard', [
            'websites' => $websites,
        ]);
    }
}
