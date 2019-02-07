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
Route::prefix('v1')->group(function() {
    Route::group(['middleware' => 'auth:api'], function() {
        Route::resource('member/category', 'MemberCategoryController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('member', 'MemberController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('user', 'UserController')->only(['store', 'show', 'update', 'destroy']);
        Route::resource('school-status', 'SchoolStatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('auxiliary-group', 'AuxiliaryGroupController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('ministry', 'MinistryController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('status', 'StatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('leadership-level', 'LeadershipLevelController')->only(['index', 'store', 'show', 'update', 'destroy']);
        
    });

    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
});

