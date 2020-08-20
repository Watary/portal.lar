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

    // Permissions
    Route::prefix('permissions')->group(function (){
        Route::get('/', 'Admin\PermissionsController@index')->name('admin.permissions')->middleware(['check.admin.permissions:admin_permissions_access']);
        Route::get('create', 'Admin\PermissionsController@create')->name('admin.permissions.create')->middleware(['check.admin.permissions:admin_permissions_create']);
        Route::get('{id}/show', 'Admin\PermissionsController@show')->name('admin.permissions.show')->middleware(['check.admin.permissions:admin_permissions_access']);
        Route::get('{id}/edit', 'Admin\PermissionsController@edit')->name('admin.permissions.edit')->middleware(['check.admin.permissions:admin_permissions_edit']);

        Route::post('store', 'Admin\PermissionsController@store')->name('admin.permissions.store')->middleware(['check.admin.permissions:admin_permissions_create']);
        Route::post('{id}/update', 'Admin\PermissionsController@update')->name('admin.permissions.update')->middleware(['check.admin.permissions:admin_permissions_edit']);

        Route::delete('{id}/delete', 'Admin\PermissionsController@delete')->name('admin.permissions.delete')->middleware(['check.admin.permissions:admin_permissions_delete']);
    });
});

