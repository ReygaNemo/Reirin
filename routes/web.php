<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/about', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/appointment1', function () {
    return view('/appointment1',[
        "title" => "Appointment"
    ]);
});

Route::get('/editprofile', function () {
    return view('/editprofile',[
        "title" => "MyAppointment"
    ]);
});

Route::get('/', function () {
    return view('/login',[
        "title" => "Login"
    ]);
})->name('loginpage');
Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/login', [ProfileController::class, 'loginEn']);
Route::get('/masuk', [ProfileController::class, 'loginIndo']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/registerform', [RegisterController::class, 'showRegis'])->name('registerpage');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/registerform', [RegisterController::class, 'showRegis'])->name('registerpage');

// Route::get('/home', [CustomerController::class, 'index'])->name('showHome');
// Route::get('/appointment', [ServiceController::class, 'showServices']);
// Route::get('/appointment1', [ServiceController::class, 'showSelectedService'])->name('appointment1');
// Route::get('/myappointment', [AppointmentController::class, 'showAllAppointment'])->name('showMyApp');
// Route::post('/select-service', [ServiceController::class, 'serviceSelected'])->name('select-service');
// Route::post('/select-appointment', [AppointmentController::class, 'appointmentSelected'])->name('select-appointment');
// Route::get('/myappointmentdetail', [AppointmentController::class, 'showSelectedAppointment'])->name('myappointmentdetail');
// Route::post('/appointment1', [AppointmentController::class, 'checkEmployee'])->name('checkEmployee');
// Route::post('/paymentType', [PaymentController::class, 'showAllPayment'])->name('paymentStep');
// Route::post('/paymentFinal', [PaymentController::class, 'finalizedPayment'])->name('paymentFinal');
Route::get('/home', [CustomerController::class, 'index'])->name('showHome');
Route::group(['middleware' => 'checkRole:2'], function () {
    Route::get('/admin', function () {
        return view('adminpage');
    });
    Route::get('/appointments', [AdminController::class, 'showAllCustomerAppointment'])->name('adminAppointment');
    Route::get('/addEmpSer', [AdminController::class, 'employeeServicePage'])->name('adminEmpSer');
    Route::post('/changeStatus', [AdminController::class, 'changeAppStatus'])->name('changeStatus');
    Route::post('/addShift', [AdminController::class, 'AddShift'])->name('adminAddShift');
});
Route::group(['middleware' => 'checkRole:1'], function () {
    Route::get('/appointment', [ServiceController::class, 'showServices']);
    Route::get('/appointment1', [ServiceController::class, 'showSelectedService'])->name('appointment1');
    Route::get('/myappointment', [AppointmentController::class, 'showAllAppointment'])->name('showMyApp');
    Route::post('/select-service', [ServiceController::class, 'serviceSelected'])->name('select-service');
    Route::post('/select-appointment', [AppointmentController::class, 'appointmentSelected'])->name('select-appointment');
    Route::get('/myappointmentdetail', [AppointmentController::class, 'showSelectedAppointment'])->name('myappointmentdetail');
    Route::post('/appointment1', [AppointmentController::class, 'checkEmployee'])->name('checkEmployee');
    Route::post('/paymentType', [PaymentController::class, 'showAllPayment'])->name('paymentStep');
    Route::post('/paymentFinal', [PaymentController::class, 'finalizedPayment'])->name('paymentFinal');
});
