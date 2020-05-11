<?php

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

//if user is not authenticated it will reroute to login
Route::get('/home/{any}', function () {
    if (Auth::guest()) {
        return redirect('login');
    } else {
    return view('home');
    }
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

// The route below handles the HTTP initial fetch request from the front end to the SheetsController in app/HTTP/Controllers/SheetsController.php
Route::post('/sheet/fetch/abilities', 'SheetsController@fetchAbility');
// The route below updates the database with any value the user may have changed in the front end
Route::post('/sheet/update/abilities', 'SheetsController@updateAbility');

Route::post('/sheet/spells', 'SheetsController@spells');


//Route::get('send_test_email', function(){
//    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
//    {
//        $message->to('chris.glazier12@gmail.com');
//    });
//});

//Route Testing
Route::get('/test', 'TestsController@testing');


