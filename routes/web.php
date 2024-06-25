<?php
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', [SessionController::class, 'create'] );

Route::post('/login' , [SessionController::class, 'store']);

Route::post('/register' , [UserController::class, 'store']);

Route::get('/register' ,function () {
    return view('auth.register');
});

Route::post('/logout' , [SessionController::class, 'destroy']);


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::post('/form', [UserController::class, 'register']);

Route::post('/update/{id}', [UserController::class, 'update'])->name('update');

Route::get('/listing', [UserController::class, 'allData'])->name('listing');

Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');

Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});
