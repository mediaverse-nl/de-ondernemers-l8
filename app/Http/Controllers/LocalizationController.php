<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function __invoke($locale)
    {
        if (! in_array($locale, ['en', 'nl', 'fr'])) {
            abort(400);
        }

        \Session::put('locale', $locale);

        return redirect()->back();
    }
}
