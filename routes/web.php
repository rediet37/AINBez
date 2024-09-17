<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'openAINHomepage'])->name('ain.home');
Route::get('/about', [PagesController::class, 'openAINAboutpage'])->name('ain.about');
Route::get('/contact', [PagesController::class, 'openAINContactpage'])->name('ain.contact');
Route::get('/products', [PagesController::class, 'openAINProducts'])->name('ain.product_list');
Route::get('/product/{id}', [PagesController::class, 'openAINProduct'])->name('ain.product');
Route::get('/webpages', [PagesController::class, 'openAINWebpages'])->name('ain.webpage_list');
Route::get('/webpage/{id}', [PagesController::class, 'openAINWebpage'])->name('ain.webpage');
Route::get('/news', [PagesController::class, 'openAINAllNews'])->name('ain.news_list');
Route::get('/news/{id}', [PagesController::class, 'openAINNews'])->name('ain.news');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('post_products', ProductsController::class);
    Route::resource('post_webpages', WebpageController::class);
    Route::resource('post_news', NewsController::class);
    Route::resource('users', UsersController::class);
    
    
});

Route::get('/download-test-pdf', function(){
    $filepath = public_path('test.pdf');
    return response()->download($filepath);
});