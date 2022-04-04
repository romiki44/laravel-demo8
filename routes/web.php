<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$posts=[
    1 => [
         'title' => 'Intro to Laravel',
         'content' => 'This is a short intro to Laravel',
         'is_new' => true,
         'has_comments' => true
       ],
      2 => [
         'title' => 'Intro to PHP',
         'content' => 'This is a short intro to PHP',
         'is_new' => false
       ],
       3 => [
         'title' => 'Intro to Golang',
         'content' => 'This is a short intro to Golang',
         'is_new' => false
       ]
];

// Route::view('/', 'home.index')->name('home.index');
// Route::view('/contact', 'home.contact')->name('home.contact');
Route::get('/', [HomeController::class, 'home'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/single', AboutController::class);

/* Route::get('/posts', function() use ($posts) {
    //dd(request()->all());
    dd((int)request()->input('page', 0));
    return view('posts.index', ['posts'=>$posts]);
});

Route::get('/posts/{id}', function ($id) use($posts) {
    abort_if(!isset($posts[$id]), 404);
    return view('posts.show', ['post'=>$posts[$id]]);
}); */

Route::resource('posts', PostsController::class);
  //->only(['index','show','create', 'store', 'edit', 'update']);

Route::prefix('/fun')->name('fun.')->group(function() use($posts) {
  Route::get('/responses', function() use($posts) {
    return response($posts, 201)
      ->header('Content-Type', 'application/json')
      ->cookie('My_Cookie', 'Piotr Jura', 2);
  })->name('responses');

  Route::get('/download', function() use($posts) {
    return response()->download(public_path('/daniel.jpg'),'face.jpg');
  })->name('download');
});



