<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view ('blog' , ['data' => 'test 123']);
});

Route::view('/blog', 'blog' , ['data' => 'hekso nob']);

// Route::get('/blog/1', function () {
//     return 'blog1';
// });

// Route::get('/blog/2', function () {
//     return 'blog2';
// });

Route::get('/blog/{id}', function ($id) {
    return 'blokm '.$id;
});

// Route::get('/blog/{id}', function (Request $request) {
//     $name = $request->name;
//     $password = $request->password;
//     return 'blokm '.$request->id;
// });

Route::get('/blog/{title}', function (Request $request) {
    $name = $request->name;
    $password = $request->password;
    return 'blokm '.$request->title;
})->name('whatever');

// Route::get('/blog/', function () {
//     $profile = 'valen wibu';
//     return view('blog', ['data' => $profile]);
// });

Route::get('/blog/{title}', function (Request $request) {
    return redirect()->route('blog');
    // return 'blokm '.$request->title;
});

Route::get('/blog', [BlogController::class, 'index']);
