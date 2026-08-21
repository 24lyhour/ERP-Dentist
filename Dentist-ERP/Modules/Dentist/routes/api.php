<?php

use Illuminate\Support\Facades\Route;
use Modules\Dentist\Http\Controllers\DentistController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('dentists', DentistController::class)->names('dentist');
});
