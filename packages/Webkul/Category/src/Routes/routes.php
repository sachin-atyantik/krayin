<?php
use Illuminate\Support\Facades\Route;
use Webkul\Category\Http\Controllers\Admin\CategoryController;

Route::group([
    'middleware' => ['web', 'admin_locale'],
    'prefix'     => config('app.admin_path')
], function () {
    Route::get('/categories', [CategoryController::class, 'index']);
});
