<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ArticleController;
    use App\Http\Controllers\AuthenticationController;

Route::redirect('/', '/articles');

Route::prefix('articles')->as('articles.')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/store', [ArticleController::class, 'store'])->name('store')->middleware('auth');

    Route::get('/{id}', [ArticleController::class, 'show'])->name('show');
    Route::middleware('auth')->group(function () {
        Route::post('/', [ArticleController::class, 'create'])->name('create');
        Route::delete('/{id}', [ArticleController::class, 'delete'])->name('delete');
    });
});


Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthenticationController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');
});