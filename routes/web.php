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

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();
Route::get('/', function () {
    return view('index');
});
/*Route::middleware('auth:is_admin')->group(function(){*/



/*});*/







Route::get('/about.html', function () {
    return view('about');
});
Route::get('/services.html', function () {
    return view('index');
});

Route::middleware('is_admin')->group(function(){
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home');
    Route::post('addQuestion', 'CbtController@addQuestion')->name('addQuestion');
    Route::get('/fill-form', 'HomeController@fillform');
   // Route::get('admin/home','HomeController@adminHome')->name('admin.home')->middleware('is_admin');
    Route::get('admin/viewApplicant/{id}', 'HomeController@ViewApplication');
    Route::get('admin/viewAnswer/{id}', 'CbtController@viewAnswer');
    Route::get('view-questions', 'CbtController@viewQuestion')->name('viewQuestion');

    Route::get('/createCbt', function () {
        return view('createCbt');
    })->name('createCbt');
});





Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');


    Route::post('saveBiodate', 'HomeController@saveBiodata')->name('saveBiodate');
    Route::post('saveAcademic', 'HomeController@saveAcademic')->name('saveAcademic');
    Route::get('saveAcademic', 'HomeController@saveAcademic')->name('saveAcademic');
    Route::post('uploadDoc', 'HomeController@uploadDoc')->name('uploadDoc');
    Route::get('takeCbt', 'CbtController@takeCbt')->name('takeCbt');
    Route::post('storeanswer', 'CbtController@storeAnswer')->name('storeanswer');
});
