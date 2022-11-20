<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Add
{
    public function actuallyAdd()
    {
        if ($_GET['url']) {
            $uuid = Str::uuid();
            DB::table('websites')->insert([
                'id' => $uuid,
                'url' => $_GET['url'],
                'owner' => Auth::id(),
            ]);

            return redirect('/code/'.$uuid);
        }

        return redirect('/dashboard');
    }
}
