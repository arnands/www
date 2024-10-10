<?php

use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use App\Http\Controllers\HtmlController;

>>>>>>> 78e9dcb (first commit)

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', [HelloWorldController::class,
'index']);
<<<<<<< HEAD
=======

Route::get('ambilfile', [HelloWorldController::class, 'ambilFile']);
Route::get('getlorem', [HtmlController::class, 'getlorem']);
>>>>>>> 78e9dcb (first commit)
