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

Route::get('/', 'IndexController@getHome')->name('home.index');

Route::get('contact', 'IndexController@getContact')->name('contact');
Route::post('contact', 'IndexController@postContact')->name('pages.contact.post');

Route::get('news', 'IndexController@news')->name('news');
Route::get('news/{slug}', 'IndexController@getCategory')->name('category');
Route::get('new/{slug}', 'IndexController@getblogSingle')->name('single.blog');

Route::get('number', 'IndexController@number')->name('number');
Route::get('result', 'IndexController@result')->name('result');
Route::get('result-form', 'IndexController@resultform')->name('result.form');

Route::get('/cache', function() {
    // \Artisan::call('route:cache');
    // echo 'Routes cache cleared';
    \Artisan::call('cache:clear');
    echo 'Cache cleared';
    \Artisan::call('view:clear');
    echo 'View cache cleared';
    \Artisan::call('config:clear');
    echo 'Config cache cleared';
});
Route::get('/add-cache', function() {
    // \Artisan::call('route:cache');
    // echo 'Routes cache cleared';
    // \Artisan::call('cache:cache');
    // echo 'Cache cacheed';
    \Artisan::call('view:cache');
    echo 'View cache cacheed';
    \Artisan::call('config:cache');
    echo 'Config cache cacheed';
});

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');

Route::group(['namespace' => 'Member'], function (){

    Route::group(['middleware' => 'guest_member'], function (){
        Route::get('login', 'AuthController@login')->name('home.login');
        Route::post('login', 'AuthController@postLogin');
        Route::get('register', 'AuthController@register')->name('home.register');
        Route::post('register', 'AuthController@postRegister');
    });
    Route::get('logout', 'AuthController@logout')->name('home.logout');

    Route::post('comment/{productId}', 'CommentController@postComment')->name('comment');
    
    Route::group(['prefix' => 'account', 'middleware' => 'auth_member', 'as' => 'home.account.'], function (){
        
    });

});



