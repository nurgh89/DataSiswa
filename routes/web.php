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

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/about', function() {
//     // ini sebuah variabel yang dibuat untuk sebuah tampilan cepat di view about pengganti cepat
    
//     $nama = 'nurhayati';
//     return view('About', ['nama'=> $nama]);

// });

// Route::get('/mahasiswa', function() {
//     return view('mahasiswa');

// });

Route::get('/sidebar', function() {
    return view('sidebar');

});

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact_us', 'PagesController@contact_us');
Route::get('/mahasiswa', 'MahasiswaController@index');

// //Students
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::put('/students', 'StudentsController@update');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}/update', 'StudentsController@update');

//sesuai posisi alur dari website

Route::resource('students', 'StudentsController');




