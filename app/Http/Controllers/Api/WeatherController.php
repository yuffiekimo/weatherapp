<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\OpenWeatherMapAPIService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    private $openWeatherMapApiService;

    public function __construct(OpenWeatherMapAPIService $openWeatherMapAPIService)
    {
        $this->openWeatherMapApiService = $openWeatherMapAPIService;
    }

    public function forecast(Request $request)
    {
        return $this->openWeatherMapApiService->forecast($request);
    }
}
