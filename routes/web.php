<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MapResponseController;



Route::get('/map-response-test' , [MapResponseController::class , 'index']);
