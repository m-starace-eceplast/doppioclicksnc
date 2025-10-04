<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Intro\IntroController;

Route::get('/', [IntroController::class,'index']);
