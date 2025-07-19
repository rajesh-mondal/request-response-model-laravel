<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

// Route::get( '/user', function ( Request $request ) {
//     return $request->user();
// } )->middleware( 'auth:sanctum' );
Route::get( '/hello', [DemoController::class, 'DemoAction'] );
Route::get( '/hello/{name}/{age}', [DemoController::class, 'requestParameter'] );
Route::get( '/json-body', [DemoController::class, 'requestJson'] );
Route::get( '/req-header', [DemoController::class, 'requestHeader'] );