@extends('admin.Home.main-layout')
@section('content')
<div class="container mb-3">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="text-right">
                <a href="{{ route('student-home') }}" class="btn btn-primary mt-2"><i class="fa fa-home"></i></a>
            </div>
            <h2 class="text-center m-2">Details Of Student :</h2>
            <div class="card p-4">
                @if(isset($student))
                    <p>Name : <b>{{ $student->name }}</b></p>
                    <p>Father Name: <b>{{ $student->fathername }}</b></p>
                    <p>Email: <b>{{ $student->email }}</b></p>
                    <p>Address: <b>{{ $student->address }}</b></p>
                    <p>Qualification: <b>{{ $student->qualification }}</b></p>
                    <a href="/{{ $student->file }}"> Download CV</a>
                    <br>
                    <img src="/{{ $student->image }}" alt="Student Image" class="rounded mt-2 mx-auto d-block" width="50%">
                @else
                    <p>No student data available.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
