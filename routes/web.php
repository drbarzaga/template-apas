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

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/overview', 'HomeController@overview')->name('overview');
    Route::get('/gallery', 'HomeController@gallery')->name('gallery');
    Route::get('/fuel', 'HomeController@fuel')->name('fuel');
    Route::get('/hydraulic', 'HomeController@hydraulic')->name('hydraulic');
    Route::get('/electro-mechanical', 'HomeController@electroMechanical')->name('electro_mechanical');
    Route::get('/capabilities', 'HomeController@capabilities')->name('capabilities');
    Route::get('/search/capabilities', 'HomeController@searchCapabilities')->name('search_capabilities');
    Route::get('/certifications', 'HomeController@certifications')->name('certifications');
    Route::get('/rfq', 'HomeController@rfq')->name('rfq');
    Route::post('/rfq/need-quote', 'HomeController@needQuote')->name('need_quote');
    Route::get('/contact-us', 'HomeController@contactUs')->name('contact_us');
    Route::post('contact-us/message', 'HomeController@contactMessage')->name('contact_message');
});

Route::get('/test/email/need-quote', function () {
    $data = [
        'name'    => 'Dayan',
        'email'   => 'dayan@mail.com',
        'message' => 'Message test'
    ];
    return new \App\Mail\NeedQuoteMail($data);
});

Route::get('/test/email/contact-message', function () {
    $data = [
        'name'    => 'Dayan',
        'email'   => 'dayan@mail.com',
        'subject' => 'Subject',
        'message' => 'Message test'
    ];
    return new \App\Mail\ContactMessageMail($data);
});
