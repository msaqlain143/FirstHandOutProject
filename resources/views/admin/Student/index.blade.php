@extends('admin.Home.main-layout')
@section('content')
    <div class="text-right">
        <a href="{{ route('student-create') }}" class="btn btn-primary mt-4"><i class="fa fa-plus" aria-hidden="true"></i></a>
    </div>


    @if (session('message'))
        <div class="alert alert-info mt-2">
            <span>{{ session('message') }} </span>
        </div>
    @endif
    <div class="">
        <h1 class="text-center">Students Record</h1>
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
                    <th>Action</th>
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
                            <a href="/{{ $student->file }}">Download CV</a>
                        </td>
                        <td>
                            <img src="/{{ $student->image }}" alt="Student-Image" class="rounded-circle" width="50px"
                                height="30px">
                        </td>
                        <td class="d-flex">
                            <a name="edit" id="" class="btn btn-primary"
                                href="{{ route('student-edit', $student->id) }}" role="button"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a name="delete" id="" class="btn btn-danger"
                                href="{{ route('student-destroy', $student->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a name="show" id="" class="btn btn-success"
                                href="{{ route('student-show', $student->id) }}" role="button"><i class="fa fa-display" aria-hidden="true">show</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    </div>
    </div>



    </tbody>
    </table>

    </div>
@endsection
