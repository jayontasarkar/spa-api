<?php

Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@login');

// Restricted Routes
Route::group(['middleware' => 'jwt.auth'], function() {
	// Logout
	Route::post('/logout', 'Auth\AuthController@logout');

	// Timeline
	Route::get('/timeline', 'Api\TimelineController@index');
});
