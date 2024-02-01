@extends('admin.Home.main-layout')
@section('content')
    <div class="container mt-3">
        <div class="text-right">
            <a href="{{ route('faculty-create') }}" class="btn btn-primary mt-4"><i class="fa fa-plus" aria-hidden="true"></i></a>
        </div>
        @if (session('message'))
            <div class="alert alert-info mt-2">
                {{ session('message') }}
            </div>
        @endif

        <h1 class="text-center">Faculties Record</h1>
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
                    <th>Experience</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>



                @isset($data)
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->qualification }}</td>
                        <td>{{ $data->desigination }}</td>
                        <td>
                            <a href="/{{ $data->file }}">DownLoad CV</a>
                        </td>
                        <td>{{ $data->experience }}</td>
                        <td>
                            <img src="/{{ $data->image }}" alt="data-Image" class="rounded-circle" width="50px"
                                height="30px">
                        </td>

                        <td class="d-flex">
                            <a name="edit" id="" class="btn btn-primary"
                                href="{{ route('faculty-edit', $data->id) }}" role="button"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a name="delete" id="" class="btn btn-danger"
                                href="{{ route('faculty-delete', $data->id) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a name="show" id="" class="btn btn-success"
                                href="{{ route('faculty-show', $data->id) }}" role="button"><i class="fa fa-show" aria-hidden="true">show</i></a>
                        </td>
                    </tr>
                @endforeach
                @endisset
            </tbody>
        </table>

    </div>
@endsection
