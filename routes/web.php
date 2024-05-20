<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [FrontController::class , 'home'])->name("welcome");
Route::get('/categoria/{category}', [FrontController::class , 'categoryShow'])->name("categoryShow");
Route::get('/prodotti', [FrontController::class, 'prodottiShow'])->name('prodottiShow');
Route::get('/dettaglio/categoria/{category}' , [FrontController::class, 'categoryDet'])->name('categoryDet');
Route::middleware(['auth'])->group(function(){
Route::get('/article/create', [ArticleController::class , 'create_article'])->name("article.create");
});
