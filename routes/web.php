<?php

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

Route::auth();

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/email_success', 'HomeController@email_success')->name('email_success');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');

Route::get('/blog_single/{id}', 'HomeController@blog_single')->name('blog_single');
Route::get('/course_single/{id}', 'HomeController@course_single')->name('course_single');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('course_list/{id}', 'HomeController@course_list')->name('course_list');
Route::post('/contact_us', 'HomeController@contact_us')->name('contact_us');

Route::group(['middleware' => 'auth'], function () {

  });

Route::group(['middleware' => 'admin'], function() {

  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/setting', 'SettingController');
  Route::post('admin/setting/update', 'SettingController@update');
  Route::resource('admin/blog', 'BlogController');
  Route::resource('admin/course', 'CourseController');
  Route::resource('admin/user', 'StudentController');
  Route::post('api/api_user_status', 'StudentController@api_user_status');
  Route::resource('admin/us_contact', 'ContactContraller');

  Route::resource('admin/slide', 'SlideController');
  Route::post('api/api_slide_status', 'SlideController@api_slide_status');
    });
