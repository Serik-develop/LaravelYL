<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page',[App\Http\Controllers\MyPlaceController::class,'index']);

Route::get('/resp',function (){
    return response('Hello world')->cookie('name','value',$minutes=3);
});

Route::get('/posts',[App\Http\Controllers\PostController::class,'index'])->name('post.index');
Route::get('/posts/create',[App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::post('/posts',[App\Http\Controllers\PostController::class,'store'])->name('post.store');
Route::get('/posts/{post}',[App\Http\Controllers\PostController::class,'show'])->name('post.show');
Route::get('/posts/{post}/edit',[App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
Route::patch('/posts/{post}',[App\Http\Controllers\PostController::class,'update'])->name('post.update');
Route::delete('/posts/{post}/delete',[App\Http\Controllers\PostController::class,'delete'])->name('post.delete');
Route::get('/posts/first_or_create',[App\Http\Controllers\PostController::class,'first_or_create']);

Route::get('/main',[App\Http\Controllers\MainController::class,'index'])->name('main.index');
Route::get('/about',[App\Http\Controllers\AboutController::class,'index'])->name('about.index');
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
