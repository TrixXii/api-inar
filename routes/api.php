<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\OmdbController;
use App\Http\Controllers\MyAnimeListController;

Route::prefix('omdb')->group(function () {
Route::get('bySearchMovies', [OmdbController::class, 'searchMovies']);
Route::get('bySearchSeries', [OmdbController::class, 'searchSeries']);
Route::get('searchSeriesById', [OmdbController::class, 'searchSeasonAndEpisode']);

});

Route::prefix('myanimelist')->group(function () {
Route::get('anime', [MyAnimeListController::class, 'searchAnime']);
Route::get('manga', [MyAnimeListController::class, 'searchManga']);
Route::get('anime/ranking', [MyAnimeListController::class, 'veiwAllRanking']);
Route::get('manga/ranking', [MyAnimeListController::class, 'veiwAllRankingManga']);


});