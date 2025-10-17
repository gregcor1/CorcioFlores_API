<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



route::get('/zonas',[ZonaController::class,'ObtenerZonas']);
route::get('/zonas(idzona)',[ZonaController::class,'ObtenerZonas']);