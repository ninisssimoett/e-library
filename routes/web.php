<?php

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BorrowingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Student\DashboardStudentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(WelcomeController::class)->group(function() {
    Route::get('/', 'welcome')->name('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::prefix('admin')->middleware('auth',AdminMiddleware::class)->group(function() {
    Route::controller(DashboardAdminController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
    });

    //  CRUD Category
    Route::controller(CategoryController::class)->group(function() {
        Route::get('/category', 'index')->name('category');
        Route::post('/category/store', 'store')->name('category.store');
        Route::put('/category/update/{id}', 'update')->name('category.update');
        Route::delete('/category/destroy/{id}', 'destroy')->name('category.destroy');
    });

    // CRUD Book
    Route::controller(BookController::class)->group(function(){
        Route::get('/book', 'index')->name('book'); // untuk menampilkan semua data buku
        Route::get('/book/create', 'create')->name('book.create'); // menampilkan form tambah buku
        Route::post('/book/store', 'store')->name('book.store'); // menyimpan buku ke data base
        Route::get('/book/{id}', 'detail')->name('book.detail'); // detail data
        Route::get('/book/edit/{id}', 'edit')->name('book.edit'); // edit data
        Route::put('/book/update/{id}', 'update')->name('book.update'); // menyimpan data update
        Route::delete('/book/destroy/{id}', 'destroy')->name('book.destroy'); // menghapus data

    });

    // borrowing
    Route::controller(BorrowingController::class)->group(function() {
        Route::get('/borrowing/unreturned', 'borrowingUnreturned')->name('borrowing.unreturned');
        Route::put('/borrowing/{id}/return', 'returnBook')->name('borrowing.return');
        Route::get('/borrowing/returned', 'borrowingReturned')->name('borrowing.returned');
        Route::get('/borrowing/all', 'borrowingAll')->name('borrowing.all');

    });
});


// Student
Route::prefix('student')->middleware('auth')->group(function() {
    Route::controller(DashboardStudentController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('student.dashboard');
        Route::get('/show/book/{id}', 'show')->name('student.book.show');
        Route::post('/borrow/book/{id}', 'borrow')->name('student.borrow'); //menambahkan data baru
        Route::get('/borrow/book/all', 'borrowedBooks')->name('student.borrow.all');
        Route::get('/all/books', 'allBooks')->name('student.all.book');

    });
});  