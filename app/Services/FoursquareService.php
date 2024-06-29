<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FoursquareService
{
    private $http;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->http = Http::baseUrl(config('thirdpartyapis.foursquare_baseurl'))
            ->withHeader('Authorization', config('thirdpartyapis.foursquare_api_key'))
            ->acceptJson();
    }

    public function searchVenues(Request $request)
    {
        $request->validate([
            'near' => 'required|min:5|max:255'
        ]);

        return $this->http->withQueryParameters([
            'near' => $request->near . ',JP',
            'open_now' => 'true'
        ])->get('/search')->throw()->json();
    }

    public function venueInfo(Request $request)
    {
        $request->validate([
            'fsq_id' => 'required|min:5|max:255'
        ]);

        return $this->http->get('/' . $request->fsq_id)->throw()->json();
    }
}
