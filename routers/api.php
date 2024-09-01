<?php

use MiniRestFramework\Router\Route;

Route::post('/test', [\MiniRest\Http\Controllers\TestController::class, 'test']);
Route::get('/test', [\MiniRest\Http\Controllers\TestController::class, 'test']);
