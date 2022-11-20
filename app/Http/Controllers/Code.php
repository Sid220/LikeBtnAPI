<?php

namespace App\Http\Controllers;

use App\Actions\GetJSModule;

class Code extends Controller
{
    public function __invoke($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
        $code = GetJSModule::run($id, $_GET);
        $script = '<script src="'.url('/').'/cdn/'.$id.'/likebtnapi.js?'.http_build_query($_GET).'"></script>';
        if (($_GET['customCSS'] ?? '') !== '') {
            $script .= '<style>'.$_GET['customCSS'].'</style>';
        }

        return view('code', [
            'code' => $code,
            'script' => $script,
        ]);
    }
}
