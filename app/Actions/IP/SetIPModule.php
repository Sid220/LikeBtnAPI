<?php

namespace App\Actions\IP;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class SetIPModule
{
    use AsAction;

    public function handle(string $ip, string $website): bool
    {
        if (
            DB::table('ips')->insert([
                'ip' => $ip,
                'website' => $website,
            ])
        ) {
            return true;
        } else {
            return false;
        }
    }
}
