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
        Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
        Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
        Route::group(['middleware' => 'auth:api'], function() {
            Route::resource('roles', 'RoleController')->only(['store', 'show', 'update', 'destroy']);
            Route::resource('auxiliary-groups', 'AuxiliaryGroupController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('ministries', 'MinistryController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('statuses', 'StatusController')->only(['index', 'store', 'show', 'update', 'destroy']);
            Route::resource('leadership-levels', 'LeadershipLevelController')->only(['index', 'store', 'show', 'update', 'destroy']);

            Route::prefix('members')->group(function() {
                
                Route::get('{id}/cellreport/{year}/{week}', 'CellGroupController@create');
                Route::post('{id}/cellreport/{year}/{week}', 'CellGroupController@store');
                Route::get('{id}/cellreport/{year}', 'CellGroupController@getByYear');
                Route::resource('category', 'MemberCategoryController')->only(['index', 'store', 'show', 'update', 'destroy']);
                Route::get('dropdown-options', 'MemberController@dropdownOptions');
                Route::get('all', 'MemberController@getAll');
                Route::put('{id}/approve', 'MemberController@approve');
                Route::get('{id}/network', 'MemberController@network');
                Route::post('{id}/avatar', 'MemberController@uploadAvatar');
                Route::post('{id}/avatar-mobile', 'MemberController@uploadAvatarMobile');
                
            });

            Route::resource('members', 'MemberController')->only(['index', 'store', 'show', 'update', 'destroy']);
            
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

