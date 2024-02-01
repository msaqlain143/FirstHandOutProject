@extends('admin.Home.main-layout')
@section('content')
<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="text-right">
                <a href="{{route('student-home')}}" class="btn btn-primary mt-2"><i class="fa fa-home"></i></a>
            </div>
            <div class="card mt-3 p-3">

                <h3>Edit Student </h3>
                <form action="/admin/student/{{$data->id}}/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control"
                            placeholder="Enter Name " aria-describedby="helpId"
                            value="{{ old('name',$data->name) }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Father Name</label>
                        <textarea name="fathername" id=""  class="form-control"
                            placeholder="Please Mention More About Product ....">{{ old('fathername',$data->fathername) }}</textarea>
                        @if ($errors->has('fathername'))
                            <span class="text-danger">{{ $errors->first('fathername') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <textarea name="email" id=""  class="form-control"
                            placeholder="Please Mention More About Product ....">{{ old('email',$data->email) }}</textarea>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="address" id=""  class="form-control"
                            placeholder="Please Mention More About Product ....">{{ old('address', $data->address) }}</textarea>
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Qualification</label>
                        <textarea name="qualification" id=""  class="form-control"
                            placeholder="Please Mention More About Product ....">{{ old('qualification',$data->qualification) }}</textarea>
                        @if ($errors->has('qualification'))
                            <span class="text-danger">{{ $errors->first('qualification') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">CV</label>
                        <input type="file" name="file" id="" class="form-control"
                            value="{{ old('file',$data->file) }}" aria-describedby="helpId">
                        @if ($errors->has('file'))
                            <span class="text-danger">{{ $errors->first('file') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control"
                            value="{{ old('image' ,$data->image) }}" aria-describedby="helpId">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
