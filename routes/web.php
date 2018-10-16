<?php

/*
|------------		--------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('login.html', function() {
	return view('backend.login');
});

// login with facebook
Route::get('facebook', 'SocialLoginController@facebookRedirectToProvider');
Route::get('facebook/callback', 'SocialLoginController@facebookHandleProviderCallback');

// login with google
Route::get('google', 'SocialLoginController@googleRedirectToProvider');
Route::get('google/callback', 'SocialLoginController@googleHandleProviderCallback');

Route::post('admin/login', 'AdminController@postloginadmin');
Route::get('logout.html', 'AdminController@getlogout');
Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function() {
	Route::get('/', function() {
		return view('backend/layouts/dashboard');
	});
	Route::get('list/admin.html', 'AdminController@getlistadmin');
	Route::get('edit/admin.html', 'AdminController@dataeditadmin');
	Route::post('edit/admin.html', 'AdminController@ajaxeditadmin');
	Route::post('delete', 'AdminController@ajaxdeleteadmin');
	Route::get('profile.html/name={id}', function() {
		return view('backend.layouts.profile');
	});
	Route::get('changepassword.html/name={id}', function() {
		return view('backend.layouts.changepassword');
	});
	Route::post('changepassword.html/name={id}', 'AdminController@postchangepassword');
	Route::get('lockscreen.html/id={id}', 'AdminController@getlockscreen');
	Route::get('contact.html', function() {
	    return view('backend.layouts.contact');
	});
});

Route::get('home', function() {
    return view('frontend.forum');
});
Route::get('document.html', function() {
    return view('frontend.document');
});
Route::get('confession.html', function() {
    return view('frontend.confession');
});

Route::get('register.html', 'HomeController@checkLogin');
Route::get('aboutus.html', 'LayoutController@getListAdmin');
Route::get('faqsandsupport.html', 'LayoutController@getListSupport');
Route::get('detail-faq.html/question_id={id}&title={title}', 'LayoutController@getDetailFaq');
Route::get('signout.html', 'HomeController@getLogout');
Route::group(['prefix' => 'ajax'], function() {
    Route::post('login', 'HomeController@ajaxPostLogin');
    Route::post('question-uploads', 'QuestionController@postquestion');
    Route::post('confession-uploads', 'ConfessionController@postconfession');
    Route::post('register', 'HomeController@PostRegister');
    Route::get('/getlistsupport', 'LayoutController@ajaxListSupport');
    Route::get('/search-support', 'LayoutController@ajaxResultFaq');
    Route::get('/getresult', 'LayoutController@ajaxPageResult');
});

