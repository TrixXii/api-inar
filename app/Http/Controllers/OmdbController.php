<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class OmdbController extends Controller
{

    public function searchMovies(Request $request)
    {
        $query = $request->input('query');
        $client = new Client([
            'base_uri' => config('services.omdb.base_uri'),
        ]);
        $response = $client->get('', [
            'query' => [
                'apikey' => config('services.omdb.api_key'),
                's' => $query,
                'type' => 'movie',
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
        }

    public function searchSeries(Request $request)
    {
        $query = $request->input('query');
        $client = new Client([
            'base_uri' => config('services.omdb.base_uri'),
        ]);
        $response = $client->get('', [
            'query' => [
                'apikey' => config('services.omdb.api_key'),
                's' => $query,
                'type' => 'series',
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }

    public function searchSeasonAndEpisode(Request $request)
    {
        $query = $request->input('query');
        $season = $request->input('Season');
        $episode = $request->input('Episode');
    
        // Consulta a la API de OMDB
        $omdbClient = new Client([
            'base_uri' => config('services.omdb.base_uri'),
        ]);
        $response = $omdbClient->get('', [
            'query' => [
                'apikey' => config('services.omdb.api_key'),
                't' => $query,
                'Season' => $season,
                'Episode' => $episode,
                

            ],
        ]);
        $data = json_decode($response->getBody(), true);
        return response()->json($data);
    }
}
