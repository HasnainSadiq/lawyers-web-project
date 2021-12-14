<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;


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

Route::get('/', [LawyerController::class, 'frontend'])->name('lawyer.frontend');

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth', 'verified', 'authlawyer']], function () {
    // view routes for lawyer
    Route::view('/lawyer/dashboard', 'lawyer.dashboard')->name('lawyer.dashboard');
    Route::view('/lawyer/home', 'lawyer.home')->name('lawyer.home');
    //  route to control from lawyer side.
    Route::get('/lawyer/appointment', [AppointmentController::class, 'appointment'])->name('lawyer.appointment');
    Route::post('/appointment/update/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    
    // lawyer CRUD routes.
    Route::resource('lawyer', LawyerController::class);

});

Route::group(['middleware' => ['auth', 'verified', 'authclient']], function () {

    Route::view('/client/dashboard', 'client.dashboard')->name('client.dashboard');
    Route::view('/client/home', 'client.home')->name('client.home');
    
    Route::resource('client', ClientController::class);


    Route::view('/appointment/home', 'appointment.home')->name('appointment.home');
    Route::get('/client/appointLawyer/{id}', [AppointmentController::class, 'modal'])->name('client.appointLawyer');
    Route::get('/search/lawyer', [AppointmentController::class, 'searchLawyer'])->name('search.lawyer');
    Route::get('/appointment/index', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::post('appointment/change/{id}', [AppointmentController::class, 'clinetUpdateAppointment'])->name('appointment.change');
    Route::get('/appointment/show', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::post('appointment/payment/{id}', [AppointmentController::class, 'payment'])->name('appointment.payment');

 
});

Route::group(['middleware' => ['auth', 'verified', 'authadmin']], function () {

    Route::view('/admin/dashboard', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/admin/lawyer',[AdminController::class, 'lawyer'])->name('admin.lawyer');
    Route::get('/admin/lawyer/delete/{id}',[AdminController::class, 'deleteLawyer'])->name('admin.lawyer.delete');
    Route::get('/admin/client',[AdminController::class, 'client'])->name('admin.client');
    Route::get('/admin/client/delete/{id}',[AdminController::class, 'deleteClient'])->name('admin.client.delete');

   
    
});


