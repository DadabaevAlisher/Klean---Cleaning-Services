<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\userController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'main']);
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/latestBlog', [PageController::class, 'blog'])->name('blog');
Route::get('/blogDetal', [PageController::class, 'single'])->name('single');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');







// Route::get('/users', [userController::class, 'index']);
// Route::get('/users/create', [userController::class, 'create']);
// Route::get('/users/{user}', [userController::class, 'show']);
// Route::get('users/{user}/edit', [userController::class, 'edit']);