<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


//top
Route::get('/',[AuthorController::class,'index']);

//確認
Route::post('/confirm', [AuthorController::class, 'post']);

//完了
Route::get('/complete',[AuthorController::class,'complete']);