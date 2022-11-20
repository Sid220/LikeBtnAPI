<?php

namespace App\Actions\IP;

use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;

class TooManyIPsModule
{
    use AsAction;

    public function handle(string $ip, string $website, int $tooMany = 500): bool
    {
        $matches = DB::table('ips')->where('ip', $ip)->where('website', $website)->count();
        if (
            $matches
        ) {
            if ($matches >= $tooMany) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
