<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Http\Controllers\Utils\Constants;

//These are the public routes

Route::get(Constants::HOME, function () {
    return view('index');
});


Route::get(Constants::GET_LOGIN, "AuthController@serveLoginPage");
Route::post(Constants::DO_LOGIN, "AuthController@doLogin");
Route::get(Constants::GET_LOGOUT, "AuthController@doLogout");


Route::get(Constants::GET_SIGNUP, "AuthController@serveRegistrationPage");
Route::post(Constants::DO_SIGNUP, "AuthController@doRegistration");


Route::get(Constants::GET_DASHBOARD, "ContactsController@serveDashboard");

Route::post(Constants::POST_CONTACT, "ContactsController@handleNewContact");

Route::put(Constants::PUT_CONTACT, "ContactsController@handleUpdateContact");

Route::delete(Constants::DELETE_CONTACT, "ContactsController@handleDeleteContact");

