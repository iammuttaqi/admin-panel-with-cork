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

    Route::match(['get', 'post'], '/user/profile', 'HomeController@userProfile')->name('user_profile');

    Route::match(['get', 'post'], '/user/profile/setting/', 'HomeController@userProfileSetting')->name('user_profile_setting');

    Route::match(['get', 'post'], '/user/image/upload/', 'HomeController@userImageUpload')->name('user_image_upload');

    Route::group(['prefix' => 'work-platform'], function() {

        Route::match(['get', 'post'], '/add', 'HomeController@workPlatformAdd')->name('work_platform_add');

        Route::match(['get', 'post'], '/update/{id}', 'HomeController@workPlatformUpdate')->name('work_platform_update');

        Route::match(['get', 'post'], '/delete/{id}', 'HomeController@workPlatformDelete')->name('work_platform_delete');

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