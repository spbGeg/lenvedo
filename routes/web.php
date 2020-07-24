<?php



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/all-url', function () {
    return view('all-url');
})->name('all-url');

Route::get('/all-url/{id}', 'UrlController@showOneUrl')->name('url-data-one');
Route::get('/all', 'UrlController@allData')->name('url-data');

Route::post('/submit', 'UrlController@submit')->name('url-add-form');


Route::get('/all-url/{id}/delete', 'UrlController@deleteUrl')->name('url-delete');
