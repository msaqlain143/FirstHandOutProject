@extends('lodinCredentials.RegisterLayout')
@section('main')
<div class="container mb-3">
    <div class="text-right">
        <a href="{{route('login')}}" class="btn btn-primary mt-2"><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <h1 class="text-center m-2">New Student Record </h1>
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card mt-3 p-3">
                <form action="{{route('student-store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control"
                            placeholder="Enter Name " aria-describedby="helpId" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Father Name</label>
                        <input type="text" class="form-control" name="fathername"
                            aria-describedby="helpId" placeholder=" Enter Your Father Name">
                        @if ($errors->has('fathername'))
                            <span class="text-danger">{{ $errors->first('fathername') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id=""
                            aria-describedby="helpId" placeholder="Enter User Email ">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" id=""
                            aria-describedby="helpId" placeholder="Please Enter Your Postal Addresss ">
                        @if ($errors->has(''))
                            <span class="text-danger">{{ $errors->first('') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Qualification</label>
                        <input type="text" class="form-control" name="qualification" id=""
                            aria-describedby="helpId" placeholder="Enter Your Last Degree ">
                        @if ($errors->has('qualification'))
                            <span class="text-danger">{{ $errors->first('qualification') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">CV</label>
                        <input type="file" class="form-control" name="file" id=""
                            aria-describedby="helpId" placeholder=" Upload Your CV ">
                        @if ($errors->has('file'))
                            <span class="text-danger">{{ $errors->first('file') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control"
                            value="{{ old('image') }}" aria-describedby="helpId">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-dark mt-1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
