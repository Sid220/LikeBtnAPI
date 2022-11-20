<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Delete
{
    public function delete(string $id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (DB::table('websites')->where('id', $id)->exists()) {
            return view('delete', [
                'websites' => DB::table('websites')->where('id', $id)->get(),
            ]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function actuallyDelete(string $id): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        DB::table('websites')->where('id', $id)->delete();
        DB::table('likes')->where('website', $id)->delete();

        return redirect('/dashboard');
    }
}
