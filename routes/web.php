<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\ResponseController;
use Illuminate\Support\Facades\Route;

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

Route::post( '/response-format', [ResponseController::class, 'responseFormat'] );
Route::post( '/json-response', [ResponseController::class, 'jsonResponse'] );

Route::get( '/redirect-response1', [ResponseController::class, 'redirectResponse1'] );
Route::get( '/redirect-response2', [ResponseController::class, 'redirectResponse2'] );

Route::get( "/file-binary", [ResponseController::class, "fileBinary"] );
Route::get( "/file-download", [ResponseController::class, "fileDownload"] );

Route::get( "/cookie-response", [ResponseController::class, "cookieResponse"] );

Route::get( "/response-header", [ResponseController::class, "responseHeader"] );
Route::get( "/response-view", [ResponseController::class, "responseView"] );