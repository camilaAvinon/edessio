<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request){    
    return redirect('profile');
    // $user = User::where('email', $request->input('email'))->first();
    // if ($user){
    //     if (Hash::check($request->password, $user->password)) {
    //         Auth ::login($user);
    //         if ($request->user()->role == 'Admin') {
    //             return redirect('admin');
    //         } else {
    //             return redirect('index');
    //         }
    //     }else {
    //         return back()->withErrors([
    //             'password' => ['Contraseña incorrecta. Inténtelo de nuevo.']
    //         ]);
    //     }
    // } else {
    //     return view('login');
    // }    
});

Route::get('/profile', function () {
    return view ('profile');
});

Route::get('/signup', function () {
    return view('signup');
});
