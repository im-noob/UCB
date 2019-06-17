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

// Main Page Route
Route::get('/', 'main_c@getMainPageData');

// Notice Route
Route::get('/notice',function(){
    return view('notice');
});

Route::post('/getPost', 'notice_c@getPostFromAjax');


// Welcome Route Or Login For Admin
Route::get('/welcome',function(){
    return view('welcome');
});


// all System Routes for auth
Auth::routes();

// Overriding register route
Route::get('register',function(){
    return view('main');
});

// Contact us form submition
Route::post('submitContactUS', 'contact@submitContactForm');







Route::group(['middleware' => ['auth']], function () {
  
    // Admin Panel
    Route::get('/home', 'HomeController@index')->name('home');

    //Edit Admin
    Route::get('editGalary', 'HomeController@funeditGalary');
    Route::get('editSlider', 'HomeController@funeditSlider');
    Route::get('editTeamMembers', 'HomeController@funeditTeamMembers');
    Route::get('editTestimonials', 'HomeController@funeditTestimonials');
    Route::get('editNotice', 'HomeController@funeditNotice');

    // Edit post
    Route::get('PostNotice',function(){
        return view('admin.PostNotice');
    });
    Route::post('savePost',  'HomeController@savePost');

});
