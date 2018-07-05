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

Route::get('/', 'FrontController@welcome')->name('welcome');
Route::get('/services', 'FrontController@services')->name('services');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/blog{article}', 'FrontController@showBlog')->name('showBlog');
Route::post('/comment', 'FrontController@comment')->name('comment');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::post('/contactMail', 'FrontController@contactMail')->name('contactMail');
Route::get('/login', 'FrontController@login')->name('login');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/carousel', 'ImgCarouselController');

Route::resource('/admin/categories', 'CategoryController');

Route::resource('/admin/services', 'ServiceController');

Route::resource('/admin/clients', 'ClientController');

Route::resource('/admin/projets', 'ProjetController');

Route::resource('/admin/tags', 'TagController');

Route::resource('/admin/testimonials', 'TestimonialController');

Route::resource('/admin/users', 'UserController');

Route::resource('/admin/articles', 'ArticleController');

Route::resource('/newsletter', 'NewsletterController');