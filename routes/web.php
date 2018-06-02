<?php

Route::get('/profile', function() { 
	return view('content.profile'); 
});
// route for homepage
Route::get('/','WelcomeController@homePage')->name('home');
Route::any('home',function(){
	return Redirect::to('/');
});

//routes for registration
Route::get('/register', 'RegistrationController@regForm');
Route::post('/register', 'RegistrationController@register');

//routes for login and logoutv
Route::get('/login','LoginController@logForm')->name('login');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

//route permissions (admin) -> payment details
Route::get('/search','AdminController@search');
Route::get('/search/{id}','AdminController@acctID');
Route::delete('/search/{id}','AdminController@deleteAccount');
Route::get('/relationship', 'AdminController@viewrel');
Route::get('/relationship/{id}', 'AdminController@relDESC');
Route::post('/relationship', 'AdminController@addRelationship');
Route::get('/request', 'AdminController@approveReq');
Route::get('/requests', 'AdminController@viewReq');
Route::get('/confirmation/{dID}', 'AdminController@confirmation');
Route::patch('/confirmation/{dcID}', 'AdminController@confirm');


//Route::get('/search','UserController@search');
Route::get('/corpse','SearchController@search');
Route::get('/corpse/{id}','SearchController@searchById');
Route::get('/corpses/{prm}','SearchController@searchAll');

// temporary routes -> to be editted
Route::get('/maps','SearchController@maps');
Route::get('/dashboard','SearchController@dashboard');

Route::get('/settings','SettingsController@account');
Route::put('/settings/{id}','SettingsController@updateAccount');

//experimental routes
//route specific user to its own uri
Route::get('/{name?}/RegisterCorpse','addCorpseController@view');
Route::post('/{name?}/RegisterCorpse','addCorpseController@add');

//statistics
Route::get('/statistics','StatsController@statistics');
Route::get('/statistics/{month?}/{date?}/{year?}','StatsController@date');

//temporary
Route::get('/{name?}/paymendetails','PaymentController@view');

//
Route::get('/{name?}/paymendetails','PaymentController@view');

