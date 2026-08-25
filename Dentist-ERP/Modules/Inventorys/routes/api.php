<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventorys\Http\Controllers\InventorysController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('inventorys', InventorysController::class)->names('inventorys');
});
