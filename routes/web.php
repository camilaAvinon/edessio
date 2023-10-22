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
    return redirect('profile');
});

Route::get('/profile', function () {
    return view ('profile');
});

Route::get('/profile-teacher', function () {
    return view ('profileTeacher');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', function (Request $request){
    // if ($request->input('password') !== $request->input('password_confirm')) {
    //     return redirect('signup')->withErrors(['password' => "The passwords don't match! Please try again."]);
    // }else {
    //     $validator = Validator::make($request->all(), [
    //         'name'      => 'required|alpha|min:2|max:255',
    //         'email'     => 'required|email',
    //         'password'  => 'required',
    //     ]);
    
    //     if ($validator->fails()) {
    //         return redirect('signup')->withErrors($validator)->withInput();
    //     }
    //     $data = request()->merge([
    //         'password' => Hash::make($request->input('password')),
    //         'role' => 'User'
    //     ])->toArray();
    //     User::create($data);
    //     $user = User::where('email', $request->input('email'))->first();
    //     Auth::login($user);
    //     return redirect('index');
    // }
    return redirect('profile');
});
