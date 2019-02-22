<?php

//front end - Home page load
//**************************************
Route::get('/','HomeController@Home_Page');

//post details
Route::get('/post/{title}','PostController@post_details');

//show post By Category
Route::get('/category/{category}','CategoryController@post_by_category');


//**************************************
//front end - End



//admin start
//**************************************
Route::get('/admin/dashboard','DashboardController@dashboard_func');



/* manage post
********************************************************
*/
//create-post-page
Route::get('/admin/create-post','DashboardController@create_post');

//store post
Route::post('/storePost','PostController@store_post');

//create-post-page
Route::get('/admin/manage-post','PostController@post_manage');

//post delete
Route::get('/post/delete/{id}','PostController@post_delete');

//post edit
Route::get('/post/edit/{id}','PostController@post_edit');

//post update
Route::post('/updatePost','PostController@post_update');




//image upload test
Route::get('/image','PostController@image_upload');





/* manage category
********************************************************
*/

//category page
Route::get('/admin/category','CategoryController@category_func');

//store category
Route::post('/storeCategory','CategoryController@storeCategory');

//category delete
Route::get('/category/delete/{id}','CategoryController@category_delete');


Route::get('/test','DashboardController@test');





//**************************************
//admin - End