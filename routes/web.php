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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth', 'check.admin.access'])->group(function(){
    Route::get('/', 'Admin\GeneralController@dashboard')->name('admin');

    // Users
    Route::get('/users', 'Admin\UsersController@index')->name('admin.users')->middleware(['check.admin.permissions:admin_users_access']);
    Route::get('/roles', 'Admin\RolesController@index')->name('admin.roles')->middleware(['check.admin.permissions:admin_rules_access']);
    Route::get('/permissions', 'Admin\PermissionsController@index')->name('admin.permissions')->middleware(['check.admin.permissions:admin_permissions_access']);
    Route::get('/permissions/create', 'Admin\PermissionsController@create')->name('admin.permissions.create')->middleware(['check.admin.permissions:admin_permissions_create']);
});

