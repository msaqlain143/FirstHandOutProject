@extends('admin.Home.main-layout')
@section('content')
    @if(session('message'))
    <div class="alert alert-info m-3">
        {{session('message')}}
    </div>
    @endif

    <div class="alert alert-info m-2">

        <h3 class="text-center" > Welcome: {{Auth::user()->name}}</h3>

    </div>


<h1 class="text-center m-4 bg-dark text-light"> This is Admin Dashborad ! </h1>
<div class="mt-3">
    <h3 class="text-center bg-primary"> Welcome to Students Record</h3>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Qualification</th>
                            <th>File</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($student as $student)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->fathername }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->qualification }}</td>
                                <td>
                                    <a href="#" >Download CV</a>
                                </td>
                                <td>
                                    <img src="/{{ $student->image }}" alt="Student-Image"
                                        class="rounded-circle" width="50px" height="30px">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


            <div>
                <h3 class="text-center bg-success"> Welcome to Faculties Record</h3>
                <table class="table table-hover table-bordered mt-3">
                    <thead>
                      <tr>
                        <th>S.no</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Qualification</th>
                        <th>Desigination</th>
                        <th>File</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($faculty as $faculty)
                      <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$faculty->name}}</td>
                        <td>{{$faculty->email}}</td>
                        <td>{{$faculty->address}}</td>
                        <td>{{$faculty->qualification}}</td>
                        <td>{{$faculty->desigination}}</td>
                        <td>
                            <a href="">Download CV</a>
                        </td>
                        <td>{{$faculty->experience}}</td>
                        <td>
                            <img src="/{{$faculty->image}}" alt="faculty-Image" class="rounded-circle" width="50px" height="30px">
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
@endsection
