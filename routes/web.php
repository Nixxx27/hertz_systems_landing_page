<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;

// Redirect root to login
// Route::get('/', function () {
//     return redirect()->route('login');
// });

// // Show login page
// Route::get('/login', function () {
//     return view('auth.login'); // points to resources/views/auth/login.blade.php
// })->name('login');

// // Handle login form
// Route::post('/login', function (Request $request) {
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();
//         return redirect()->route('systems.landing');
//     }

//     return back()->withErrors([
//         'email' => 'Invalid credentials.',
//     ]);
// });

// Protected systems landing page after login
// Route::get('/systems', function () {
//     return view('system_landing_page'); // points to resources/views/system_landing_page.blade.php
// })->middleware('auth')->name('systems.landing');

// // Handle logout
// Route::post('/logout', function (Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();

//     return redirect()->route('login');
// })->name('logout');


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

Route::get('/', function () {
    return view('systems_page_one');
});

