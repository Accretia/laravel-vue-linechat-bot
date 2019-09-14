<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout', 'Auth\LoginController@logout');

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');

    Route::get('products', 'API\ProductController@getProductWithOffset');
    Route::get('product_detail/{id}', 'API\ProductController@getProductDetail');
    Route::get('search_product', 'API\ProductController@searchProduct');
    Route::get('brands', 'API\ProductController@getBrands');
    Route::get('categories', 'API\ProductController@getCategories');
    Route::group(['prefix' => 'colors'] , function() {
        Route::get('list', 'API\ColorController@getColors');
        Route::post('store', 'API\ColorController@store');
        Route::delete('delete/{id}', 'API\ColorController@delete');
    });

    Route::group(['prefix' => 'scg'] , function() {
        Route::post('findString', 'API\SCGController@findString');
        Route::get('restaurant', 'API\SCGController@findRestaurants');
        Route::get('gethook', 'API\SCGController@getHook');
    });
    
});

Route::group(['middleware' => 'guest:api'], function () {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('register', 'Auth\RegisterController@register');

    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::post('email/resend', 'Auth\VerificationController@resend');

    Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
    Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
});
