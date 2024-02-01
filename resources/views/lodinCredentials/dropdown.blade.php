@extends('lodinCredentials.RegisterLayout')
@section('main')
<div class="container mt-5">
    <h2 class="text-center mt-5">Please Make Sure That you Have Chosen Your Category!</h2>
    <div class="dropdown text-center m-5">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            Select Your Category
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('Adminsignup-form') }}">Admin Signup</a></li>
            <li><a class="dropdown-item" href="{{ route('Studentsignup-form') }}">Student Signup</a></li>
            <li><a class="dropdown-item" href="{{ route('facultysignup-form') }}">Faculty Signup</a></li>
        </ul>
    </div>
</div>

@endsection
