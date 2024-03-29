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


Route::get('/', 'WelcomeController@index');
Route::get('admin', ['middleware' => 'auth', function() {
	  return View::make('pages.admin');
    }]);
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
////Route::get('contact', 'WelcomeController@contact');
////
////
////
////Route::get('home', 'HomeController@index');
////

////
////
////Route::get('about', 'PagesController@about');
//
//Route::get('/admin', function()
//{
//    return View::make('pages.admin');
//});
//Route::get('about', function()
//{
//    
//    $people = [
//        "Nikolettosz Páleszosz",
//        "Gáborosz Wigandosz",
//        "Kucoró Drazsé"
//    ];
//    
//    return View::make('pages.about', compact('people'));
//});
//Route::get('projects', function()
//{
//    return View::make('pages.projects');
//});
//Route::get('contact', function()
//{
//    return View::make('pages.contact');
//});
