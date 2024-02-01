<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#">
            <img src="/images/logo.png" alt="Logo" width="50">
        </a>
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white " style="font-size: 23px" href="{{ route('web-home') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white "style="font-size: 23px" href="{{ route('home-services') }}">Services</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white"style="font-size: 23px" href="{{ route('home-contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" style="font-size: 23px"href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        @yield('main')
    </div>
    <footer class="footer mt-3 py-3 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('home-services')}}"><h4>Products</h4></a>
                    <ul class="list-unstyled">
                        <li>Web Development</li>
                        <li>Database Management</li>
                        <li>Mobile App Development</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('home-services') }}">
                        <h2>Services</h2>
                    </a>
                    <ul class="list-unstyled">
                        <li>Machine Learning</li>
                        <li>Data Science</li>
                        <li>Artificial Intellegence</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>5 main Street<br>City, Gilgit<br>Phone: (+92) 310-0000000<br>Email: muhammadsaqlain.c@example.com</p>
                </div>
            </div>
        </div>
        <div class="container text-center ">
            <span class="text-light">© 2023 Muhammad Saqlain Sherliyat. All rights reserved.</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

