<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\BeforeAndAfterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PatientInstructionsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Frontend\HomeController;
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

// Home route
Route::get('/', [HomeController::class, 'index'])->name('pages.home');

// Appointment routes
Route::view('/appointment', 'frontend.pages.appointment')->name('pages.appointment');
Route::post('/appointment/store', App\Http\Controllers\Frontend\AppointmentController::class)->name('pages.appointment.store');

// Static Pages
Route::view('/about', 'frontend.pages.about')->name('pages.about');
Route::view('/surgical', 'frontend.pages.surgical')->name('pages.surgical');
Route::view('/lengthening', 'frontend.pages.lengthening')->name('pages.lengthening');
Route::view('/instructions', 'frontend.pages.instructions')->name('pages.instructions');
Route::get('/before-after', App\Http\Controllers\Frontend\BeforeAndAfterController::class)->name('pages.beforeAfter');
Route::get('/patient_instructions', App\Http\Controllers\Frontend\PatientInstructionsController::class)->name('pages.instructions');
Route::get('/news', [App\Http\Controllers\Frontend\NewsController::class, 'index'])->name('pages.news');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('admin.appointments.index');
    Route::get('/appointments/{appointment}/download', [AppointmentController::class, 'download'])->name('admin.appointments.download');
    Route::resource('before-after', BeforeAndAfterController::class);
    Route::resource('patient_instructions', PatientInstructionsController::class);
    Route::resource('news', NewsController::class);

    Route::get('settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('settings', [SettingController::class, 'update'])->name('admin.settings.update');

});

require __DIR__.'/auth.php';
