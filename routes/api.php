<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('/user',[
    'uses' => 'UserController@signup'
]);


Route::post('/user/signin',[
    'uses' => 'UserController@signin'
]);

Route::get('/categories_tree',[
    'uses' => 'CategoryController@sendCategoriesTree'
]);

Route::post('/send_events_to_events_list', ['uses' =>'EventController@sendEventsToEventsList']);

/*
 * 'middleware' => 'auth.jwt'
 */