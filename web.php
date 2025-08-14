<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('website.home');
})->name('home');

// ===============================
// WEBSITE ROUTES
// ===============================

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/services', function () {
    return view('website.services');
});

Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/blogs', function () {
    return view('website.blogs');
});



// ===============================
// ADMIN  ROUTES
// ===============================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/master', function () {
    return view('dashboard.master');
});

Route::get('/main', function () {
    return view('dashboard.main');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('adminn', [adminController::class, 'dashboard'])->name('adminn');





// ===============================
// WEBSITE ROUTES CRUD
// ===============================


// Public website pages
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('website.products.index');
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('website.products.show');

Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('website.orders.create');
Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('website.orders.store');



// Appointment booking (website side)
Route::get('/appointments/create', [App\Http\Controllers\AppointmentController::class, 'create'])->name('website.appointments.create');
Route::post('/appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('website.appointments.store');

// Category browsing (website side)
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('website.categories.index');
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('website.categories.show');

// ===========================================
// ADMIN ROUTES (only for admin access)  CRUD
// ===========================================
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

 




    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('admin.dashboard');

    // Users CRUD
    Route::resource('users', App\Http\Controllers\UserController::class);

    // Staff CRUD
    Route::resource('staff', App\Http\Controllers\StaffController::class);

    // Payments CRUD
    Route::resource('payments', App\Http\Controllers\PaymentController::class);

    // Products CRUD
    Route::resource('products', App\Http\Controllers\ProductController::class);

    // Orders CRUD
    Route::resource('orders', App\Http\Controllers\OrderController::class);

    // Appointments CRUD
    Route::resource('appointments', App\Http\Controllers\AppointmentController::class);

    // Categories CRUD
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
});


