<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\ZoomMeetingController;
use App\Http\Controllers\InternetServiceController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('monitorings', MonitoringController::class);
    Route::get('monitorings/pdf/{id}', [MonitoringController::class, 'generatePDF'])->name('monitorings.pdf');

    Route::resource('zoom_meetings', ZoomMeetingController::class);
    Route::get('zoom_meetings/pdf/{id}', [ZoomMeetingController::class, 'generatePDF'])->name('zoom_meetings.pdf');

    Route::resource('internet_services', InternetServiceController::class);
    Route::get('internet_services/pdf/{id}', [InternetServiceController::class, 'generatePDF'])->name('internet_services.pdf');

    Route::resource('perbaikans', PerbaikanController::class);
    Route::get('perbaikans/pdf/{id}', [PerbaikanController::class, 'generatePDF'])->name('perbaikans.pdf');
    
    Route::get('post', function(){
        return view('post');
    });
});


