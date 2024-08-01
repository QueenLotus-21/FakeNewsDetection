<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PredictionController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
  return view('header');
});
Route::get('/app', function () {
  return view('layouts.app');
});

Route::post('/predict',[PredictionController::class,'predict'])->name('predict');
Auth::routes();

//post
//Route::post('/post',[NewsController::class,'post'])->name('post');
Route::get('/post', [App\Http\Controllers\NewsController::class, 'postN'])->name('newsPost.post');
Route::post('/post', [App\Http\Controllers\NewsController::class, 'post'])->name('newsPost.post');
Route::get('/managePost', [App\Http\Controllers\NewsController::class, 'getPost'])->name('newsPost.managePost');
Route::get('/editPost/{id}', [App\Http\Controllers\NewsController::class, 'editP'])->name('newsPost.editPost');
Route::PUT('/editPost/{id}', [App\Http\Controllers\NewsController::class, 'editPost'])->name('newsPost.editPost');
Route::delete('/deletePost/{id}', [App\Http\Controllers\NewsController::class, 'deletePost'])->name('newsPost.managePost');
Route::get('/deletePost/{id}', [App\Http\Controllers\NewsController::class, 'deletePost'])->name('newsPost.managePost');
Route::get('/index', function () {
  return view('newsPost.index');
});

// Route::get('/managePost', function () {
//   return view('newsPost.managePost');
// });
// Route::get('/post', function () {
//   return view('newsPost.post');
// });

//admin home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('role');

Route::get('/admin/createAdmin', [App\Http\Controllers\userController::class, 'createAdminAcc'])->name('admin.createAdmin');
Route::post('/admin/createAdmin', [App\Http\Controllers\userController::class, 'createAdmin'])->name('admin.createAdmin');
Route::get('/admin/manageAdmin', [App\Http\Controllers\userController::class, 'getAdmins'])->name('admin.manageAdmin');
Route::get('/admin/editAdmin/{id}', [App\Http\Controllers\userController::class, 'editA'])->name('admin.editAdmin');
Route::PUT('/admin/editAdmin/{id}', [App\Http\Controllers\userController::class, 'editAdmin'])->name('admin.editAdmin');
Route::delete('/admin/deleteAdmin/{id}', [App\Http\Controllers\userController::class, 'deleteA'])->name('admin.deleteAdmin');
Route::get('/admin/deleteAdmin/{id}', [App\Http\Controllers\userController::class, 'deleteAdmin'])->name('admin.deleteAdmin');

Route::get('/admin', function () {
  return view('admin.dashboard');
});
Route::get('/dashboard', function () {
  return view('admin.index');
});
// Route::get('/account', function () {
//   return view('admin.admin.createAccount');
// });



Route::get('/about', function () {
  return view('about');
});
Route::get('/header', function () {
  return view('header');
});
Route::get('/contact', function () {
  return view('contact');
});

// Route::get('/post', function () {
//   return view('newsPost.post');
// });


//report
Route::get('/showReport', function () {
  return view('report');
});
Route::get('/admin/generateR', [App\Http\Controllers\NewsController::class, 'getReport'])->name('admin.report.generateReport');
Route::get('/admin/generateReport/{id}', [App\Http\Controllers\NewsController::class, 'edit'])->name('admin.report.generateReport');
Route::post('/admin/generateReport/{id}', [App\Http\Controllers\NewsController::class, 'generate'])->name('admin.report.generateReport');


//users
Route::get('/showUsers', function () {
  return view('report');
});
Route::get('/manageUsers', [App\Http\Controllers\userController::class, 'getUser'])->name('admin.users.manageUser');

Route::get('/manageUser', [App\Http\Controllers\userController::class, 'getUsers'])->name('admin.users.manageUsers');
Route::get('/editUser/{id}', [App\Http\Controllers\userController::class, 'editUser'])->name('editUser');
Route::put('/updateUser/{id}', [App\Http\Controllers\userController::class, 'updateUser'])->name('admin.users.editUser');

//ban
Route::get('/banB/{id}', [App\Http\Controllers\userController::class, 'banB'])->name('admin.users.BanBloger');
Route::put('/ban/{id}', [App\Http\Controllers\userController::class, 'ban'])->name('admin.users.BanBloger');

Route::get('/BanUser', function () {
  return view('BanUser');
});

