<?php

use Illuminate\Support\Facades\Route;
use Modules\Dentist\Http\Controllers\DentistController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('dentists', DentistController::class)->names('dentist');
});
