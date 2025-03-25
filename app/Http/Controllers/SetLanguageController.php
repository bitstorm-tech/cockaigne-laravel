<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class SetLanguageController
{
    public function setLanguage(string $language)
    {
        $referer = request()->header('referer');

        if (! $language) {
            return redirect($referer);
        }

        request()->user()?->update([
            'language' => $language,
        ]);

        Cookie::queue(LANGUAGE_COOKIE_NAME, $language);

        App::setLocale($language);

        return redirect($referer);
    }
}
