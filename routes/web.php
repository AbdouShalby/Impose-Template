<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Admin Protected Routes
// Dashboard Route
Route::get('/dashboard', [DashbaordController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    // Posts Routes
    Route::get('dashboard/posts', [DashboardPostController::class, 'index'])->name('d.posts');
    Route::get('dashboard/post/create', [DashboardPostController::class, 'create'])->name('d.post.create');
    Route::post('dashboard/post/store', [DashboardPostController::class, 'store'])->name('d.post.store');
    Route::get('dashboard/post/show/{slug}', [DashboardPostController::class, 'show'])->name('d.post.show');
    Route::get('dashboard/post/edit/{id}', [DashboardPostController::class, 'edit'])->name('d.post.edit');
    Route::post('dashboard/post/update/{id}', [DashboardPostController::class, 'update'])->name('d.post.update');
    Route::get('dashboard/post/destroy/{id}', [DashboardPostController::class, 'destroy'])->name('d.post.destroy');

    // Profile Routes
    Route::get('dashboard/profile', [DashboardProfileController::class, 'index'])->name('d.profile');
    Route::put('dashboard/profile/update', [DashboardProfileController::class, 'update'])->name('d.profile.update');

    // User Route
    Route::get('dashboard/users', [DashboardUserController::class, 'index'])->name('d.users');
    Route::get('dashboard/user/create', [DashboardUserController::class, 'create'])->name('d.user.create');
    Route::post('dashboard/user/store', [DashboardUserController::class, 'store'])->name('d.user.store');
    Route::get('dashboard/user/approve/{id}', [DashboardUserController::class, 'approve'])->name('d.user.approve');
    Route::get('dashboard/user/destroy/{id}', [DashboardUserController::class, 'destroy'])->name('d.user.destroy');

    // Category Route
    Route::get('dashboard/categories', [DashboardCategoryController::class, 'index'])->name('d.categories');
    Route::get('dashboard/category/create', [DashboardCategoryController::class, 'create'])->name('d.category.create');
    Route::post('dashboard/category/store', [DashboardCategoryController::class, 'store'])->name('d.category.store');
    Route::get('dashboard/category/edit/{id}', [DashboardCategoryController::class, 'edit'])->name('d.category.edit');
    Route::post('dashboard/category/update/{id}', [DashboardCategoryController::class, 'update'])->name('d.category.update');
    Route::get('dashboard/category/destroy/{id}', [DashboardCategoryController::class, 'destroy'])->name('d.category.destroy');
});



// User Protected Routes
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/show/{slug}', [PostController::class, 'show'])->name('post.show');

// Category Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

// Features Route
Route::get('/features', function () {
    return view('website.features');
})->name('features');

// About Route
Route::get('/about', function () {
    return view('website.about');
})->name('about');

// Contant Route
Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');
