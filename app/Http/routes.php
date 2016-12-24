<?php


Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');