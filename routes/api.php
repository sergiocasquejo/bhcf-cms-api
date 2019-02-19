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
        
        Route::resource('members/category', 'MemberCategoryController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::post('members/{id}/avatar', 'MemberController@uploadAvatar');
        Route::resource('members', 'MemberController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('users', 'UserController')->only(['store', 'show', 'update', 'destroy']);
        Route::resource('roles', 'RoleController')->only(['store', 'show', 'update', 'destroy']);
        Route::resource('auxiliary-groups', 'AuxiliaryGroupController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('ministries', 'MinistryController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('statuses', 'StatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('leadership-level', 'LeadershipLevelController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::resource('sc-statuses', 'SundayCelebrationStatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
        Route::prefix('school')->group(function () {
            Route::put('classes/{class_id}/update-member-attendance', 'SchoolStatusController@updateMemberAttendance');
            Route::post('enrolled-member', 'SchoolStatusController@enrollMember');
            Route::get('search-unenrolled-member', 'SchoolStatusController@searchUnEnrolledMember');
            Route::resource('statuses', 'SchoolStatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('types', 'SchoolTypeController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('classes', 'SchoolClassController')->only(['index', 'store', 'show', 'update', 'destroy']);
        });
        
        
    });
    
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
});

