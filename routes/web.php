<?php

use App\Events\CarMoved;
use Illuminate\Support\Facades\Broadcast;
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

Route::get('/app', function () {
    return view('app');
});

Route::get('/move', function () {
    // event(new CarMoved(53.6304438,10.0472128));
    // event(new CarMoved(53.6304438,10.0472128));
    event(new CarMoved(53.6315479,10.0470709));
    dump('Car moved');
});
