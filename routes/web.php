<?php

use App\Http\Controllers\HasiltaniController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductNegoController;
use App\Models\Product;

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

        
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    Route::resource('post', PostController::class);

    Route::get('/informasi', [HomeController::class, 'info']);
    
    Route::post('post/{post}/comment', [PostCommentController::class, 'store'])->name('post.comment.store');

    Route::post('post/{post}/comment/edit', [PostCommentController::class, 'edit'])->name('post.comment.edit');
    
    Route::group(['middleware' => ['role:petani']], function(){
        Route::resource('products', ProductController::class);
    });
    
    Route::resource('infos', InfoController::class);
    
    Route::get('hasiltani', [HasiltaniController::class, 'index'])->name('hasiltani.index');
    
    Route::get('hasiltani/{hasil}', [HasiltaniController::class, 'show'])->name('hasiltani.show');
    
    Route::post('hasiltani/{hasil}/nego', [ProductNegoController::class, 'store'])->name('hasiltani.nego.store');

    Auth::routes();