<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Student;
use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        return view('web');
    }
    public function services(){
        return view('services');

    }
    public function contact(){
        return view('contact');

    }
    public function signup(){
        $student=Student::all();
        return view('lodinCredentials.signup');
    }
    public function computerScience(){
        return view('servicesPages.computerScience');
    }
    public function DataScience(){
        return view('servicesPages.dataScience');

    }
    public function SocialMedia(){
        return view('servicesPages.socialmedia');
    }

    public function MachineLearing(){
        return view('servicesPages.machineLearning');
    }
    public function category(){
        return view('lodinCredentials.dropdown');
    }
    public function Adminsignup(){
        return view('lodinCredentials.signup');
    }
    public function Studentsignup(){
        $student=Student::get();
        return view('lodinCredentials.studentsignup',compact('student'));
    }
    public function facultysignup(){
        $facult=Faculty::get();
        return view('lodinCredentials.facultysignup',compact('faculty'));
    }
    public function jobs(){
        return view('jobs.job');
    }
    public function news(){
        return view('news.new');
    }
    public function posts(){
        return view('posts.post');
    }
}
