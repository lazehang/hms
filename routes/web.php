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
    Route::get('account',[ 'as' => 'account', 'uses' => 'SiteController@account', 'middleware' => 'roles', 'roles' => 'User'])->middleware('auth');
    Route::get('news',[ 'as' => 'news', 'uses' => 'SiteController@news'] );
    Route::get('details',[ 'as' => 'details', 'uses' => 'SiteController@details'] );
    Route::get('booking/{id}',['as' => 'booking', 'uses' => 'VaccancyController@booking']);
    Route::post('bookRoom/{id}',['as' => 'bookRoom', 'uses' => 'VaccancyController@bookRoom']);
    Route::get('booked/{id}', ['as' => 'booked', 'uses' => 'VaccancyController@booked']);
    Route::get('contact', ['as' => 'contact', 'uses' => 'SiteController@contact']);
    Route::get('editStd', ['as' => 'editStd', 'uses' => 'SiteController@edit']);
    Route::post('updateStd/{id}',['as' => 'updateStd', 'uses' => 'SiteController@update']);

});
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'roles'], 'roles' => ['Admin','Super']], function(){
	Route::get('/', ['as' => 'admin', 'uses' => 'AdminController@index']);

	Route::get('vaccancies', ['as' => 'vaccancies', 'uses' => 'VaccancyController@view']);
    Route::get('addVaccancy', ['as' => 'addVaccancy', 'uses' => 'VaccancyController@add']);
    Route::post('postVaccancy', ['as' => 'postVaccancy', 'uses' => 'VaccancyController@post']);
    Route::get('editVaccancy/{id}', ['as' => 'editVaccancy', 'uses' => 'VaccancyController@edit']);
    Route::post('updateVaccancy/{id}', ['as' => 'updateVaccancy', 'uses' => 'VaccancyController@update']);
    Route::get('deleteVaccancy/{id}',['as' => 'deleteVaccancy', 'uses' => 'VaccancyController@delete']);

    Route::get('register_std',['as' => 'register_std', 'uses' => 'AdminController@register_std']);
    Route::get('students',['as' => 'students', 'uses' => 'AdminController@students']);
    Route::post('post_student', ['as' => 'post_student', 'uses' => 'AdminController@post_student'] );
    Route::get('edit_std/{id}',['as' => 'edit_std', 'uses' => 'AdminController@edit_std']);
    Route::post('update_std/{id}', ['as' => 'update_std', 'uses' => 'AdminController@update_std']);
    Route::get('delete_std/{id}', ['as' => 'delete_std', 'uses' => 'AdminController@delete_std']);

    Route::post('assignRole', ['as' => 'assignRole', 'uses' => 'AdminController@postAdminAssignRoles']);

    Route::get('bookings',['as' => 'bookings', 'uses' => 'VaccancyController@bookings']);
    Route::get('deleteBooking/{id}/{vaccancy_id}', ['as' => 'deleteBooking', 'uses' => 'VaccancyController@deleteBooking']);

    Route::get('room', ['as' => 'room', 'uses'=> 'AdminController@room']);
    Route::post('assignRoom', ['as' => 'assignRoom', 'uses' => 'AdminController@postAssignRoom']);
    Route::get('room_categories', ['as' => 'room_categories', 'uses' => 'AdminController@view_room']);
    Route::get('register_room', ['as' => 'register_room', 'uses' => 'AdminController@register_room']);
    Route::post('create_room',['as' => 'create_room', 'uses' => 'AdminController@create_room']);
    Route::get('edit_room/{id}',['as' => 'edit_room', 'uses' => 'AdminController@edit_room']);
    Route::post('update_room/{id}', ['as' => 'update_room', 'uses' => 'AdminController@update_room']);
    Route::get('accounts',['as' => 'accounts', 'uses' => 'AdminController@accounts']);
    Route::get('delete-room/{id}', ['as' => 'delete-room', 'uses' => 'AdminController@deleteRoom']);
    Route::get('pay/{id}/{date}',['as' => 'pay', 'uses' => 'AdminController@pay']);
    Route::get('history', 'AdminController@history' );
    Route::get('delete_account/{id}', 'AdminController@delete_account');
    Route::post('password', ['as' => 'password', 'uses' => 'AdminController@password']);


});

Route::group(['prefix' => 'super', 'middleware' => ['auth', 'roles'], 'roles' => 'Super'], function(){
    Route::get('super', ['as' => 'super', 'uses' => 'AdminController@super']);
    Route::get('admins', ['as' => 'admins', 'uses' => 'AdminController@admin']);
    Route::post('create', ['as' => 'create', 'uses' => 'AdminController@registerAdmin']);
});


Auth::routes();

//Route::get('/home', 'HomeController@index');
