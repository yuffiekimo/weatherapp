<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenWeatherMapAPIService
{

    private $http;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->http = Http::baseUrl(config('thirdpartyapis.openmapweather_baseurl'))
            ->acceptJson();
    }

    public function forecast(Request $request)
    {
        return $this->http->withQueryParameters([
            'q' => $request->city . ",JP",
            'APPID' => config('thirdpartyapis.openmapweather_api_key'),
            'units' => 'metric',
        ])->get('/')->throw()->json();
    }
}
