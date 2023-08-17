<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CManageStudent;

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

Route::get( '/', [CManageStudent::class, 'index'] );
Route::get( '/delete/{id}', [CManageStudent::class, 'delete'] );

// Route::get('/demo/{name}/{id?}', function( $name, $id = null ) {
//     $data = compact( 'name', 'id' );
//     return view('demo')->with($data);
// });

// Route::post('/test', function(){
//     echo 'Testing the route';
// });

// // Route::get('/about', function(){
// //     return view( 'about' );
// // });

// Route::view( '/about', 'about' );

// Route::get( '/user', [User::class, 'index'] );

// Route::view( '/login', 'login' );

// Route::post( '/process_login', [ CManageUsers::class, 'processLogin' ] );

// Route::get('/studentview', [ StudentController::class, 'index' ] );



