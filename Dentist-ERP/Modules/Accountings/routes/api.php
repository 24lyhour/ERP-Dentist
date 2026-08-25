<?php

use Illuminate\Support\Facades\Route;
use Modules\Accountings\Http\Controllers\AccountingsController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('accountings', AccountingsController::class)->names('accountings');
});
