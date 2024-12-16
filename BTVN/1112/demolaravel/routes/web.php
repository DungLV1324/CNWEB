<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController1612;

Route::get('/', PostController1612::class .'@index')->name('posts.index');
// returns the form for adding a post
    Route::get('/posts/create', PostController1612::class . '@create')
->name('posts.create');
// adds a post to the database
Route::post('/posts', PostController1612::class .'@store')
->name('posts.store');
Route::get('/posts/{post}', PostController1612::class .'@show')
->name('posts.show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController1612::class .'@edit')
->name('posts.edit');
// updates a post
Route::put('/posts/{post}', PostController1612::class .'@update')
->name('posts.update');
// deletes a post
Route::delete('/posts/{post}', PostController1612::class .'@destroy')
->name('posts.destroy');
