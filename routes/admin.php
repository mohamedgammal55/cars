<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin'], function () {
    Route::get('login',function (){
        if (Auth::guard('admin')->check()){
            return redirect('admin/home');
        }
        return view('Admin/auth/login');
    });
    Route::post('do-log','AuthController@login')->name('do-log');


    //******* after login *******
    Route::group(['middleware' => 'admin:admin'], function () {
        Route::get('log-out','AuthController@logout')->name('log-out');
        Route::get('/',function (){
            return redirect('admin/home');
        })->name('/');
        Route::get('home','HomeController@index')->name('home');

        Route::group(['prefix' => 'admins'], function () {
            ################################### Admins ##########################################
            Route::get('/', 'AdminController@index')->name('admin.index');
            Route::post('delete', 'AdminController@delete')->name('delete_admin');
            Route::post('add', 'AdminController@add')->name('add_admin');
            Route::post('edit', 'AdminController@edit')->name('edit_admin');
        });

        ################################### Profile ##########################################
        Route::get('my_profile','AdminController@my_profile')->name('my_profile');
        Route::post('store-profile','AdminController@save_profile')->name('store-profile');

        ################################### Contact ##########################################
        Route::group(['prefix' => 'contacts'], function () {
            Route::get('/', 'ContactUsController@index')->name('contact.index');
            Route::post('delete', 'ContactUsController@delete')->name('delete_contact');
        });

        #### Sliders ####
        Route::resource('sliders','SlidersController');
        Route::POST('slider.delete','SlidersController@delete')->name('slider.delete');

        #### About ####
        Route::resource('about','AboutController');
        Route::POST('about.delete','AboutController@delete')->name('about.delete');
        Route::POST('about.text','AboutController@text')->name('about.text');

        #### Brands ####
        Route::resource('brands','BrandsController');
        Route::POST('brands.delete','BrandsController@delete')->name('brands.delete');

        #### Posts ####
        Route::resource('posts','PostController');
        Route::POST('posts.delete','PostController@delete')->name('post.delete');

        #### Team ####
        Route::resource('team','TeamController');
        Route::POST('team.delete','TeamController@delete')->name('team.delete');

        #### City ####
        Route::resource('city','CityController');
        Route::POST('city.delete','CityController@delete')->name('city.delete');

        #### Category & Models ####
        Route::resource('categories','CategoryController');
        Route::POST('category.delete','CategoryController@delete')->name('category.delete');
        Route::get('models/{id}','CategoryController@showModels')->name('models');
        Route::get('createModel/{id}','CategoryController@createModel')->name('createModel');
        Route::POST('model.store','CategoryController@storeModel')->name('model.store');
        Route::get('editModel/{id}','CategoryController@editModel')->name('editModel');
        Route::PUT('model.update','CategoryController@updateModel')->name('model.update');
        Route::POST('model.delete','CategoryController@deleteModel')->name('model.delete');



        ///////////// mohamed gamal ////////////
        Route::resource('cars','CarsController');
        Route::POST('cars-delete','CarsController@destroy')->name('cars.delete');
        Route::POST('cars-store-images/{id}','CarsController@carsStoreImages')->name('cars.store.images');
        Route::POST('car-images-delete/{id}','CarsController@carsDeleteImage')->name('car.images.delete');


    });//end Middleware Admin


});//end Prefix
