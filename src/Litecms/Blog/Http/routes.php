<?php

// Admin web routes  for blog
Route::group(['prefix' => trans_setlocale() . '/admin/blog'], function () {
    Route::post('blog/status/{blog}', 'Litecms\Blog\Http\Controllers\BlogAdminController@update');
    Route::resource('blog', 'Litecms\Blog\Http\Controllers\BlogAdminController');
});

// Admin API routes  for blog
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/blog'], function () {
    Route::resource('blog', 'Litecms\Blog\Http\Controllers\BlogAdminApiController');
});

// User web routes for blog
Route::group(['prefix' => trans_setlocale() . '/user/blog'], function () {
    Route::resource('blog', 'Litecms\Blog\Http\Controllers\BlogUserController');
    Route::get('/category/{category?}', 'Litecms\Blog\Http\Controllers\BlogUserController@category');

});

// User API routes for blog
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/blog'], function () {
    Route::resource('blog', 'Litecms\Blog\Http\Controllers\BlogUserApiController');
});

// Public web routes for blog
Route::group(['prefix' => trans_setlocale() . '/blogs'], function () {
    Route::get('/', 'Litecms\Blog\Http\Controllers\BlogController@index');
    Route::get('/{slug?}', 'Litecms\Blog\Http\Controllers\BlogController@show');
    Route::get('/category/{category?}', 'Litecms\Blog\Http\Controllers\BlogController@category');
});

// Public API routes for blog
Route::group(['prefix' => trans_setlocale() . 'api/v1/blogs'], function () {
    Route::get('/', 'Litecms\Blog\Http\Controllers\BlogApiController@index');
    Route::get('/{slug?}', 'Litecms\Blog\Http\Controllers\BlogApiController@show');
});

// Admin web routes  for category
Route::group(['prefix' => trans_setlocale() . '/admin/blog'], function () {
    Route::resource('category', 'Litecms\Blog\Http\Controllers\CategoryAdminController');
});

// Admin API routes  for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/blog'], function () {
    Route::resource('category', 'Litecms\Blog\Http\Controllers\CategoryAdminApiController');
});

// User web routes for category
Route::group(['prefix' => trans_setlocale() . '/user/blog'], function () {
    Route::resource('category', 'Litecms\Blog\Http\Controllers\CategoryUserController');
});

// User API routes for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/blog'], function () {
    Route::resource('category', 'Litecms\Blog\Http\Controllers\CategoryUserApiController');
});

// Public web routes for category
Route::group(['prefix' => trans_setlocale() . '/category'], function () {
    Route::get('blog', 'Litecms\Blog\Http\Controllers\CategoryController@index');
    Route::get('blog/{slug?}', 'Litecms\Blog\Http\Controllers\CategoryController@show');
});

// Public API routes for category
Route::group(['prefix' => trans_setlocale() . 'api/v1/blogs'], function () {
    Route::get('/', 'Litecms\Blog\Http\Controllers\CategoryApiController@index');
    Route::get('/{slug?}', 'Litecms\Blog\Http\Controllers\CategoryApiController@show');
});
