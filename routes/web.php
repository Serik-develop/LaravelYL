<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/my_page',[App\Http\Controllers\MyPlaceController::class,'index']);

Route::get('/resp',function (){
    return response('Hello world')->cookie('name','value',$minutes=3);
});



Route::get('/posts',App\Http\Controllers\Post\IndexController::class)->middleware('admin')->name('post.index');
Route::get('/posts/create',App\Http\Controllers\Post\CreateController::class)->name('post.create');
Route::post('/posts',App\Http\Controllers\Post\StoreController::class)->middleware('admin')->name('post.store');
Route::get('/posts/{post}',App\Http\Controllers\Post\ShowController::class)->middleware('admin')->name('post.show');
Route::get('/posts/{post}/edit',App\Http\Controllers\Post\EditController::class)->middleware('admin')->name('post.edit');
Route::patch('/posts/{post}',App\Http\Controllers\Post\UpdateController::class)->middleware('admin')->name('post.update');
Route::delete('/posts/{post}/delete',App\Http\Controllers\Post\DeleteController::class)->middleware('admin')->name('post.delete');

Route::get('/main',[App\Http\Controllers\MainController::class,'index'])->name('main.index');
Route::get('/about',[App\Http\Controllers\AboutController::class,'index'])->name('about.index');
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact.index');

Route::group(['namespace' => 'App\Http\Controllers\Admin'],function() {

    Route::group(['namespace' => 'Post', 'prefix' => 'admin'], function(){
        Route::get('/post',App\Http\Controllers\Admin\Post\IndexController::class)->name('admin.post.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
