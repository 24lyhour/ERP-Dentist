<?php

use Illuminate\Support\Facades\Route;
use Modules\Inventorys\Http\Controllers\InventorysController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('inventorys', InventorysController::class)->names('inventorys');
});
