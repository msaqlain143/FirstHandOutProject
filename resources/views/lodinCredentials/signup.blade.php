@extends('lodinCredentials.RegisterLayout')
@section('main')
  <style>
    body {
      background-color: #f8f9fa;
    }

    .signup-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .signup-container h2 {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-signup {
      margin-top: 20px;
    }
  </style>
<div class="container mt-5">
    <div class="text-right">
        <a href="{{route('login')}}" class="btn btn-primary mt-2"><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
  <div class="signup-container">

    <h2 class="text-center"> Admin Sign Up</h2>
    <form action="{{route('Admin-store')}}">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter full name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email"  name="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="password">Confirm Password </label>
        <input type="password"  name="confirm_password" class="form-control" id="password" placeholder="Enter Confirm password">
      </div>
      <button type="submit" class="btn btn-primary btn-signup">Sign Up</button>
    </form>
  </div>
</div>
@endsection
