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

//Admin Controllers
Route::match(['get','post'],'/admin-login','AdminController@adminLogin');
Route::match(['get','post'],'/admin-register','AdminController@adminRegister');


Route::group(['middleware'=>['AdminLogin']],function()
{
	Route::match(['get','post'],'/admin-dashboard','AdminController@adminDashboard');
	//Drivers
	Route::match(['get','post'],'/view-drivers','AdminController@viewDrivers');
	Route::match(['get','post'],'/auto-complete','AdminController@autoComplete');
	Route::match(['get','post'],'/edit-drivers/{id}','AdminController@editDrivers');
	Route::post('/admin/update-driver-status','AdminController@updateDriverStatus');
	Route::match(['get','post'],'/blocked-drivers','AdminController@blockedDrivers');
	Route::post('/admin/update-block-driver-status','AdminController@updateBlockDriverStatus');
	//Users
	Route::match(['get','post'],'/view-users','AdminController@viewUsers');
	Route::match(['get','post'],'/edit-users/{id}','AdminController@editUsers');
	Route::post('/admin/update-user-status','AdminController@updateUserStatus');
	Route::match(['get','post'],'/blocked-users','AdminController@blockedUsers');
	Route::post('/admin/update-block-user-status','AdminController@updateBlockUserStatus');


	//Product Controller
	Route::match(['get','post'],'/add-product','ProductController@addProduct');
	Route::match(['get','post'],'/view-products','ProductController@viewProducts');
	Route::post('/admin/update-product-status','ProductController@updateStatus');
	Route::get('/delete-product/{id}','ProductController@deleteProduct');
	Route::match(['get','post'],'/edit-product/{id}','ProductController@editProduct');

	//Category Controller
	Route::match(['get','post'],'/add-category','CategoryController@addCategory');
	Route::match(['get','post'],'/view-category','CategoryController@viewCategory');
	Route::post('/admin/update-category-status','CategoryController@updateStatus');
	Route::match(['get','post'],'/edit-category/{id}','CategoryController@editCategory');
	Route::get('/delete-category/{id}','CategoryController@deleteCategory');

	//Order Controller
	Route::match(['get','post'],'/current-orders','CategoryController@currentOrders');
	Route::match(['get','post'],'/past-orders','CategoryController@pastOrders');

	//Coupon Controller
	Route::match(['get','post'],'/add-coupon','CouponsController@addCoupon');
	Route::match(['get','post'],'/view-coupons','CouponsController@viewCoupons');
	Route::match(['get','post'],'/edit-coupon/{id}','CouponsController@editCoupon');
	Route::get('/delete-coupon/{id}','CouponsController@deleteCoupon');
	Route::post('/admin/update-coupon-status','CouponsController@updateStatus');
});
Route::get('/admin-logout','AdminController@adminLogout');


// User Modules Routes
Route::match(['get','post'],'/user-login','UserController@userLogin');
Route::match(['get','post'],'/user-register','UserController@userRegister');

Route::group(['middleware'=>['UserLogin']],function()
{
	Route::match(['get','post'],'/user-dashboard','UserController@userDashboard');
	Route::match(['get','post'],'/product-details/{id}','UserController@productDetails');
	Route::match(['get','post'],'/add-to-cart','UserController@addtoCart');
	Route::match(['get','post'],'/cart','UserController@cart');
	// Route for update Quantity
	Route::get('/cart/update-quantity/{id}/{quantity}','UserController@updateCartQuantity');
	// Route for Delete Cart Product
	Route::match(['get','post'],'/cart/delete-product/{id}','UserController@deleteCartProduct');
	// Route::get('/get-product-price','UserController@getprice');
	
	// Apply Coupon Code
	Route::post('/cart/apply-coupon','UserController@applyCoupon');
	// category route
	Route::get('/categories/{category_id}','UserController@categories');

	//User Address Code
	Route::match(['get','post'],'/add-address','UserController@addAddress');
	Route::match(['get','post'],'/view-address','UserController@viewAddress');

	//Checkout code
	Route::match(['get','post'],'/checkout-page','UserController@checkoutPage');
	Route::match(['get','post'],'/place-order','UserController@placeOrder');

	//Thanks
	Route::get('/thanks','UserController@thanks');

	//stripe
	Route::match(['get','post'],'/stripe','UserController@stripe');



});
Route::get('/user-logout','UserController@userLogout');


// Deriver Module Routes
Route::match(['get','post'],'/driver-login','DriverController@DriverLogin');
Route::match(['get','post'],'/driver-register','DriverController@DriverRegister');

Route::group(['middleware'=>['DriverLogin']],function()
{
	Route::match(['get','post'],'/driver-dashboard','DriverController@driverDashboard');
	Route::match(['get','post'],'/driver-latlng/{id}','DriverController@driverLatLng');
	Route::match(['get','post'],'/driver-map/{id}','DriverController@driverMap');
	Route::match(['get','post'],'/orders','DriverController@orders');
});
Route::get('/driver-logout','DriverController@driverLogout');



