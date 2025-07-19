<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get( '/hello', [DemoController::class, 'DemoAction'] );
Route::get( '/hello/{name}/{age}', [DemoController::class, 'requestParameter'] );
Route::get( '/json-body', [DemoController::class, 'requestJson'] );
