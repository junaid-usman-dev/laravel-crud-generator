<?php


Route::group(['namespace'=>'Junaid\Crud\Controllers'],function(){

    Route::get ('list', 'CustomerController@index')->name('list');

    Route::get ('create', 'CustomerController@create')->name('create');
    Route::post ('store', 'CustomerController@store')->name('store');

    Route::get ('edit/{id}', 'CustomerController@edit')->name('edit');
    Route::post ('update', 'CustomerController@update')->name('update');

    Route::get ('delete/{id}', 'CustomerController@destroy')->name('delete');

}); 

// Route::get('create', function(){
//     return view('crud::create');
// });