<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $key = env('GENERATED_PHOTOS_KEY');

        $client = new Client();
        $response = $client->request('GET', 'https://api.generated.photos/api/v1/faces', [
            'query' => ['per_page' => 1, 'age' => $request->age, 'hair_color' => $request->hair_color, 'api_key' => $key]
        ]);
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        return $body;

    }
}
