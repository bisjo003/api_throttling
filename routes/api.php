<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index','\App\Http\Controllers\ApiController@index')->name('api.index');

// Route::middleware(['auth:api'])->group(function () {
//     Route::get('/auth/user', '\App\Http\Controllers\ApiController@index')->name('api.auth.index');
// });
Route::group(['prefix'=>'/auth','middleware' => ['auth:sanctum','verified', 'throttle:max_request_number,1']],function(){
    Route::get('/user','\App\Http\Controllers\ApiController@index')->name('api.auth.index');
});
