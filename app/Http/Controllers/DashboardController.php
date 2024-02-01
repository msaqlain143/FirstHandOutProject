<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $student = Student::get();
        $faculty=Faculty::get();
        return view('admin.dashboard',compact('student','faculty'));

    }
    public function user_index(){
        $user=User::get();
        return view('users.user',compact('user'));
    }
}
