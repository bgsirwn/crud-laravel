<?php



Route::get('/', 'CustomerController@get_data');

Route::get('/add', function () {
    return view('create_customer');
});

Route::post('/save', 'CustomerController@create_post');

Route::post('/save_edit', 'CustomerController@save_edit');

Route::get('/delete/{id}', ['as' =>'delete', 'uses'=> 'CustomerController@delete']);

Route::get('/edit/{id}', ['as' =>'edit', 'uses'=> 'CustomerController@edit']);