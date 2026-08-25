<?php

use Illuminate\Support\Facades\Route;
use Modules\Clinicals\Http\Controllers\ClinicalsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('clinicals', ClinicalsController::class)->names('clinicals');
});
