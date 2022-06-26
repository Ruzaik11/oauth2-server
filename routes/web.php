<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => '4',
        'redirect_uri' => 'http://exetel-server.local/callback',
        'response_type' => 'code',
        'scope' => '',
    ]);

    return redirect('http://exetel-server.local/oauth/authorize?'.$query);
});

Route::get('/callback', function () {
   dd("cool");
});

