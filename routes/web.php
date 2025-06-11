<?php

use App\Models\Plant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;

Route::resource('plants', PlantController::class);

Route::get('/', function () {
    return redirect()->route('plants.index');
});
