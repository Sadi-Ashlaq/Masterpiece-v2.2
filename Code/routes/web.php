<?php
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
// End User profile Routes----------------------------------------------------------------------------------------------
Route::get('/user_profile', 'UserProfileController@index') ->name('user_profile');
Route::post('/user_profile', 'UserProfileController@store')->name('store_user');
Route::post('user/edit/profile', 'UserProfileController@update')->name('user_edit_profile');
Route::get('user/edit/profile', 'UserProfileController@update')->name('user_edit_profile');
Route::get('change-password', 'UserProfileController@update');
Route::post('change-password', 'UserProfileController@update')->name('change.password');
// End User profile Routes----------------------------------------------------------------------------------------------
// Home Routes----------------------------------------------------------------------------------------------------------
Route::get('/', 'HomeController@index')->name('home');
Route::post('/contact', 'ContactController@store')->name('contact');

// User Login Routes----------------------------------------------------------------------------------------------------
Route::get('/user/login', function () {
    return view('public.login');
})->name('public.login');
// End User Login Routes------------------------------------------------------------------------------------------------
// User Order Routes----------------------------------------------------------------------------------------------------
//Route::get('/user/order', function () {
//    return view('public.order');
//})->name('order');
Route::get('/user/order', 'OrderController@index') ->name('order');
Route::post('/user/orderfomr', 'OrderController@store') ->name('orderfomr');

// End User Order Routes------------------------------------------------------------------------------------------------
// Manage Edit User Routes----------------------------------------------------------------------------------------------
Route::post('/edit/{id}', 'UserController@update')->name('edit_user');
// End Manage Edit User Routes------------------------------------------------------------------------------------------
// Admin Login Routes
     Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
     Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
     Route::post('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
     Route::prefix('admin')->middleware('auth:admin')->group(function (){
// Middleware-----------------------------------------------------------------------------------------------------------
    Route::middleware('auth:admin')->group(function (){

//        Route::get('/', function () {
//            return view('dashboard.index');
//        })->name('admin.dashboard');
// Manage User Routes---------------------------------------------------------------------------------------------------
        Route::get('/manage_user', 'AdminController@showManageUsers')->name('manage_user');
        Route::get('user/dele/{id}', 'UserController@destroy')->name('delete_user');
        Route::get('/edit/{id}', 'UserController@update')->name('edit_user');
// Manage Brand Routes--------------------------------------------------------------------------------------------------
        Route::get('/manage_brand', 'Brandcontroller@index') ->name('manage_brand');
        Route::post('/manage_brand', 'Brandcontroller@store')->name('store_brand');
        Route::get('/brand/dele/{id}', 'Brandcontroller@destroy')->name('delete_brand');
        Route::post('/brand/edit/{id}', 'Brandcontroller@update')->name('edit_brand');
        Route::get('/brand/edit/{id}', 'Brandcontroller@update')->name('edit_brand');
// Manage Phone Routes--------------------------------------------------------------------------------------------------
        Route::get('/manage_phone', 'phoneController@index') ->name('manage_phone');
        Route::post('/manage_phone', 'phoneController@store')->name('store_phone');
        Route::get('/phone/dele/{id}', 'phoneController@destroy')->name('delete_phone');
        Route::post('/phone/edit/{id}', 'phoneController@update')->name('edit_phone');
        Route::get('/phone/edit/{id}', 'phoneController@update')->name('edit_phone');
// Manage Admin Routes--------------------------------------------------------------------------------------------------
        Route::get('/manage_admin', 'AdminController@index') ->name('manage_admin');
        Route::post('/manage_admin', 'AdminController@store')->name('store_admin');
        Route::get('/dele/{id}', 'AdminController@destroy')->name('delete_admin');
        Route::post('/edit/{id}', 'AdminController@update')->name('edit_admin');
        Route::get('/edit/{id}', 'AdminController@update')->name('edit_admin');
// Admin profile Routes-------------------------------------------------------------------------------------------------
        Route::get('/admin_profile/{id}', 'ProfileController@index') ->name('admin_profile');
        Route::post('/admin_profile', 'AdminController@store')->name('store_admin');
        Route::post('/edit/profile/{id}', 'ProfileController@update')->name('edit_profile');
        Route::get('/edit/profile/{id}', 'ProfileController@update')->name('edit_profile');
        Route::get('change-password', 'ProfileController@update');
        Route::post('change-password', 'ProfileController@update')->name('change.password');
        Route::get('/contact', 'ContactController@index')->name('manage_contact');
        Route::get('/', 'OrderController@show')->name('admin.dashboard');
        Route::get('/order/dele/{id}', 'OrderController@destroy')->name('delete_order');
//End Admin profile Routes----------------------------------------------------------------------------------------------
    });
});
