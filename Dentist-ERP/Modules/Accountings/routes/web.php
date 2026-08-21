<?php

use Illuminate\Support\Facades\Route;
use Modules\Accountings\Http\Controllers\AccountingsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('accountings', AccountingsController::class)->names('accountings');
});
