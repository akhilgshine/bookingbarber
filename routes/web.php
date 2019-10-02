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

use App\Barber;
use App\BookingSlots;
use App\BookingType;
use App\Message;

//Routes::get('logout',array('user' => 'HomeController@doLogout'));
Route::get('/', function () {
    return view('homepage');
});

Route::get('/services', function () {
    $type = BookingType::all();

    return view('service',compact('type'));
});
Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/book', function () {

    $barbers = Barber::all();
    $types = BookingType::all();
    return view('bookappointment',compact('barbers','types'));
});

Route::post('/contact/submit','MessageController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/barber', 'BookingController@getBarber');


Route::get('view-records','appointmentcontroller@index');


// Route::resource('/showmessage','MessageController@index');
Route::resource('admin','adminController');


Route::resource('bookings','BookingController');


Route::post('/insert','newBarberController@insert');
Route::get('/newbarber', function () {
    return view('newbarber');
});
Route::get('/newblog', function () {
    return view('newblog');
});
Route::get('/message', function () {
    
    $messages=Message::all();
    return view('message',compact('messages'));
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/homepage', function () {
    return view('homepage');
});