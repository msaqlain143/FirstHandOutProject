<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{

    public function AdminSignup()
    {
        return view('lodinCredentials.signup');
    }
    public function store(Request  $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|confirmed',
        // ]);

        User::create(
            [
                'name' => request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password'))
            ]
        );
      return redirect(route('login'));
    }
    public function login()
    {

        return view('lodinCredentials.login');
    }

    public function userchk( Request $request)

    {

        $student = Student::get();
        $faculty=Faculty::get();


       Auth::attempt (['email' => request('email') , 'password' => request('password')]);

       return view('admin.dashboard' , [
        'user' => Auth::user(),
        'faculty' => $faculty,
        'student' => $student
       ]);

    }
}
