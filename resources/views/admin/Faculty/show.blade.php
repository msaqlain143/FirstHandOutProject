@extends('admin.Home.main-layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="text-right">
                <a href="{{ route('faculty-home') }}" class="btn btn-primary mt-2"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
            <h2 class="text-center m-2">Details Of faculty :</h2>
            <div class="card p-4 mb-4">
                @if(isset($faculty))
                    <p>Name : <b>{{ $faculty->name }}</b></p>
                    <p>Father Name: <b>{{ $faculty->fathername }}</b></p>
                    <p>Email: <b>{{ $faculty->email }}</b></p>
                    <p>Address: <b>{{ $faculty->address }}</b></p>
                    <p>Qualification: <b>{{ $faculty->qualification }}</b></p><br>
                    <a href="/{{ $faculty->file }}">Download CV</a>


                    <img src="/{{ $faculty->image }}" alt="faculty Image" class="rounded mt-2 mx-auto d-block" width="50%">
                @else
                    <p>No faculty data available.</p>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
