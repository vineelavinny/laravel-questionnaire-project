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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('/questionnaires/create','QuestionnaireController@create');
route::post('/questionnaires','QuestionnaireController@store');
route::get('/questionnaires/{questionnaire}','QuestionnaireController@show');
route::get('/questionnaires/{questionnaire}/questions/create','QuestionController@create');
route::post('/questionnaires/{questionnaire}/questions','QuestionController@store');