<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// auth
Route::middleware('isGuest')->group(function () {
    Route::get('/', [TodoController::class, 'login'])->name('login');
    Route::get('/register', [TodoController::class, 'register'])->name('register');
    Route::post('/register', [TodoController::class, 'registerAccount'])->name('register.input');
    Route::post('/login', [TodoController::class, 'auth'])->name('login.auth');

});

Route::get('/logout', [TodoController::class, 'logout'])->name('logout');

// todo
Route::middleware('isLogin')->prefix('/todo')->name('todo.')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('index');
    Route::get('/todolist', [TodoController::class, 'todolist'])->name('todolist');
    Route::get('/completed', [TodoController::class, 'completed'])->name('completed');
    Route::get('/create', [TodoController::class, 'create'])->name('create');
    Route::post('/store', [TodoController::class, 'store']);
    Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [TodoController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
    Route::patch('/completed/{id}', [TodoController::class, 'updateCompleted'])->name('update-completed');
});