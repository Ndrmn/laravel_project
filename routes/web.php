<?php

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');

Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth.login');
    Route::post('login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
    Route::post('logout', [\App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.auth.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {
Route::get('admin/', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
});
