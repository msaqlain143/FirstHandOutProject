<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" style="font-size: 23px" href="{{route('web-home')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link active text-white" style="font-size: 23px" href="{{route('home-services')}}">Services</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" style="font-size: 23px" href="{{route('home-contact')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" style="font-size: 23px" href="{{route('login')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/images/webDev.jpeg" alt="Walnut" width="200" height="200">
                </div>
                <div class="flip-card-back">
                    <h2>Web Development</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                    praesentium..
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="/images/dataBase.jpeg" alt=""  width="200" height="200">
                </div>
                <div class="flip-card-back">
                    <h2>DataBase Management</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                      praesentium....
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <img src="/images/mobileApp.jpeg" alt=""  width="200" height="200">
                </div>
                <div class="flip-card-back">
                    <h2>Mobile App Development</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                      praesentium....
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <footer class="footer mt-3 py-3 bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('home-services')}}"><h4>Products</h4></a>
                    <ul class="list-unstyled">
                        <li>Product 1</li>
                        <li>Product 2</li>
                        <li>Product 3</li>
                      </ul>
                </div>
                <div class="col-md-4">
                    <a href="{{route('home-services')}}"><h4>Services</h4></a>
                    <ul class="list-unstyled">
                        <li>Service 1</li>
                        <li>Service 2</li>
                        <li>Service 3</li>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
