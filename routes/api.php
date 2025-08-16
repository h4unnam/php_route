<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
Log::info('api.php loaded');

Route::get('users', function () {
    return response()->json([
        'message' => 'This route is deprecated, please use /users/{id} instead.'
    ]);
});

