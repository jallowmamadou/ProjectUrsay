<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    if(Auth::check()) return view('welcome')->with('user', Auth::user());

    return 'Hi Anonymous guy';
});

Route::get('/biness', [
   'uses' => 'Auth\AuthController@intro'
]);
Route::get('/logout', [
    'uses' => 'Auth\AuthController@logout',
    'as'   => 'auth.logout'
]);

/*
|--------------------------------------------------------------------------
| Restful API for Frontend
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'api/v1'], function () {
    /**
     * Frontend Api Routes
     */

    Route::get('/feed/',  [
            'as' => 'ideas.feed',
            'uses' => 'IdeasController@index']
    );

});


//Social Auth
Route::get('/login/{provider?}',[
    'uses' => 'Auth\AuthController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);