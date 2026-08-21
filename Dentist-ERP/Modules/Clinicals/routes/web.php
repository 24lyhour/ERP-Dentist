<?php

use Illuminate\Support\Facades\Route;
use Modules\Clinicals\Http\Controllers\ClinicalsController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('clinicals', ClinicalsController::class)->names('clinicals');
});
