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
    return view('study');
});


Route::post('/study', 'QuestionaireController@store');


Route::get('/admin', 'QuestionaireController@admin')->middleware('auth');  

Route::post('/grill', 'QuestionaireController@getData');  
Route::post('/mixer', 'QuestionaireController@getData');  
Route::post('/schrank', 'QuestionaireController@getData');  
Route::post('/couch', 'QuestionaireController@getData');  
Route::post('/staender', 'QuestionaireController@getData');  
Route::post('/waschmaschine', 'QuestionaireController@getData');  
Route::post('/bett', 'QuestionaireController@getData');  
Route::post('/pooltable', 'QuestionaireController@getData');  
Route::post('/lamp', 'QuestionaireController@getData');  
Route::post('/zelt', 'QuestionaireController@getData');  
Route::post('/wohnzimmertisch', 'QuestionaireController@getData');  
Route::post('/federballset', 'QuestionaireController@getData');  
Route::post('/campingtisch', 'QuestionaireController@getData');  
Route::post('/beamer', 'QuestionaireController@getData');  
Route::post('/gummistiefel', 'QuestionaireController@getData');  
Route::post('/koffer', 'QuestionaireController@getData');  
Route::post('/pcset', 'QuestionaireController@getData');  
Route::post('/stuhl', 'QuestionaireController@getData');  
Route::post('/teppich', 'QuestionaireController@getData');  
Route::post('/tischtennisplatte', 'QuestionaireController@getData');  
Route::post('/staubsauger', 'QuestionaireController@getData');  
Route::post('/pflanze', 'QuestionaireController@getData');  


Route::get('/grill', 'QuestionaireController@quest'); 
Route::get('/mixer', 'QuestionaireController@mixer');  
Route::get('/schrank', 'QuestionaireController@schrank');  
Route::get('/couch', 'QuestionaireController@couch');  
Route::get('/staender', 'QuestionaireController@staender');  
Route::get('/waschmaschine', 'QuestionaireController@waschmaschine');  
Route::get('/bett', 'QuestionaireController@bett');  
Route::get('/pooltable', 'QuestionaireController@pooltable');  
Route::get('/lamp', 'QuestionaireController@lamp');  
Route::get('/zelt', 'QuestionaireController@zelt');  
Route::get('/wohnzimmertisch', 'QuestionaireController@wohnzimmertisch');  
Route::get('/federballset', 'QuestionaireController@federballset');  
Route::get('/campingtisch', 'QuestionaireController@campingtisch');  
Route::get('/beamer', 'QuestionaireController@beamer');  
Route::get('/gummistiefel', 'QuestionaireController@gummistiefel');  
Route::get('/koffer', 'QuestionaireController@koffer');  
Route::get('/pcset', 'QuestionaireController@pcset');  
Route::get('/stuhl', 'QuestionaireController@stuhl');  
Route::get('/teppich', 'QuestionaireController@teppich');  
Route::get('/tischtennisplatte', 'QuestionaireController@tischtennisplatte');  
Route::get('/staubsauger', 'QuestionaireController@staubsauger');  
Route::get('/pflanze', 'QuestionaireController@pflanze');  


Route::get('/ende', 'QuestionaireController@ende');  


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
