<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\MainController::class, 'welcome'])->name('welcome');
Auth::routes();

Route::get('/about', [App\Http\Controllers\MainController::class, 'aboutsec'])->name('aboutsec');

Route::get('/servicepage', [App\Http\Controllers\MainController::class, 'servicemenudata'])->name('servicemenudata');
Route::get('/contactpage', [App\Http\Controllers\MainController::class, 'contactpage'])->name('contactpage');
Route::post('/contactpage/email', [App\Http\Controllers\MainController::class, 'sendemail'])->name('sendemail');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/slidesection/{id}', [App\Http\Controllers\HomeController::class, 'submitslider'])->name('submitslider');

Route::get('/slidesection', [App\Http\Controllers\HomeController::class, 'slidesection'])->name('slidesection');

Route::get('/experiencesection', [App\Http\Controllers\HomeController::class, 'experiencesection'])->name('experiencesection');

Route::post('/experiencesubmit', [App\Http\Controllers\HomeController::class, 'submitexperience'])->name('submitexperience');
Route::post('/experiencesectiondel/delete', [App\Http\Controllers\HomeController::class, 'deleteexperience'])->name('deleteexperience');

Route::get('/aboutmesec', [App\Http\Controllers\HomeController::class, 'aboutmesec'])->name('aboutmesec');
Route::post('/aboutmesec/{id}', [App\Http\Controllers\HomeController::class, 'aboutmesubmit'])->name('aboutmesubmit');
Route::post('/aboutmesecadd/add', [App\Http\Controllers\HomeController::class, 'aboutmeintro'])->name('aboutmeintro');

Route::post('/aboutmesecdel/delete', [App\Http\Controllers\HomeController::class, 'aboutmeintrodelete'])->name('aboutmeintrodelete');

Route::get('/resume', [App\Http\Controllers\HomeController::class, 'resumesec'])->name('resumesec');
Route::post('/resume', [App\Http\Controllers\HomeController::class, 'submitresume'])->name('submitresume');
Route::post('/resumedel/delete', [App\Http\Controllers\HomeController::class, 'deleteresume'])->name('deleteresume');
Route::get('/skill', [App\Http\Controllers\HomeController::class, 'skillsec'])->name('skillsec');
Route::post('/skill', [App\Http\Controllers\HomeController::class, 'submitskill'])->name('submitskill');
Route::post('/skilldel/delete', [App\Http\Controllers\HomeController::class, 'deleteskill'])->name('deleteskill');
Route::get('/galary', [App\Http\Controllers\HomeController::class, 'galarysec'])->name('galarysec');
Route::post('/galary', [App\Http\Controllers\HomeController::class, 'submitgalary'])->name('submitgalary');
Route::post('/galarydel/delete', [App\Http\Controllers\HomeController::class, 'deletegalary'])->name('deletegalary');
Route::get('/service', [App\Http\Controllers\HomeController::class, 'servicessec'])->name('servicessec');
Route::post('/service', [App\Http\Controllers\HomeController::class, 'submitservice'])->name('submitservice');
Route::post('/servicedel/delete', [App\Http\Controllers\HomeController::class, 'deleteservice'])->name('deleteservice');
Route::get('/testimonial', [App\Http\Controllers\HomeController::class, 'testimonialsec'])->name('testimonialsec');
Route::post('/testimonial', [App\Http\Controllers\HomeController::class, 'submittestimonial'])->name('submittestimonial');
Route::post('/testimonialdel/delete', [App\Http\Controllers\HomeController::class, 'deletetestimonial'])->name('deletetestimonial');
Route::get('/homepage', [App\Http\Controllers\HomeController::class, 'homepagesetting'])->name('homepagesetting');
Route::post('/homepage/{id}', [App\Http\Controllers\HomeController::class, 'submithomepagesetting'])->name('submithomepagesetting');

Route::post('/homepageupdate/{id}', [App\Http\Controllers\HomeController::class, 'updateexperiencedu'])->name('updateexperiencedu');

Route::get('/socialsec', [App\Http\Controllers\HomeController::class, 'socialicons'])->name('socialicons');
Route::post('/socialsec', [App\Http\Controllers\HomeController::class, 'submitsocialicons'])->name('submitsocialicons');
Route::post('/socialsecdel/delete', [App\Http\Controllers\HomeController::class, 'deletesocialicons'])->name('deletesocialicons');


