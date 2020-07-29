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

Route::resource("movie","MovieController");

Route::resource("student/create","StudentController@create");
Route::resource("student/store","StudentController@store");

// Route::post('bank', 'BankController@store')->name('bank-store');

// Route::get("bank","BankController@index");



Route::get("form","TestController@myform");

Route::post("submitmyform","TestController@submitmyform");


// Route::get("select","TestController@selectmodel");

// Route::get("index","TestController@index");

// Route::get("orm","TestController@insertorm");

// Route::get("queryrun","TestController@queryrun");

// Route::get("condition","TestController@conditional");

// Route::get("home","HtmlController@home");

// Route::get("aboutus","HtmlController@aboutus");

// Route::get("services","HtmlController@services");

// Route::get("blog","HtmlController@blog");

// Route::get("contactus","HtmlController@contactus");

// Route::get("home","HomeController@index");
// Route::get("call","HomeController@call");

// Route::get("call","HomeController@call");

// Route::get("services","HomeController@services");

// Route::get("products","HomeController@products");

// Route::get("team","HomeController@team");

/*Route::get("/call",function(){
    return view("call");

});*/

// Route::get("test","TestController@aboutus");


Route::get('student','EmplloyeeController@index');

Route::get('student/create','EmplloyeeController@create');
Route::post('student/create/{id}','EmplloyeeController@store');

Route::get('student/destroy/{id}','EmplloyeeController@destroy')->name('student.delete');

Route::get('student/edit/{id}','EmplloyeeController@edit')->name('student.edit');

Route::post('student/update/{id}','EmplloyeeController@update')->name('student.update');


