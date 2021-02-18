<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\ArticlesController;

Route::view('/about', 'about');
Route::view('/contacts', 'contacts');

Route::resource('/tasks', TasksController::class);

Route::get('/', [ArticlesController::class, 'index']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/', [ArticlesController::class, 'store']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::get('/admin/feedback', [FeedbacksController::class, 'index']);
Route::post('/contacts', [FeedbacksController::class, 'store']);
