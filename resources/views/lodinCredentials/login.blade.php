
 @extends('lodinCredentials.RegisterLayout')
 @section('main')
    <div class="container mt-5">
        <div class="login-container">
            <h2>Login</h2>
            <form action="{{route('user-verifiaction')}}">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="email"  name="email" class="form-control" id="name" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary btn-login">Login</button>
                <a href="{{route('signup-category')}}"><button type="button" class="btn btn-primary btn-signup mt-3">Signup</button></a>
            </form>
        </div>
    </div>
@endsection
