<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/blog', 'ArtikelController@get');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('dahboard', function () {
    return view('dashboard');
});

Route::get('/galery', 'GalleryController@index1');

Route::get('/artikel', function () {
    $artikels = DB::table('artikels')->get();
    $categories = DB::table('categories')->get();
    return view('artikel', ['artikels' => $artikels], ['categories' => $categories]);
});

Route::get('/artikel/filter/{id}', function($id){
    $artikelFilter = DB::table('artikels')->where('kategori', $id)->get();
    return view('artikelFilter', ['artikelFilter' => $artikelFilter]);
}); 



Route::resource('artikels','ArtikelController');

Route::resource('tags','TagController');

Route::get('/membership', 'role@index')->name('lokit');

Route::resource('categories','CategorieController');

Route::resource('galleries','GalleryController');

Route::post('\comments','BlogCommentController@store')->name
('blog.comment.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
