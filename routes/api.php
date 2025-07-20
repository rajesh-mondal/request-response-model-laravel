<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

// Route::get( '/user', function ( Request $request ) {
//     return $request->user();
// } )->middleware( 'auth:sanctum' );
Route::get( '/hello', [DemoController::class, 'DemoAction'] );
Route::get( '/hello/{name}/{age}', [DemoController::class, 'requestParameter'] );
Route::get( '/hello/{name}/{age}', [DemoController::class, 'requestHeaderBodyParam'] );
Route::get( '/json-body', [DemoController::class, 'requestJson'] );
Route::get( '/req-header', [DemoController::class, 'requestHeader'] );
Route::post( '/form-data', [DemoController::class, 'formData'] );
Route::post( '/file-upload', [DemoController::class, 'fileUpload'] );
Route::post( '/ip-address', [DemoController::class, 'ipAddress'] );
Route::post( '/acc-content', [DemoController::class, 'accContentType'] );
Route::post( '/cookie', [DemoController::class, 'cookie'] );