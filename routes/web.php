<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix'], function( ) {


    Route::get('/',[ 'as' => 'home', 'uses' => 'SiteController@index'] );
    Route::get('account',[ 'as' => 'account', 'uses' => 'SiteController@account'])->middleware('auth');
Route::get('news',[ 'as' => 'news', 'uses' => 'SiteController@news'] );
    Route::get('details',[ 'as' => 'details', 'uses' => 'SiteController@details'] );
//    Route::get('loginstd',['as' => 'loginstd', 'uses' => 'LoginController@login']);
//    Route::post('loginprocess',['as' => 'loginprocess', 'uses' => 'LoginController@loginprocess']);
//    Route::get('logoutstd',['as' => 'logoutstd', 'uses' => 'loginController@logout']);

 //    Route::get('course/add','CourseController@create');
 //    Route::get('course', ['as' => 'courseList','uses' => 'CourseController@index'] );
 //    Route::post('course',  ['as' => 'postCreateCourse','uses' => 'CourseController@postCreateCourse' ]);
 //    Route::get('course/{id}/edit', ['as' => 'viewEditCourse','uses' => 'CourseController@viewEditCourse']);
 //    Route::post('course/{id}/update', ['as' => 'postUpdateCourse','uses' => 'CourseController@postUpdateCourse']);
 //    Route::get('course/{id}/delete', ['as' => 'deleteCourse', 'uses' => 'CourseController@deleteCourse']);


 //    Route::get('course/categories',['as' => 'listCategories', 'uses' => 'CourseController@listCategories']);
 //    Route::get('course/addCategories',['as' => 'createCategories', 'uses' => 'CourseController@createCategories']);
	// Route::post('categories',  ['as' => 'postCreateCategories','uses' => 'CourseController@postCreateCategories' ]);
	//  Route::get('course/categories/{id}/edit', ['as' => 'viewEditCategories','uses' => 'CourseController@viewEditCategories']);
 //    Route::post('course/categories/{id}/update', ['as' => 'postUpdateCategories','uses' => 'CourseController@postUpdateCategories']);
 //    Route::get('course/categories/{id}/delete', ['as' => 'deleteCategories', 'uses' => 'CourseController@deleteCategories']);



});
Route::group(['prefix' => 'admin'], function(){
	Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index'])->middleware('auth');
	Route::get('vaccancies', ['as' => 'vaccancies', 'uses' => 'VaccancyController@view'])->middleware('AdminAuth');
    Route::get('addVaccancy', ['as' => 'addVaccancy', 'uses' => 'VaccancyController@add']);
    Route::post('postVaccancy', ['as' => 'postVaccancy', 'uses' => 'VaccancyController@post']);
    Route::get('editVaccancy/{id}', ['as' => 'editVaccancy', 'uses' => 'VaccancyController@edit']);
    Route::post('updateVaccancy/{id}', ['as' => 'updateVaccancy', 'uses' => 'VaccancyController@update']);
    Route::get('deleteVaccancy/{id}',['as' => 'deleteVaccancy', 'uses' => 'VaccancyController@delete']);
    Route::get('register_std',['as' => 'register_std', 'uses' => 'AdminController@register_std']);
    Route::get('students',['as' => 'students', 'uses' => 'AdminController@students']);
    Route::post('post_student', ['as' => 'post_student', 'uses' => 'AdminController@post_student'] );



});

Auth::routes();

//Route::get('/home', 'HomeController@index');
