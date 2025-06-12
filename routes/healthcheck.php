<?php

use AdevPmftc\LaravelHealthcheck\HealthCheckController;

Route::get(config('healthcheck.path', 'healthcheck'), HealthCheckController::class);
