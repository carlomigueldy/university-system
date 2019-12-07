<?php

use Illuminate\Http\Request;

Route::get('getSubjectGradePerYear/{year}/{subject_id}/{grade}', 'ETLController@getSubjectGradePerYear');
Route::get('getGenderPerYear/{year}/{gender}', 'ETLController@getGenderPerYear');
Route::get('getStudentPerYear/{year}', 'ETLController@getStudentPerYear');
Route::get('getCurriculumPerYear/{year}/{curriculum_id}/', 'ETLController@getCurriculumPerYear');
Route::get('getCurriculumStandingPerYear/{year}/{curriculum_id}/{standing}', 'ETLController@getCurriculumStandingPerYear');
Route::get('getSubjectSemesterYear/{year}/{semester}/{subject_id}/', 'ETLController@getSubjectSemesterYear');
Route::get('getCollegeGenderYear/{year}/{college_id}/{gender}/', 'ETLController@getCollegeGenderYear');

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