<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Edit
{
    public function edit(string $id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (DB::table('websites')->where('id', $id)->exists()) {
            return view('edit', [
                'websites' => DB::table('websites')->where('id', $id)->get(),
            ]);
        } else {
            return redirect('/dashboard');
        }
    }

    public function actuallyEdit(): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if ($_GET['url'] && $_GET['id']) {
            DB::table('websites')->where('id', $_GET['id'])->update([
                'url' => $_GET['url'],
            ]);
        }

        return redirect('/dashboard');
    }
}
