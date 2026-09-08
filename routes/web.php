<?php

// use App\Http\Controllers\Admin\LoginController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\website\GalleryController;
use App\Http\Controllers\website\DepartmentController;
use App\Http\Controllers\Website\FacilityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $json = file_get_contents(
        storage_path('app/doctors.json')
    );

    $doctors = json_decode($json, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        abort(500, 'Invalid doctors.json');
    }

    // Homepage par sirf 4 doctors
    $doctors = array_slice($doctors, 0, 4);

    return view('website.index', compact('doctors'));

});

Route::get('/contact', function () {
    return view('website.pages.contact');
});

Route::get('/about', function () {
    return view('website.pages.about');
});

Route::get('/gallery', function () {
    return view('website.pages.gallery');
});

Route::get('/icu', function () {
    return view('website.pages.icu');
});

Route::get('/departments/{slug}', [DepartmentController::class, 'show']);
Route::get('/facilities/{slug}', [FacilityController::class, 'show']);
Route::get('/departments',function () {
    return view('website.pages.show');
});
// Route::get('/doctor', function () {
//     return view('website.pages.ourdoctor');
// });

Route::get('/blog', function () {
    return view('website.pages.blog');
});


Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->middleware('guest');

Route::post('/admin/login', [AuthController::class, 'login'])
    ->middleware('guest');

Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

Route::post('/admin/logout', [AuthController::class, 'logout'])
    ->middleware('auth');


    Route::fallback(function () {
    return redirect('/');
});



Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

Route::get('/doctors/{slug}', [DoctorController::class, 'show'])
    ->name('doctors.show');

    Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery.index');