<?php

Route::name('admin.')->group(function () {

    Route::group([

        'middleware'    => 'auth.admin',
        'prefix'        => 'admin',
        'namespace'     => 'Admin',

    ], function () {

        Route::resource('/admin','AdminDashboardController');

    });

});
