<?php

Route::group(['prefix' => config('leverage.route.prefix')], function () {
    Route::get('/', 'Denly93\Leverage\Http\Controllers\DashboardController@index');
});