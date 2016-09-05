<?php

Route::group(['namespace' => 'L5Starter\Core\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
});
