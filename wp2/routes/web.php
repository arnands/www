<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class,
'index']);

Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HtmlController::class, 'getlorem']);
