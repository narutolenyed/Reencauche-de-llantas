<?php

use App\Http\Controllers\LlantaController;

Route::get('/', function () {
    return redirect('/llantas');
});

Route::resource('llantas', LlantaController::class);

