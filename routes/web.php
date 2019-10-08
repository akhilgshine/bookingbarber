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
use App\Booking;
use App\Blog;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/services', function () {
    $types = BookingType::all();

    return view('service',compact('types'));
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
Route::post('/barber/submit', 'AddBarber@submit');




Route::resource('admin','adminController');


Route::resource('bookings','BookingController');


Route::get('/addbarber', function () {
    $barbers = Barber::all();
    return view('addbarber', compact('barbers'));
});


Route::get('/message', function () {

    $messages = Message::all();
    return view('message', compact('messages'));

});
Route::get('/booking', function () {

    $bookings = Booking::all();
    return view('booking', compact('bookings'));
});
Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/adminhome', function () {
    return view('adminhome');
});
Route::get('/newblog', function()
{
    return view('newblog');
});
Route::post('/newblog/submit','NewBlogController@submit');


Route::get('/blog', function () {

    $blogs = Blog::all();
    return view('blog', compact('blogs'));

});
Route::get('/addbooktype', function () {
    return view('addbooktype');
});
Route::post('/addbooktype/submit','AddBookTypeController@submit');