<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

Route::get( '/hello', [DemoController::class, 'DemoAction'] );
