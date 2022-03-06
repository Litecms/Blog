<?php

// API routes  for blog.

// Guard routes for blog
Route::prefix('{guard}/blog')->group(function () {
    Route::resource('blog', 'BlogResourceController');
    Route::resource('category', 'CategoryResourceController');
    Route::resource('tag', 'TagResourceController');
});

// Public routes for blog
Route::get('blogs', 'BlogPublicController@index');
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
                Route::resource('tag', 'TagResourceController');
                Route::resource('category', 'CategoryResourceController');
            });

            // Public routes for blog
            Route::get('blogs', 'BlogPublicController@index');
            Route::get('blog/{slug?}', 'BlogPublicController@show');
        }
    );
}