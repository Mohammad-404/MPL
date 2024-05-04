<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LocalizationController extends Controller
{
    public function __invoke($locale){
        if (!in_array($locale,config('localization.locales'))) {
            abort(400);
        }

        session(['localization' => $locale]);

        return redirect()->back();
    }
}
