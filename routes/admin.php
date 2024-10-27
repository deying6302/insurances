<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('make-role-admin', function () {
        Admin::create([
            'full_name' => 'Sin Dang',
            'user_name' => 'Sin2x',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '0128803256',
            'address' => 'HN',
            'gender' => 'male'
        ]);

        return redirect()->back();
    });

    Route::group(['middleware' => ['CheckAdminSession']], function () {
        Route::get('/', 'Auth\LoginController@getLogin')->name('getLogin');
        Route::post('/', 'Auth\LoginController@postLogin')->name('postLogin');
    });

    Route::group(['middleware' => ['CheckAdminLogin']], function () {
        Route::get('logout', 'AdminController@logout')->name('logout');

        // Route::get('/clear-cache', 'OptimizationController@clearCache');

        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    });
});
