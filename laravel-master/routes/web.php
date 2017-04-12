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

Route::get('/Donate_organ',function()
{
	return view('registerDonor');
});

Route::get('/display_donor',function()
{
	return view('display_donor');
});

Route::post('/Donate_organ_entry','Controller@Donate_organ_entry');

Route::post('/check_donor','Controller@checkDonor');

Route::get('/link',function()
{
	return view('link');
});

Route::get('/admin_layout','Controller@Admin');

Route::get('/doctor_layout','Controller@Doctor');

Route::get('/patient_layout','Controller@Patient');

Route::get('/register','Controller@patient_register');

Route::post('/patient_register_entry','Controller@patient_register_entry');

Route::get('/login','Controller@loginEntry');

Route::post('/login_check','Controller@loginEntryCheck');

Route::post('/updateTreatment/{id}','Controller@update');

Route::get('/Appointment','Controller@add_appointment');

Route::get('/View_profile','Controller@view_doctor_profile');

Route::get('/treatment/{appoint_id}','Controller@treatment');

Route::get('/page/{pblm_id}','Controller@doctor_profile_appoint');

Route::get('/book/{pblm_id}','Controller@bookDoctor');


Route::get('/apply/{id}','Controller@applyOrgan');


Route::get('/doctorUpdate/{id}','Controller@doctorUpdate');

Route::get('/delete/{id}','Controller@deleteAppointment');


Route::get('/doctor_register', function () {
    return view('doctor_register');
});

Route::get('/page','Controller@pageDetail');

Route::get('/table','Controller@display_patient_info');

Route::get('/table_doctor','Controller@display_doctor_info');

Route::get('/view','Controller@view_doctor');

Route::post('/do_check', 'Controller@do_check');

//
//Route::post('/add_doctor','Controller@doctor_register_entry');
Route::get('/organ', function () {
    return view('organDonor_register');
});


Route::get('/Appointment', function () {
    return View::make('add_appointment');
});

Route::get('/View_Appointment','Controller@view_appointment_details');

Route::get('/view_doctor_Appointment','Controller@View_doctor_appointment_details');

Route::get('/view_all_appointment','Controller@view_all_appointment_details');

Route::get('/patientFeedback','Controller@patientFeedback');

Route::post('/add_feedback','Controller@add_patient_feedback');

Route::post('/add_article','Controller@Add_Admin_Article');

Route::get('/view_feedback','Controller@Feedback_view');

Route::get('/article_add','Controller@Add_Article');

Route::post('/update/{id}','Controller@update_doctor_details');

Route::post('/add_doctor','Controller@doctor_register_entry');