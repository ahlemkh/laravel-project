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

Route::get('/test1', function () {
    return 'welcome';
});

Roussste::get('/test2/{id?}', function () {
    return 'welcome ';
});
Route::get('/testlanding', function () {
    return view('landing');
});

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


Route::namespace('Front')->group(function(){
    //this routes acess vontrollers nd methodes from a fle named Front
    Route::get('users','UserController@getIndex');


});
Route::group(['prefix'=>'essai','middlware'=>'auth'],function(){
    Route::get('/',function(){
        return "this an attempt";
    });
});
Route::group(['namespace'=>'Admin'],function(){
    Route::get('second1','SecondController@ShowString1')->middleware('auth');
    Route::get('second2','SecondController@ShowString2');
    Route::get('second','SecondController@ShowString');

});
Route::resource('news','NewsController');

