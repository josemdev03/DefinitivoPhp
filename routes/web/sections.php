<?php

use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Route;

Route::get('/sections', [SectionsController::class, 'index'])
    ->name('sections.index');