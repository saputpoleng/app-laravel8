<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('home', [
		"title" => "Home"
	]);
});

Route::get('/about', function () {
	// view ke about
	return view('about', [
		"title" => "About"
	]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function (Category $category) {
	return view('categories', [
		'title' => 'Post Categories',
		'categories' => Category::all()
	]);
});

Route::middleware('auth')->group(function () {


	Route::get('/dashboard', function () {
		return view('dashboard.index');
	});

	Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
	Route::resource('/dashboard/posts', DashboardPostController::class);
});

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');

// Route::get('posts/{post}', [PostController::class, 'show']);


// Route::get('/categories/{category:slug}', function (Category $category) {
// 	return view('posts', [
// 		'title' => "Post By Catagory : $category->name",
// 		'posts' => $category->posts->load(['category', 'author'])
// 	]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
// 	return view('posts', [
// 		'title' => "Post By Author : $author->name",
// 		'posts' => $author->posts->load(['category', 'author'])
// 	]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class, 'store']);
