<?php

use App\Http\Controllers\CompletedStepsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\FeedbacksController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\TaskStepsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::get('/test', function(\Illuminate\Http\Request $request) {
//    dd($request->session()->all());
//    session(['name' => 'test']);
//    session()->forget('name');
//    session()->has('name');
//    return session('name', 'defaultValue');
//});

Route::view('/about', 'about');
Route::view('/contacts', 'contacts');

Route::get('/tasks/tags/{tag}', [TagsController::class, 'index']);

Route::resource('/tasks', TasksController::class);

Route::get('/', [ArticlesController::class, 'index']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/', [ArticlesController::class, 'store']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::get('/admin/feedback', [FeedbacksController::class, 'index']);
Route::post('/contacts', [FeedbacksController::class, 'store']);

Route::post('/tasks/{task}/steps', [TaskStepsController::class, 'store']);

Route::post('/completed-steps/{step}', [CompletedStepsController::class, 'store']);
Route::delete('/completed-steps/{step}', [CompletedStepsController::class, 'destroy']);

Auth::routes();

Route::middleware('auth')->post('/companies', function () {
    auth()->user()->company()->create(request()->validate(['name' => 'required']));
});
