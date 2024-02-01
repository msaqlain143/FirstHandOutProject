<!doctype html>
<html lang="en">

<head>
    <title>Data Science</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
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
                    <li class="nav-item active">
                        <a class="nav-link text-white mr-5" style="font-size: 23px"href="{{ route('web-home') }}">Home</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white  "style="font-size: 23px" href="{{ route('home-services') }}">Services</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" style="font-size: 23px"href="{{ route('home-contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-size: 23px"href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="text-right">
                    <a href="{{route('web-home')}}" class="btn btn-primary mt-2"><i class="fa fa-home" aria-hidden="true"></i></a>
                </div>
                <h2>Details Of Course :</h2>
                <div class="card p-4">
                    <p>Name : <b> Data Science</b></p>
                    <p>Description: <b>It is a multidisciplinary approach that combines principles and practices from the fields of mathematics, statistics, artificial intelligence, and computer engineering to analyze large amounts of data.
                    </b></p>
                    <p>Duration :<b> 6-months</b></p>
                    <img src="/images/dataScience.jpeg" alt="Data Science" class="rounded mx-auto d-block" width="50%">
                </div>
            </div>
        </div>
    </div>
<footer class="footer mt-3 py-3 bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('home-services') }}">
                    <h2>Products</h2>
                </a>
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
                <h2>Contact Us</h2>
                <p>5 main Street<br>City, Gilgit<br>Phone: (+92) 310-0000000<br>Email:
                    muhammadsaqlain.c@example.com</p>
            </div>
        </div>
    </div>
    <div class="container text-center ">
        <span class="text-light">© 2023 Muhammad Saqlain Sherliyat. All rights reserved.</span>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

</html>