//adminabout
Route::get('/aboutpagesetting', [App\Http\Controllers\Aboutcontroller::class, 'adminaboutsetting'])->name('adminaboutsetting');
Route::post('/aboutpagesetting/{id}', [App\Http\Controllers\Aboutcontroller::class, 'adminaboutsubmit'])->name('adminaboutsubmit');
Route::get('/workdetails', [App\Http\Controllers\Aboutcontroller::class, 'workdetails'])->name('workdetails');
Route::post('/workdetailsadd/add', [App\Http\Controllers\Aboutcontroller::class, 'submitworkdetails'])->name('submitworkdetails');
Route::post('/workdetailsdelete/delete', [App\Http\Controllers\Aboutcontroller::class, 'deleteworkdetails'])->name('deleteworkdetails');
//ordersec
Route::get('/ordersec', [App\Http\Controllers\Aboutcontroller::class, 'ordersec'])->name('ordersec');
Route::post('/ordersection', [App\Http\Controllers\Aboutcontroller::class, 'submitordersec'])->name('submitordersec');
Route::post('/ordersecdelete/delete', [App\Http\Controllers\Aboutcontroller::class, 'deleteordersec'])->name('deleteordersec');

Route::get('/contactresponse', [App\Http\Controllers\Aboutcontroller::class, 'contactresponse'])->name('contactresponse');

Route::post('/contactresponsedel/delete', [App\Http\Controllers\Aboutcontroller::class, 'delcontactresponse'])->name('delcontactresponse');

Route::get('/singlesms/{id}', [App\Http\Controllers\Aboutcontroller::class, 'singlesms'])->name('singlesms');
Route::post('/singlesms/update', [App\Http\Controllers\Aboutcontroller::class, 'emailreply'])->name('emailreply');

Route::get('/contactsetting', [App\Http\Controllers\Aboutcontroller::class, 'contactsetting'])->name('contactsetting');
Route::post('/contactsetting/update', [App\Http\Controllers\Aboutcontroller::class, 'submitcontactsetting'])->name('submitcontactsetting');


//english App

Route::get('/dialogue_panel', [App\Http\Controllers\Englishcontroller::class, 'dialogue_panel'])->name('dialogue_panel');
Route::post('/dialogue_panel/submit', [App\Http\Controllers\Englishcontroller::class, 'submit_dialogue'])->name('submit_dialogue');

Route::post('/dialogue_panel/update', [App\Http\Controllers\Englishcontroller::class, 'update_dialogue'])->name('update_dialogue');

Route::post('/dialogue_panel/delete', [App\Http\Controllers\Englishcontroller::class, 'delete_dialogue'])->name('delete_dialogue');


Route::get('/mydialogue/{id}', [App\Http\Controllers\Englishcontroller::class, 'mydialogue'])->name('mydialogue');
Route::post('/submit_mydialogue', [App\Http\Controllers\Englishcontroller::class, 'submit_mydialogue'])->name('submit_mydialogue');

Route::post('/delete_mydialogue', [App\Http\Controllers\Englishcontroller::class, 'delete_mydialogue'])->name('delete_mydialogue');

Route::post('/edit_mydialogue', [App\Http\Controllers\Englishcontroller::class, 'edit_mydialogue'])->name('edit_mydialogue');


//sentence

Route::get('/sentence_panel', [App\Http\Controllers\Englishcontroller::class, 'sentence_panel'])->name('sentence_panel');
Route::get('/grammar_panel', [App\Http\Controllers\Englishcontroller::class, 'grammar_panel'])->name('grammar_panel');
Route::get('/quiz_panel', [App\Http\Controllers\Englishcontroller::class, 'quiz_panel'])->name('quiz_panel');

Route::get('/single_quiz/{id}', [App\Http\Controllers\Englishcontroller::class, 'single_quiz'])->name('single_quiz');


//app api

Route::post('/app_login', [App\Http\Controllers\apicontroller::class, 'app_login'])->name('api.app_login');
Route::post('/app_register', [App\Http\Controllers\apicontroller::class, 'app_register'])->name('api.app_register');

Route::get('/app_dialogue', [App\Http\Controllers\apicontroller::class, 'app_dialogue'])->name('app_dialogue');

Route::get('/app_mydialogue/{id}', [App\Http\Controllers\apicontroller::class, 'app_mydialogue'])->name('app_mydialogue');

Route::get('/app_mydialogue_practics', [App\Http\Controllers\apicontroller::class, 'app_mydialogue_practics'])->name('app_mydialogue_practics');

Route::post('/checkdate', [App\Http\Controllers\apicontroller::class, 'checkdate'])->name('checkdate');