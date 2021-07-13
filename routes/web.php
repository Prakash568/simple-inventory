<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;

use Illuminate\Support\Facades\Route;

Route::get('/product',[ProductController::class,'index']);
Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product/create',[ProductController::class,'store']);
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::put('/product/edit/{id}',[ProductController::class,'update']);
Route::delete('/product/delete/{id}',[ProductController::class,'destroy']);


Route::get('/sale',[SaleController::class,'index']);
Route::get('/sale/create',[SaleController::class,'create']);
Route::post('/sale/create',[SaleController::class,'store']);