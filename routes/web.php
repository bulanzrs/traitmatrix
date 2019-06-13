<?php

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

//respondent
Route::get('/menu', function () {
    return view('respondent.menu');
});
Route::get('/c', 'RespondentController@index')->name('cpp');
Route::post('/cc', 'RespondentController@store')->name('cc');


Auth::routes();

//user functionality
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cpp', 'HomeController@index1')->name('test');


//all admin functionality
Route::group(['middleware' => ['admin']], function () {

    //admin functionality
    Route::get('/create-assesment', function () {
        return view('admin.create_assesment');
    });
    Route::post('/create-assesment', 'AssesmentController@store')->name('assesment');

    Route::get('/create_question', 'QuestionController@index');

    Route::post('/create_question', 'QuestionController@store')->name('question');

    Route::resource('questions','QuestionController');

    Route::get('/cpp_all', function () {
        return view('admin.cpp_overall');
    });

    Route::get('/adt_all', function () {
        return view('admin.adt_overall');
    });


    Route::get('/test2', 'HomeController@index2')->name('test1');
});


Route::get('/cc', function () {
    return view('admin.dashboard');
});