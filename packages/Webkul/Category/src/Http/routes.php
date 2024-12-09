<?php

Route::group([
        'prefix'        => 'admin/category',
        'middleware'    => ['web', 'user']
    ], function () {

        Route::get('', 'Webkul\Category\Http\Controllers\CategoryController@index')->name('admin.category.index');
});

Route::controller(\Webkul\Category\Http\Controllers\CategoryController::class)->prefix('admin/leads')->group(function () {
    Route::get('', function () {
        echo "mmm";
    })->name('admin.category.leads');
});
