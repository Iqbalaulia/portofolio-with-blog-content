<?php

Route::name('admin.')->group(function () {

    Route::group([

        'middleware'    => 'auth.admin',
        'prefix'        => 'admin',
        'namespace'     => 'Admin',

    ], function () {

        Route::resource('/admin','AdminDashboardController');
        Route::resource('/profile', 'AdminDashboardProfileController');
        Route::resource('/detail-profile', 'AdminDashboardDetailProfileController'); 
        Route::resource('/education', 'AdminDashboardEducationController');         
        Route::resource('/experiences', 'AdminDashboardExperiencesController');               
        Route::resource('/project', 'AdminDashboardProjectController');       
        Route::resource('/skill', 'AdminDashboardSkillController');               
        Route::resource('/message-admin', 'AdminDashboardMessageController');
        Route::resource('/category-blog', 'AdminDashboardCategoryController');               
        Route::resource('/my-blog', 'AdminDashboardBlogController');               


    });

});
