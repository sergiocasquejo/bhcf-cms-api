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
    Route::group(['middleware' => 'return-json'], function() {
        Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
        Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
        Route::group(['middleware' => 'auth:api'], function() {
            Route::resource('roles', 'RoleController')->only(['store', 'show', 'update', 'destroy']);
            Route::resource('auxiliary-groups', 'AuxiliaryGroupController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('ministries', 'MinistryController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('statuses', 'StatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('leadership-levels', 'LeadershipLevelController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('members/category', 'MemberCategoryController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::get('members/dropdown-options', 'MemberController@dropdownOptions');
            Route::get('members/all', 'MemberController@getAll');
            Route::resource('members', 'MemberController')->only(['index', 'store', 'show', 'update', 'destroy']);
            
            Route::get('members/{id}/attendance/cellgroup/{year}', 'CellGroupController@getLeaderAttendancesByYear');
            Route::get('members/{id}/attendance/cellgroup/{year}/{week}', 'CellGroupController@create');
            Route::post('members/{id}/attendance/cellgroup/{year}/{week}', 'CellGroupController@store');
            Route::put('members/{id}/approve', 'MemberController@approve');
            Route::get('members/{id}/network', 'MemberController@network');
            Route::post('members/{id}/avatar', 'MemberController@uploadAvatar');
            Route::post('members/{id}/avatar-mobile', 'MemberController@uploadAvatarMobile');
            
            Route::resource('users', 'UserController')->only(['store', 'show', 'update', 'destroy']);
            
            Route::resource('classes', 'SchoolClassController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::get('classes/{type_id}/get-by-type', 'SchoolClassController@getByType');
            Route::get('classes/{class_id}/all-members-with-enrolled-students', 'SchoolClassController@getAllMembersWithEnrolledStudents');
            Route::put('classes/{class_id}/update-member-attendance', 'SchoolClassController@updateMemberAttendance');
            Route::post('classes/{class_id}/{member_id}/enroll', 'SchoolClassController@enrollMember');
            Route::get('search-unenrolled-member', 'SchoolClassController@searchUnEnrolledMember');
            Route::resource('classes/categories', 'ClassCategoryController')->only(['index', 'store', 'show', 'update', 'destroy']);
            
        });
    });
});

