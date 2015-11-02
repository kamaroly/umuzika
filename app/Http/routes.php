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
    return view('layouts.default');
});

$router->get('explore', function() {
	return view('tracks.item');
});

$router->get('/search',function(){
	return view('tracks.search');
});

$router->get('/upload',function(){
	return view('files.upload');
});

Route::get('files/get/{filename?}', [
	'as' => 'files.get', 'uses' => 'UploadController@get']);
	
Route::post('upload/music', ['as' => 'upload.music', 'uses' => 'UploadController@upload']);
