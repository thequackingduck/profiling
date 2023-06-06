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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//modules
Route::resource('schoolyear', 'SchoolyearController');
Route::resource('college', 'CollegeController');
Route::resource('course', 'CourseController');
Route::resource('students', 'StudentController');
Route::get('student/login', function(){
    return view('auth.studentlogin');
})->name('student.login');
Route::get('leavers', 'FormsController@leavers')->name('forms.leavers');
Route::post('leavers/settings', 'FormsController@leavers_settings')->name('forms.leavers_settings');
Route::get('leavers/leavers_form', 'FormsController@leavers_form')->name('forms.leavers_form');
Route::post('leavers/submit_form', 'FormsController@submit_form')->name('forms.submit_form');
Route::get('profile', 'FormsController@profile')->name('forms.profile');
Route::post('leavers_print', 'FormsController@leavers_print')->name('leavers_print');
Route::post('interviewfeedback_print', 'FormsController@interviewfeedback_print')->name('interviewfeedback_print');
Route::post('precounseling_print', 'FormsController@precounseling_print')->name('precounseling_print');
Route::get('interviewfeedback', 'FormsController@interviewfeedback')->name('forms.interviewfeedback');
Route::get('precounseling', 'FormsController@precounseling')->name('forms.precounseling');
Route::get('interviewfeedback_form', 'FormsController@interviewfeedback_form')->name('forms.interviewfeedback_form');
Route::post('interviewfeedback_formsubmit', 'FormsController@interviewfeedback_formsubmit')->name('forms.interviewfeedback_formsubmit');
Route::get('precounseling_form', 'FormsController@precounseling_form')->name('forms.precounseling_form');
Route::post('precounseling_formsubmit', 'FormsController@precounseling_formsubmit')->name('forms.precounseling_formsubmit');
Route::post('pfapplication_print', 'FormsController@pfapplication_print')->name('pfapplication_print');
Route::get('pfapplication', 'FormsController@pfapplication')->name('forms.pfapplication');
Route::get('pfapplication_form', 'FormsController@pfapplication_form')->name('forms.pfapplication_form');
Route::post('pfapplication_formsubmit', 'FormsController@pfapplication_formsubmit')->name('forms.pfapplication_formsubmit');
Route::post('evaluation_print', 'FormsController@evaluation_print')->name('evaluation_print');
Route::get('evaluation/{id}', 'FormsController@evaluation')->name('forms.evaluation');
Route::get('evaluation_form/{id}', 'FormsController@evaluation_form')->name('forms.evaluation_form');
Route::get('evaluation_activities', 'FormsController@evaluation_activities')->name('forms.evaluation_activities');
Route::post('evaluationactivitystore', 'FormsController@evaluationactivitystore')->name('evaluationactivity.store');
Route::post('evaluation_formsubmit', 'FormsController@evaluation_formsubmit')->name('forms.evaluation_formsubmit');
Route::post('clientcounselorfeedback_print', 'FormsController@clientcounselorfeedback_print')->name('clientcounselorfeedback_print');
Route::get('clientcounselorfeedback', 'FormsController@clientcounselorfeedback')->name('forms.clientcounselorfeedback');
Route::get('clientcounselorfeedback_form', 'FormsController@clientcounselorfeedback_form')->name('forms.clientcounselorfeedback_form');
Route::post('clientcounselorfeedback_formsubmit', 'FormsController@clientcounselorfeedback_formsubmit')->name('forms.clientcounselorfeedback_formsubmit');
Route::post('pfmembership_print', 'FormsController@pfmembership_print')->name('pfmembership_print');
Route::get('pfmembership', 'FormsController@pfmembership')->name('forms.pfmembership');
Route::get('pfmembership_form', 'FormsController@pfmembership_form')->name('forms.pfmembership_form');
Route::post('pfmembership_formsubmit', 'FormsController@pfmembership_formsubmit')->name('forms.pfmembership_formsubmit');
Route::post('needsassessment_print', 'FormsController@needsassessment_print')->name('needsassessment_print');
Route::get('needsassessment', 'FormsController@needsassessment')->name('forms.needsassessment');
Route::post('/leaversgetfiltered', 'FormsController@leaversgetfiltered')->name('leaversgetfiltered');
Route::get('/leaversprintindividual/{id}', 'FormsController@leaversprintindividual')->name('leaversprintindividual');
Route::get('needsassessment_form', 'FormsController@needsassessment_form')->name('forms.needsassessment_form');
Route::post('individualinventory_print', 'FormsController@individualinventory_print')->name('individualinventory_print');
Route::get('individualinventory', 'FormsController@individualinventory')->name('forms.individualinventory');
Route::post('/individualinventorygetfiltered', 'FormsController@individualinventorygetfiltered')->name('individualinventorygetfiltered');
Route::get('/individualinventoryindividual/{id}', 'FormsController@individualinventoryindividual')->name('individualinventoryindividual');
Route::get('studentprofile', 'FormsController@studentprofile')->name('forms.studentprofile');
Route::post('studentprofile_form', 'FormsController@studentprofile_form')->name('forms.studentprofile_form');
Route::post('studentprofile_form_submit', 'FormsController@studentprofile_form_submit')->name('forms.studentprofile_form_submit');
Route::post('stud_prof_formstore', 'FormsController@stud_prof_formstore')->name('forms.stud_prof_formstore');
Route::post('needsassessment_formsubmit', 'FormsController@needsassessment_formsubmit')->name('forms.needsassessment_formsubmit');
Route::get('individualinventory_form', 'FormsController@individualinventory_form')->name('forms.individualinventory_form');
Route::post('individualinventory_formsubmit', 'FormsController@individualinventory_formsubmit')->name('forms.individualinventory_formsubmit');
Route::get('myaccount', function(){
    return view('myaccount');
})->name('myaccount');
Route::post('office/update', 'HomeController@myaccountupdate')->name('myaccountupdate');
Route::get('form_settings', function(){
    return view('admin.forms.settings');
})->name('form_settings');
Route::get('/enable_form/{id}', 'FormsController@enable_form')->name('enable_form');
Route::get('/clientcounselorindividual/{id}', 'FormsController@clientcounselorindividual')->name('clientcounselorindividual');
Route::get('/evaluationindividual/{id}', 'FormsController@evaluationindividual')->name('evaluationindividual');
Route::get('/interviewfeedbackindividual/{id}', 'FormsController@interviewfeedbackindividual')->name('interviewfeedbackindividual');
Route::get('/needsassessmentindividual/{id}', 'FormsController@needsassessmentindividual')->name('needsassessmentindividual');
Route::get('/pfapplicationindividual/{id}', 'FormsController@pfapplicationindividual')->name('pfapplicationindividual');
Route::get('/pfmembershipindividual/{id}', 'FormsController@pfmembershipindividual')->name('pfmembershipindividual');
Route::get('/precounselingindividual/{id}', 'FormsController@precounselingindividual')->name('precounselingindividual');
Route::post('/clientcounselorgetfiltered', 'FormsController@clientcounselorgetfiltered')->name('clientcounselorgetfiltered');
Route::post('/evaluationgetfiltered', 'FormsController@evaluationgetfiltered')->name('evaluationgetfiltered');
Route::post('/interviewfeedbackgetfiltered', 'FormsController@interviewfeedbackgetfiltered')->name('interviewfeedbackgetfiltered');
Route::post('/needsassessmentgetfiltered', 'FormsController@needsassessmentgetfiltered')->name('needsassessmentgetfiltered');
Route::post('/pfapplicationgetfiltered', 'FormsController@pfapplicationgetfiltered')->name('pfapplicationgetfiltered');
Route::post('/pfmembershipgetfiltered', 'FormsController@pfmembershipgetfiltered')->name('pfmembershipgetfiltered');
Route::post('/precounselinggetfiltered', 'FormsController@precounselinggetfiltered')->name('precounselinggetfiltered');
Route::get('/evaluationactivity/{id}', 'FormsController@evaluationactivity')->name('forms.evaluationactivity');
Route::patch('/evaluationactivity_update/{id}', 'FormsController@evaluationactivity_update')->name('forms.evaluationactivity_update');
Route::get('add_student', 'StudentController@add_student')->name('add_student');
Route::post('add_student_store', 'StudentController@add_student_store')->name('add_student_store');
Route::post('/checkidno', 'StudentController@checkidno')->name('checkidno');
Route::get('student_upd/{id}', 'StudentController@student_upd')->name('student_upd');
Route::delete('student_destroy/{id}', 'StudentController@student_destroy')->name('student_destroy');
Route::delete('schoolyear_delete/{id}', 'SchoolyearController@schoolyear_delete')->name('schoolyear_delete');
Route::post('schoolyear_show/{id}', 'SchoolyearController@schoolyear_show')->name('schoolyear_show');
Route::post('schoolyear_delete/{id}', 'SchoolyearController@schoolyear_delete')->name('schoolyear_delete');
Route::patch('student_upd_store/{id}', 'StudentController@student_upd_store')->name('student_upd_store');
Route::get('stud_profile_form', 'FormsController@stud_profile_form')->name('forms.stud_profile_form');
Route::get('stud_profile', 'FormsController@stud_profile')->name('forms.stud_profile');
Route::post('stud_profile_print', 'FormsController@stud_profile_print')->name('forms.stud_profile_print');
Route::post('/stud_profilegetfiltered', 'FormsController@stud_profilegetfiltered')->name('stud_profilegetfiltered');