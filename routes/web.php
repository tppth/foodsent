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

Route::get('/', 'FrontendController@main')->name('main');

Route::get('/register', 'FrontendController@register')->name('register');

Route::get('/beapartner', 'FrontendController@partner_register')->name('beapartner');

Route::get('/aboutus', 'FrontendController@aboutus')->name('aboutus');

Route::get('/contactus', 'FrontendController@contactus')->name('contactus');

Route::get('/restaurantadd', 'FrontendController@restaurantadd')->name('restaurantadd');

Route::get('/foodadd', 'FrontendController@foodadd')->name('foodadd');

Route::get('/partnerprofile', 'FrontendController@partnerprofile')->name('partnerprofile');

Route::get('/restaurantlist', 'FrontendController@restaurantlist')->name('restaurantlist');

Route::get('/restaurantedit', 'FrontendController@restaurantedit')->name('restaurantedit');

Route::get('/customerprofile', 'FrontendController@customerprofile')->name('customerprofile');

Route::get('/shoplist', 'FrontendController@shoplist')->name('shoplist');

Route::get('/shopfood', 'FrontendController@shopfood')->name('shopfood');

Route::get('/cart', 'FrontendController@cart')->name('cart');

Route::get('/checkout', 'FrontendController@checkout')->name('checkout');

Route::get('/dashboard', 'BackendController@dashboard')->name('dashboard');

Route::get('/foodconfirmpost', 'BackendController@foodconfirmpost')->name('foodconfirmpost');

Route::get('/shopconfirmpost', 'BackendController@shopconfirmpost')->name('shopconfirmpost');

Route::resource('customers', 'CustomerController');

Route::resource('restaurants', 'RestaurantController');

Route::resource('restaurantowners', 'RestaurantOwnerController');



