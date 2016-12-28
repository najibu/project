<?php

Route::group(['middleware' => ['web']], function () {
  Route::get('cards', 'CardsController@index');
  Route::get('cards/{card}', 'CardsController@show');

  Route::post('cards/{card}/notes', 'NotesController@store');
  Route::get('notes/{note}/edit', 'NotesController@edit');
  Route::patch('notes/{note}', 'NotesController@update');

  Route::auth();
  Route::get('/dashboard', 'HomeController@index');
  Route::get('foobar', function(){
    $user = new App\User;
    $user->username = 'JohnAdminstratorDoe';
    $user->email = 'najibu@example.com';
    $user->password = bcrypt('password');
    $user->save();
    return 'Done';
  });
});



