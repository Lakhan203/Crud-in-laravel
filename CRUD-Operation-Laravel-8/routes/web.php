<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/post',[PostController::class,'getAllPost'])->name('post,getAllPost');

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add,addPost');

Route::post('/add-post',[PostController::class,'AddPostSubmit'])->name('post.addsubmit');

Route::get('/post/{post_id}',[PostController::class,'getPostById'])->name('post.getPostById');

Route::get('/delete_post/{post_id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit_post/{post_id}',[PostController::class,'EditPost'])->name('post.edit');

Route::post('/update_post',[PostController::class,'updatePost'])->name('post.update');//name ke andhar route name hota hai