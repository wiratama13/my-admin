<?php

use Illuminate\Support\Facades\Auth;
use UniSharp\LaravelFilemanager\Lfm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminBorrowController;
use App\Http\Controllers\Admin\AdminBookController;


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

Auth::routes();

Route::get('/', [AdminController::class, 'index'])->name('home')->middleware(['auth', 'isAdmin']);


Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth', 'isAdmin']], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin');
        
        /**
         * Borrow
         */
        Route::get('/borrow', [AdminBorrowController::class, 'index'])->name('admin-borrow');
        Route::get('/borrow/create', [AdminBorrowController::class, 'create'])->name('admin-borrow-create');
        Route::post('/borrow/store', [AdminBorrowController::class, 'store'])->name('admin-borrow-store');
        Route::get('/borrow/show/{slug}', [AdminBorrowController::class, 'show'])->name('admin-borrow-show');
        Route::get('/borrow/edit/{slug}', [AdminBorrowController::class, 'edit'])->name('admin-borrow-edit');
        Route::post('/borrow/update/{id}', [AdminBorrowController::class, 'update'])->name('admin-borrow-update');
        Route::delete('/borrow/delete/{id}', [AdminBorrowController::class, 'destroy'])->name('admin-borrow-delete');
        Route::get('/borrow/view/{slug}', [AdminBorrowController::class, 'view'])->name('admin-borrow-view');

        /**
         * Book
         */
        // Route::get('/magazine', [AdminMagazineController::class, 'index'])->name('admin-magazine');

        Route::get('/book', [AdminBookController::class, 'index'])->name('admin-book');
        Route::get('/book/create', [AdminBookController::class, 'create'])->name('admin-book-create');
        Route::post('/book/store', [AdminBookController::class, 'store'])->name('admin-book-store');
        Route::get('/book/show/{slug}', [AdminBookController::class, 'show'])->name('admin-book-show');
        Route::get('/book/edit/{id}', [AdminBookController::class, 'edit'])->name('admin-book-edit');
        Route::post('/book/update/{id}', [AdminBookController::class, 'update'])->name('admin-book-update');
        Route::delete('/book/delete/{id}', [AdminBookController::class, 'destroy'])->name('admin-book-delete');
        Route::get('/book/view/{slug}', [AdminBookController::class, 'view'])->name('admin-book-view');

    });
});


/**
 * Agar bisa upload file
 */

Route::group(['prefix' => 'filemanager'], function () {
    Lfm::routes();
});
