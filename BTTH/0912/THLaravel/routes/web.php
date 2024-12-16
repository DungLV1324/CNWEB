<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController1612;
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, "index"]);
Route::get("posts", [PostController1612::class, "index"]);
