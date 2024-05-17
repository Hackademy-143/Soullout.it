<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class , 'home'])->name("welcome");
Route::get('/article/create', [ArticleController::class , 'create_article'])->name("article.create");