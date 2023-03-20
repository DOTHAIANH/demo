<?php

Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('backend.home');

    Route::resource('users', 'UserController', ['except' => [
        'show'
    ]]);

    $routes = config('admin.route');

    foreach ($routes as $key => $route) {
        Route::resource($key, ucfirst($key) . 'Controller', ['except' => ['show']]);
        if ($route['multi_del'] == true) {
            Route::post($key . '/postMultiDel', ['as' => $key . '.postMultiDel', 'uses' => ucfirst($key) . 'Controller@deleteMuti']);
        }
        if ($route['get_slug'] == true) {
            Route::get($key . '/get-slug', ['as' => $key . '.get-slug', 'uses' => ucfirst($key) . 'Controller@getAjaxSlug']);
        }
    }
    Route::get('/media', 'HomeController@media')->name('media');
    Route::resource('category', 'CategoryController', ['except' => ['show']]);

    Route::group(['prefix' => 'members'], function () {
        Route::get('/', 'MemberController@index')->name('member.index');
        Route::get('/{id}', 'MemberController@show')->name('member.show');

        Route::post('/{id}', 'MemberController@update')->name('member.update');

        Route::post('/{id}/recharge', 'MemberController@rechargeMember')->name('member.recharge');;

        Route::post('/postMultiDel', 'MemberController@deleteMuti')->name('member.postMultiDel');
    });


    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', ['as' => 'pages.list', 'uses' => 'PagesController@getListPages']);
        Route::get('build', ['as' => 'pages.build', 'uses' => 'PagesController@getBuildPages']);
        Route::post('build', ['as' => 'pages.build.post', 'uses' => 'PagesController@postBuildPages']);
        Route::post('/create', ['as' => 'pages.create', 'uses' => 'PagesController@postCreatePages']);
    });

    Route::group(['prefix' => 'options'], function () {
        Route::get('/general', 'SettingController@getGeneralConfig')->name('backend.options.general');
        Route::post('/general', 'SettingController@postGeneralConfig')->name('backend.options.general.post');

        Route::get('/smtp', 'SettingController@getSmtpConfig')->name('backend.options.smtp-config');
        Route::post('/smtp-config', 'SettingController@postSmtpConfig')->name('backend.options.smtp-config.post');
        Route::post('/send-mail-test', 'SettingController@postSendTestEmail')->name('backend.options.send-mail.post');

    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', ['as' => 'setting.menu', 'uses' => 'MenuController@getListMenu']);
        Route::get('edit/{id}', ['as' => 'backend.config.menu.edit', 'uses' => 'MenuController@getEditMenu']);
        Route::post('add-item/{id}', ['as' => 'setting.menu.addItem', 'uses' => 'MenuController@postAddItem']);
        Route::post('update', ['as' => 'setting.menu.update', 'uses' => 'MenuController@postUpdateMenu']);
        Route::get('delete/{id}', ['as' => 'setting.menu.delete', 'uses' => 'MenuController@getDelete']);
        Route::get('edit-item/{id}', ['as' => 'setting.menu.geteditItem', 'uses' => 'MenuController@getEditItem']);
        Route::post('edit', ['as' => 'setting.menu.editItem', 'uses' => 'MenuController@postEditItem']);
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', ['as' => 'get.list.contact', 'uses' => 'ContactController@getListContact']);
        Route::post('/delete-muti', ['as' => 'contact.postMultiDel', 'uses' => 'ContactController@postDeleteMuti']);
        Route::get('{id}/edit', ['as' => 'contact.edit', 'uses' => 'ContactController@getEdit']);
        Route::post('{id}/edit', ['as' => 'contact.post', 'uses' => 'ContactController@postEdit']);
        Route::delete('{id}/delete', ['as' => 'contact.destroy', 'uses' => 'ContactController@getDelete']);
    });


    Route::get('/get-layout', 'HomeController@getLayOut')->name('get.layout');

    Route::get('posts/search', 'PostController@search')->name('post.search');
    Route::get('daily/pdf', 'DailyController@dailypdf')->name('daily.pdf');

    Route::resource('categories', 'CategoriesPostController', ['except' => [
        'show','create'
    ]]);


});


Auth::routes(
    [
        'register' => false,
        'verify'   => false,
        'reset'    => false,
    ]
);

