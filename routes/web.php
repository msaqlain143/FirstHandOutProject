<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\webController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\studentController;
use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     return view('welcome');
// });
//home
Route::get('/',[webController::class,'index'])->name('web-home');
Route::get('/services',[webController::class,'services'])->name('home-services');
Route::get('/contact',[webController::class,'contact'])->name('home-contact');

Route::get('/computer-science',[webController::class,'computerScience'])->name('computer-science');
Route::get('/Machine-learing',[webController::class,'MachineLearing'])->name('Machine-learing');
Route::get('/Data-Science',[webController::class,'DataScience'])->name('Data-Science');
Route::get('/Social-Media',[webController::class,'SocialMedia'])->name('Social-Media');

Route::get('/news',[webController::class,'news'])->name('news-update');
Route::get('/jobs',[webController::class,'jobs'])->name('jobs-update');
Route::get('/posts',[webController::class,'posts'])->name('posts-update');


Route::get('student' , function (){
 return    Student::all();
});


//admin
Route::get('/userchk',[Controller::class,'userchk'])->name('user-verifiaction');
Route::get('/adminsignup',[Controller::class,'Adminsignup'])->name('Adminsignup-form');
Route::get('/adminstore',[Controller::class,'store'])->name('Admin-store');

//login

Route::get('/login',[Controller::class,'login'])->name('login');
Route::get('logout' , function (){

    Auth::logout();

    return redirect(route('login'));

});
Route::get('/category',[webController::class,'category'])->name('signup-category');

Route::get('/Studentsignup',[webController::class,'Studentsignup'])->name('Studentsignup-form');
Route::get('/facultysignup',[webController::class,'facultysignup'])->name('facultysignup-form');
//admin dashboard

// Route::middleware('auth')->group(function (){
//student panel
Route::get('admin/student/index',[studentController::class,'index'])->name('student-home');
Route::get('admin/student/create',[studentController::class,'create'])->name('student-create');
Route::POST('admin/student/store',[studentController::class,'store'])->name('student-store');
Route::get('admin/student/{id}/edit',[studentController::class,'edit'])->name('student-edit');
Route::get('admin/student/{id}/show',[studentController::class,'show'])->name('student-show');
Route::post('admin/student/{id}/update',[studentController::class,'update'])->name('student-update');
Route::get('admin/student/{id}/delete',[studentController::class,'delete'])->name('student-destroy');
//faculty panel
Route::get('admin/faculty/index',[facultyController::class,'index'])->name('faculty-home');
Route::get('admin/faculty/create',[facultyController::class,'create'])->name('faculty-create');
Route::POST('admin/faculty/store',[facultyController::class,'store'])->name('faculty-store');
Route::get('admin/faculty/{id}/edit',[facultyController::class,'edit'])->name('faculty-edit');
Route::get('admin/faculty/{id}/show',[facultyController::class,'show'])->name('faculty-show');
Route::post('admin/faculty/{id}/update',[facultyController::class,'update'])->name('faculty-update');
Route::get('admin/faculty/{id}/delete',[facultyController::class,'delete'])->name('faculty-delete');

Route::get('dashboard' , function()
{
    # code...

    $student = Student::get();
    $faculty=Faculty::get();

    return view('admin.dashboard' , [
        'student' => $student,
        'faculty' => $faculty,

    ]);

});
Route::get('admin',[DashboardController::class,'index'])->name('admin-dashboard');
Route::get('student-add' , [studentController::class , 'store'] );
Route::get('student-show' , [studentController::class , 'index'] );

Route::get('user/home',[DashboardController::class,'user_index'])->name('user-index');

// });





