<?php

Route::bind('event', function ($value) {
	$event = app('App\Events\EventRepository')->find($value);

	if (! $event) {
		throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
	}

	return $event;
});

Route::bind('post', function ($value) {
	$post = app('App\Posts\PostRepository')->find($value);

	if (! $post) {
		throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
	}

	return $post;
});

//Basic routes
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);
Route::get('info', ['as' => 'info', 'uses' => 'HomeController@info']);
Route::get('afdelingen', ['as' => 'afdelingen', 'uses' => 'HomeController@afdelingen']);
Route::get('kalender', ['as' => 'kalender', 'uses' => 'HomeController@kalender']);
Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

//Auth routes
Route::post('/', ['as' => 'login.do', 'uses' => 'LoginController@login']);
Route::get('register', ['as' => 'register.show', 'uses' => 'RegisterController@show']);
Route::post('register', ['as' => 'register.do', 'uses' => 'RegisterController@register']);
Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);

//Event routes
Route::post('kalender', ['as' => 'kalender', 'uses' => 'CalendarController@create']);
Route::get('kalender/{event}', ['as' => 'event.delete', 'uses' => 'CalendarController@delete']);

//Home post route
Route::post('/nieuws', ['as' => 'home', 'uses' => 'HomeController@create']);
Route::get('nieuws/{post}', ['as' => 'post.delete', 'uses' => 'HomeController@delete']);


//If user refreshes page
Route::get('/nieuws', ['as' => 'home', 'uses' => 'HomeController@home']);