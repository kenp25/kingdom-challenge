<?php

//use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::user()){
        return \Illuminate\Support\Facades\Redirect::to('member/welcome');
    }
    return view('index');
});

Route::get('/challenge', function () {
});

Route::get('challenge/{id}', 'ChallengeController@show');

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('auth/password/{user}', function () {
    return view('password');
});

Route::post('auth/password/{user}', 'PasswordController@create');



Route::get('/auth/register', function () {
    return view('auth.register');
});

Route::get('about', function () {
    return view('about');
});

Route::get('benefits-of-joining-kingdom-challenge', function () {
    return view('benefits-kingdom-challenge');
});

Route::get('consquencies', function () {
    return view('consquencies-of-not-being-challenged');
});

Route::get('ten-benefits-of-a-challenge', function () {
    return view('ten-benefits-of-a-challenge');
});

Route::get('now-are-you-ready', function () {
    return view('now-are-you-ready');
});

Route::post('/auth/login', 'Auth\LoginController@login');

Route::post('/auth/register', 'Auth\RegisterController@register');

Route::get('/auth/verify/{token}', 'Auth\RegisterController@confirm');


Auth::routes();

Route::get('/member/lessons', 'HomeController@index')->name('home');

Route::get('/member/welcome', function (){
    return view('welcome');
});



Route::get('/admin/welcome', 'AdminController@index');

Route::get('admin/challenge/add', 'AdminController@store');

Route::get('admin/user/edit/{id}', 'AdminController@showEdit');

Route::post('admin/user/edit/{id}', 'AdminController@edit');

Route::post('admin/challenge/add', 'AdminController@create');

Route::post('subscriber/add', 'SubscriberController@create');

Route::get('unleash-greatness', function (){
    return view('unleash-greatness');
});

Route::get('challenge-maximization', function (){
    return view('challenge-maximization');
});

Route::get('commitment-to-excellence', function (){
    return view('commitment-to-excellence');
});

Route::get('admin/audio/add/{id}', function (){
    return view('audio');
});

Route::post('admin/audio/add/{id}', 'ChallengeController@addAudio');


Route::get('seven-reasons-for-loving-kingdom-challenge', function (){
    return view('7-reasons');
});

Route::get('ten-rules', function (){
    return view('ten-rules');
});

Route::get('top-ten-tips', function (){
    return view('ten-tips');
});

Route::get('now-are-you-ready-2', function (){
    return view('now-are-you-ready-2');
});

Route::get('admin/user/add', function (){
    return view('add_user');
})->middleware('authorized', 'admin');
