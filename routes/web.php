<?php

// Web routes  for blog.

// Guard routes for blog
Route::prefix('{guard}/blog')->group(function () {
    Route::resource('blog', 'BlogResourceController');
});

// Guard routes for category
Route::prefix('{guard}/blog')->group(function () {
    Route::resource('category', 'CategoryResourceController');
});

// Guard routes for tag
Route::prefix('{guard}/blog')->group(function () {
    Route::resource('tag', 'TagResourceController');
});



// Public routes for blog
Route::get('blogs/', 'BlogPublicController@index');
Route::get('blog/{slug?}', 'BlogPublicController@show');


if (Trans::isMultilingual()) {
    Route::group(
        [
            'prefix' => '{trans}',
            'where'  => ['trans' => Trans::keys('|')],
        ],
        function () {
            // Guard routes for blog
            Route::prefix('{guard}/blog')->group(function () {
                Route::resource('blog', 'BlogResourceController');
            });
            
            // Guard routes for category
            Route::prefix('{guard}/blog')->group(function () {
                Route::resource('category', 'CategoryResourceController');
            });
            
            // Guard routes for tag
            Route::prefix('{guard}/blog')->group(function () {
                Route::resource('tag', 'TagResourceController');
            });
            
            

            // Public routes for blog
            Route::get('blogs/', 'BlogPublicController@index');
            Route::get('blog/{slug?}', 'BlogPublicController@show');

        }
    );
}