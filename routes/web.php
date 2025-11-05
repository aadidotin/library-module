<?php

use Aadi\LibraryModule\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/library/test', [LibraryController::class, 'index']);
