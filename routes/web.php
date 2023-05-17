<?php

use App\Http\Controllers\OmdbController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->name('login');
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    // dd($user);
    $userExist = User::where('external_id' , $user->id)->where('external_auth', 'google')->first();
   
    if ($userExist) {
        Auth::login($userExist);
    }else{
       $userNew = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }
    return view('welcome');
    // $user->token
});

Route::get('/logout' ,function (){
    Auth::logout();
    return redirect('/login-google');

});
Route::get('/bySearchMovies', function () {
    return view('index');
});
Route::get('/bySearchSeries', function () {
    return view('busSerie');
});