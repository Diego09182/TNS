<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class NewsController extends Controller
{
    public function getTaiwanNews()
    {
        $ApiKey = 'YourAPIKEY';
        $BaseUrl = 'https://newsapi.org/v2/top-headlines';
        
        $client = new Client();
        
        $response = $client->get($BaseUrl, [
            'query' => [
                'country' => 'tw',
                'ApiKey' => $ApiKey,
            ],
        ]);
        
        $data = json_decode($response->getBody(), true);
        
        return view('news', ['news' => $data['articles']]);
    }
}

