<?php

Route::group(['namespace' => 'Samara\Contact\Http\Controllers'], function() {
	Route::get('/contacts', 'ContactController@index')->name('contacts.index');
	Route::post('/contacts', 'ContactController@StoreAndsendEmail')->name('contacts.store');
});
