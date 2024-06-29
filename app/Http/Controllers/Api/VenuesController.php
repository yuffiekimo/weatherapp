<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\FoursquareService;
use Illuminate\Http\Request;


class VenuesController extends Controller
{
    private $foursquareService;

    public function __construct(FoursquareService $foursquareService)
    {
        $this->foursquareService = $foursquareService;
    }

    public function search(Request $request)
    {
        return $this->foursquareService->searchVenues($request);
    }

    public function info(Request $request)
    {
        return $this->foursquareService->venueInfo($request);
    }
}
