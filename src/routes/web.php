<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Vsellis\Contact\Http\Controllers'], function() {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@store')->name('contact.store');
});