<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MyAnimeListController extends Controller
{
    public function searchAnime(Request $request)
    {
        $query = $request->input('q'); 
        $limit = $request->input('limit', 10);
        $client = new Client([
            'base_uri' => config('services.myanimelist.base_uri'),
            'headers' => [
                'Authorization' => config('services.myanimelist.api_key'),
                'X-MAL-CLIENT-ID' => config('services.myanimelist.client_id'),
            ],
        ]);
       
        $response = $client->get('anime', [
            'query' => [
                'q' => $query,
                'limit' => $limit,
            ],
        ]);

    
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }

    public function searchManga(Request $request)
    {
        $query = $request->input('q'); 
        $client = new Client([
            'base_uri' => config('services.myanimelist.base_uri'),
            'headers' => [
                'Authorization' => config('services.myanimelist.api_key'),
                'X-MAL-CLIENT-ID' => config('services.myanimelist.client_id'),
            ],
        ]);
       
        $response = $client->get('manga', [
            'query' => [
                'q' => $query,
                ],
        ]);

    
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }

    public function veiwAllRanking(Request $request)
    {
        $query = $request->input('ranking_type'); 
        $limit = $request->input('limit', 10);

        $client = new Client([
            'base_uri' => config('services.myanimelist.base_uri'),
            'headers' => [
                'Authorization' => config('services.myanimelist.api_key'),
                'X-MAL-CLIENT-ID' => config('services.myanimelist.client_id'),
            ],
        ]);
       
        $response = $client->get('anime/ranking', [
            'query' => [
                'ranking_type' => $query,
                'limit' => $limit,
                ],
        ]);

    
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }
    
    public function veiwAllRankingManga(Request $request)
    {
        $query = $request->input('ranking_type'); 
        $limit = $request->input('limit', 10);

        $client = new Client([
            'base_uri' => config('services.myanimelist.base_uri'),
            'headers' => [
                'Authorization' => config('services.myanimelist.api_key'),
                'X-MAL-CLIENT-ID' => config('services.myanimelist.client_id'),
            ],
        ]);
       
        $response = $client->get('manga/ranking', [
            'query' => [
                'ranking_type' => $query,
                'limit' => $limit,
                ],
        ]);

    
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }
    
}
