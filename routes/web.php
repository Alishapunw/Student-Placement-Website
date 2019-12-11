<?php

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
    return view('homepage');
});

Route::get('login','HomeController@showlogin')->name('login');
Route::post('login','HomeController@checkLogin');

Route::get('logout','HomeController@logout')->name('logout');


Route::get('register','HomeController@showRegister')->name('register');
Route::post('register','HomeController@checkRegister');

Route::get('forgetPassword','HomeController@showForgotPassword')->name('forgetPassword');
Route::post('forgetPassword','HomeController@sendForgotPassword');

Route::get('recruiters','HomeController@showRecruiters')->name('recruiters');
Route::get('rules','HomeController@showRules')->name('rules');

Route::get('statistics','HomeController@showStatistics')->name('statistics');

Route::get('student_details','HomeController@showStudentDetails')->name('student_details');
Route::post('student_details','HomeController@insertStudentDetails');


//Route::post('select_student_details','HomeController@selectStudentDetails')->name('select_student_details');
Route::post('
	','HomeController@selectAcademics')->name('select_academics');

Route::get('academic_details','HomeController@showAcademicDetails')->name('academic_details');
Route::post('academic_details','HomeController@insertAcademicDetails');

Route::get('final_details','HomeController@showFinalDetails')->name('final_details');

Route::get('achievement_details','HomeController@showAchievementDetails')->name('achievement_details');
Route::post('achievement_details','HomeController@insertAchievementDetails');

Route::get('apply/{id}','HomeController@company_apply')->name('apply');

Route::get('placement_apply','HomeController@showPlacementApply')->name('placement_apply');
Route::get('homepage','HomeController@showHomePage')->name('homepage');

Route::get('contact_us','HomeController@showContactPage')->name('contact_us');

Route::get('placement_page','HomeController@showPlacementPage')->name('placement_page');

Route::get('team_page','HomeController@showTeamPage')->name('team_page');

Route::post('sendmail','HomeController@sendmail')->name('sendmail');

Route::post('update_stats','HomeController@updateStats')->name('update_stats');

Route::post('otpVerify','HomeController@verifyemail')->name('otpVerify');

Route::get('final_page','HomeController@showFinalPage')->name('final_page');

Route::get('admin_login','HomeController@showAdminLogin')->name('admin_login');
Route::post('admin_login','HomeController@checkAdminLogin')->name('admin_login');

Route::get('admin_homepage','HomeController@showAdminHomepage')->name('admin_homepage');
Route::post('admin_homepage','HomeController@insertAdminHomepage')->name('admin_homepage');

Route::get('admin_statistics', 'HomeController@showAdminStatistics')->name('admin_statistics');

Route::post('event_register','HomeController@insertEvent')->name('event_register');

Route::get('recruiter_login','HomeController@showrecRuiterHomepage')->name('recruiter_login');
Route::post('recruiter_login','HomeController@checkRecruiterLogin')->name('recruiter_login');


Route::get('upload_resume','HomeController@showUploadResume')->name('upload_resume');
Route::post('upload_resume','HomeController@insertUploadResume')->name('upload_resume');

Route::get('upload_photo','HomeController@showUploadPhoto')->name('upload_photo');
Route::post('upload_photo','HomeController@insertUploadPhoto')->name('upload_phtoto');

Route::get('applied_companies','HomeController@showAppliedCompanies')->name('applied_companies');

Route::get('delete/{id}', 'HomeController@delete')->name('delete');

Route::get('events', 'HomeController@showEvents')->name('events');

Route::get('internship_details','HomeController@showInternshipDetails')->name('internship_details');
Route::post('internship_details','HomeController@insertInternshipDetails');
