<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['message' => 'Horizon Industries API', 'version' => '1.0.0'];
});
