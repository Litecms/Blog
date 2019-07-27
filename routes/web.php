<?php

// Resource routes  for category
Route::group(['prefix' => '{guard}/blog'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
Route::get('category/popular/{period?}', 'CategoryPublicController@popular');
Route::get('categories/', 'CategoryPublicController@index');
Route::get('category/{slug?}', 'CategoryPublicController@show');


// Resource routes  for blog
Route::group(['prefix' => '{guard}/blog'], function () {
    Route::get('publish/{id?}/{data}', 'BlogResourceController@publish');
    Route::resource('blog', 'BlogResourceController');
});

// Public  routes for blog
Route::get('blog/popular/{period?}', 'BlogPublicController@popular');
Route::get('blogs/', 'BlogPublicController@index');
Route::get('blog/{slug?}', 'BlogPublicController@show');
Route::get('blogs/category/{key?}', 'BlogPublicController@categorydisplay');
Route::get('blogs/user/{user_id?}', 'BlogPublicController@displaybyuser');
Route::get('blogs/tag/{tag?}', 'BlogPublicController@tagdisplay');

// Resource routes  for comment
Route::group(['prefix' => '{guard}/blog'], function () {
    Route::resource('comment', 'CommentResourceController');
});

// Public  routes for comment
Route::get('comment/popular/{period?}', 'CommentPublicController@popular');
Route::get('comments/', 'CommentPublicController@index');
Route::get('comment/{slug?}', 'CommentPublicController@show');
Route::post('comment/post/{slug}', 'CommentPublicController@postcomment');


// Resource routes  for tag
Route::group(['prefix' => '{guard}/blog'], function () {
    Route::resource('tag', 'TagResourceController');
});

// Public  routes for tag
Route::get('tag/popular/{period?}', 'TagPublicController@popular');
Route::get('tags/', 'TagPublicController@index');
Route::get('tag/{slug?}', 'TagPublicController@show');
