<?php

namespace App\Actions;

use Illuminate\Support\Facades\File;
use Lorisleiva\Actions\Concerns\AsAction;

class GetJSModule
{
    use AsAction;

    public function handle(string $website, array $options = []): string
    {
        $path = public_path().'/LikeBtnAPIJS/likebtnapi.min.js';
        if (File::exists($path)) {
            $raw = File::get($path);
            foreach ($options as $key => $option) {
                if ($key !== 'iconSet' && $key !== 'customCSS') {
                    $raw .= 'likeBtnAPI.'.$key.'=`'.$option.'`;';
                }
            }
            if (array_key_exists('iconSet', $options)) {
                $raw .= "likeBtnAPI.main('".$website."', '".$options['iconSet']."');";
            } else {
                $raw .= "likeBtnAPI.main('".$website."', 'default');";
            }

            return $raw;
        } else {
            return 'KO';
        }
    }
}
