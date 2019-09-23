<?php



Route::get('/','pagesController@index');
Route::get('/about','pagesController@about');
Route::get('/services','pagesController@services');

/*_____________________ Applications Routes _________________ */
Route::get('/Applications' ,'ApplicationsController@index')->name('Applications.index');
Route::get('/Applications/create','ApplicationsController@create')->name('Applications.create');
Route::post('/Applications','ApplicationsController@store')->name('Applications.store');
Route::get('/Applications/{id}','ApplicationsController@show')->name('Applications.show');

Route::get('/Applications/{id}/edit','ApplicationsController@edit')->name('Applications.edit');
Route::put('/Applications/{id}','ApplicationsController@update')->name('Applications.update');

Route::delete('/Applications/{id}','ApplicationsController@destroy')->name('Applications.destroy');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
