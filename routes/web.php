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

Auth::routes();


/* Resources */
Route::resource('photos', 'PhotoController');
Route::resource('events', 'EventsController');
Route::resource('eventregister', 'EventRegisterController');
Route::get('eventregister/create/{eventid}', 'EventRegisterController@create');
Route::post('eventregister/confirm/{eventregister}', 'EventRegisterController@confirm');


/* PagesController */
Route::get('/','PagesController@mmain');
Route::get('/mmain','PagesController@mmain');


/* HomeController */
Route::get('/mprofile', 'HomeController@mprofile');
Route::get('/musers', 'HomeController@musers');
Route::get('/test','HomeController@test');
Route::get('/home', 'HomeController@index')->name('home');

/* ActivityReportController */
Route::post('/activityreport', 'ActivityReportController@store');

/* UpdatePayerController */
Route::get('/addpayer', 'UpdatePayerController@add');
Route::get('/updatepayer', 'UpdatePayerController@edit');


/* PaymentController */
Route::get('/payment', 'PaymentController@index');
Route::get('/payment/success', 'PaymentController@success');
Route::post('/payment', 'PaymentController@store');
Route::post('/payevtregonline', 'PaymentController@charge');
Route::delete('/payment', 'PaymentController@destroy');
Route::patch('/payment', 'PaymentController@update');
use Illuminate\Http\Request;
Route::get('user/invoice/{invoice}', function (Request $request, $invoiceId) {
    return $request->user()->downloadInvoice($invoiceId, [
        'vendor'  => 'Momintum',
        'product' => 'Payment for Trip to Elk Island',
        ]);
    });
Route::get('user/refund/{invoice}', function (Request $request, $invoiceId) {    
    //return($invoiceId);
    $user=Auth::user();
    $user->refund('pi_1EeCP2BGJ32CkWyoNPtpDwS0');
    return redirect('payment');

});



/* UpdateUserController */
Route::post('/updateuser', 'UpdateUserController@store');

/* EnableStripeController */
Route::post('/enablestripe', 'EnableStripeController');


/* Individual Routes */
Route::get('/eia', function () {
    return view('eia.home');
});

Route::get('/eia/test', function () {
    return view('eia.test');
});

Route::get('/mevent', function () {
    return view('momintum.mevent');
});

Route::get('/contact', function () {
    return view('contact');
});









