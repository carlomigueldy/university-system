<?php

use Illuminate\Http\Request;

Route::get('getSubjectGradePerYear/{subject_id}/{year}/{grade}', 'ETLController@getSubjectGradePerYear');
Route::get('getGenderPerYear/{gender}/{year}', 'ETLController@getGenderPerYear');
Route::get('getStudentPerYear/{year}', 'ETLController@getStudentPerYear');
Route::get('getCurriculumPerYear/{curriculum_id}/{year}', 'ETLController@getCurriculumPerYear');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group(['prefix' => 'auth'], function () {
//     Route::post('login', 'AuthController@login');
//     Route::post('signup', 'AuthController@signup');
  
//     Route::group(['middleware' => 'auth:api'], function() {
//         Route::get('logout', 'AuthController@logout');
//         Route::get('user', 'AuthController@user');
//     });
// });