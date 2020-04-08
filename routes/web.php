<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::match(['get', 'post'], '/user/profile', 'UserController@userProfile')->name('user_profile');

    Route::match(['get', 'post'], '/user/profile/setting/', 'UserController@userProfileSetting')->name('user_profile_setting');

    Route::match(['get', 'post'], '/user/image/upload/', 'UserController@userImageUpload')->name('user_image_upload');

    Route::group(['prefix' => 'work-platform'], function() {

        Route::match(['get', 'post'], '/add', 'UserController@workPlatformAdd')->name('work_platform_add');

        Route::match(['get', 'post'], '/update/{id}', 'UserController@workPlatformUpdate')->name('work_platform_update');

        Route::match(['get', 'post'], '/delete/{id}', 'UserController@workPlatformDelete')->name('work_platform_delete');

    });

    Route::group(['prefix' => 'education'], function() {
        
        Route::match(['get', 'post'], '/add', 'UserController@educationAdd')->name('education_add');

        Route::match(['get', 'post'], '/update/{id}', 'UserController@educationUpdate')->name('education_edit');

        Route::match(['get', 'post'], '/delete/{id}', 'UserController@educationDelete')->name('education_delete');

    });

    Route::group(['prefix' => 'work'], function() {
        
        Route::match(['get', 'post'], '/add', 'UserController@workAdd')->name('work_add');

        Route::match(['get', 'post'], '/edit/{id}', 'UserController@workEdit')->name('work_edit');

        Route::match(['get', 'post'], '/delete/{id}', 'UserController@workDelete')->name('work_delete');

    });

    Route::group(['prefix' => 'categories'], function() {
        
    	Route::match(['get', 'post'], '/', 'CategoryController@index')->name('categories');

    	Route::match(['get', 'post'], '/add', 'CategoryController@store')->name('category_add');

    	Route::match(['get', 'post'], '/delete/{id}', 'CategoryController@destroy')->name('category_delete');

    	Route::match(['get', 'post'], '/menu/status/{id}', 'CategoryController@menuStatusChange')->name('category_menu_status_change');

    	Route::match(['get', 'post'], '/status/{id}', 'CategoryController@categoryStatusChange')->name('category_status_change');

    	Route::match(['get', 'post'], '/update/{id}', 'CategoryController@update')->name('category_udpate');

        Route::match(['get', 'post'], '/new/data', 'CategoryController@newCategoryData')->name('get_new_category_data');

    });

});