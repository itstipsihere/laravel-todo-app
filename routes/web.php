<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});


//method to create account
Route::get('/register' , function(){
    return view('signup');
})->name('openSignup');// calls signup page

// --------------------------------------------------------------------------------

Route::post('/create', [UserController::class, 'create'])->name('methodcreate');
Route::get('/login', [UserController::class, 'takeLogin'])->name('openLogin'); //it calls login page

//method verifying login
Route::post('login',[UserController::class,'login'])->name('methodlogin');
//routeing after verifying to hoomepage
Route::get('/home',[UserController::class,'home'])->name('todo.homepage');


//===============================Todo portion ==================================//

Route::view('createtodo','createtodo')->name('todo.create'); //it call create todo page

Route::post('/todocreate', [TodoController::class, 'maketodo'])->name('todo.maketodo');

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');

//==========================show todo details

Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.view');



//==========================delete todo===========================
Route::get('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');

//====================UPDATE TODO================================================
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('update.todo');//update function

Route::get('/todo/edit/{id}',[TodoController::class,'linkeditpage'])->name('to.editpage');

//====================================== Logout =============================
Route::get('/logout',[UserController::class,'logout'])->name('logout');