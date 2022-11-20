<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class DropIPs
{
    use AsAction;

    public function handle(string $pass): \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Response
    {
        if ($pass == 'nzybvfbuqbau') {
            DB::table('ips')->delete();
        }

        return response()->view('errors.404');
    }
}
