<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','HomeController@Logout')->name('user.logout');
//Category
Route::get('/categories','CategoryController@index')->name('categories.index');
Route::get('/categories/ceate','CategoryController@create')->name('categories.create');
Route::post('/categories','CategoryController@store')->name('categories.store');
Route::get('/categories/{id}','CategoryController@show')->name('categories.show');
Route::get('/categories/{id}/edit','CategoryController@edit')->name('categories.edit');
Route::put('/categories/{id}','CategoryController@update')->name('categories.update');
Route::delete('/categories/{id}','CategoryController@delete')->name('categories.delete');

//Employye routes
Route::prefix('employees')->group(function(){

  Route::get('/add','Backend\EmployeeController@add')->name('employees.add');
  Route::get('/view','Backend\EmployeeController@index')->name('employees.list');
  Route::post('/store','Backend\EmployeeController@store')->name('employees.store');
  Route::get('/edit/{id}','Backend\EmployeeController@edit')->name('employees.edit');
  Route::post('/update/{id}','Backend\EmployeeController@update')->name('employees.update');
  Route::get('/delete/{id}','Backend\EmployeeController@delete')->name('employees.delete');

});
