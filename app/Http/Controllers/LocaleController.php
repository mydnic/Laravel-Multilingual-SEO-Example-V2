<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Lang;

class LocaleController extends Controller
{
    public function switch(Request $request, $locale)
    {
        // Store the URL on which the user was
        $previousUrl = url()->previous();

        // Transform it into a correct request instance
        $previousRequest = request()->create($previousUrl);

        // Get Query Parameters if applicable
        $queryBag = $previousRequest->query();

        // In case the route name was translated
        $routeName = app('router')->getRoutes()->match($previousRequest)->getName();

        // Store the segments of the last request as an array
        $segments = $previousRequest->segments();

        // Check if the first segment matches a language code
        if (array_key_exists($locale, config('app.locales'))) {
            // If it was indeed a translated route name
            if ($routeName && Lang::has('routes.' . $routeName, $locale)) {
                // Translate the route name to get the correct URI in the required language, and redirect to that URL.

                $redirectUrl = $locale . '/' . trans('routes.' . $routeName, [], $locale);
                $redirectUrl .= count($queryBag) ? '?' . http_build_query($queryBag) : '';

                return redirect()->to($redirectUrl);
            }

            // Replace the first segment by the new language code
            $segments[0] = $locale;

            // Redirect to the required URL
            $redirectUrl = implode('/', $segments);
            $redirectUrl .= count($queryBag) ? '?' . http_build_query($queryBag) : '';

            return redirect()->to($redirectUrl);
        }

        return back();
    }
}
