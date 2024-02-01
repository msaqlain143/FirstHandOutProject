<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/images/logo.png" type="image">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .flip-card {
            background-color: transparent;
            perspective: 1000px;
        }

        .flip-card-inner {
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            /* width: 100%;
              height: 100%; */
            position: absolute;
            backface-visibility: hidden;
            /* display: flex; */
            align-items: center;
            justify-content: center;
            color: rgb(49, 32, 32);
            font-size: 15px;
            border: 1px solid #ccc;
        }

        .flip-card-front {
            background-color: #3498db;
        }

        .flip-card-back {
            background-color: #e74c3c;
            transform: rotateY(180deg);
        }

        /* Add your CSS styles for tabs and cards here */
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tab-button {
            background: transparent;
            color: #007236;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            margin-right: 10px;
            text-decoration: none;
            position: relative;
        }

        .tab-button::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #007236;
            transform: scaleX(0);
            transform-origin: right center;
            transition: transform 0.3s ease;
        }

        .tab-button.active::before {
            transform: scaleX(1);
            transform-origin: left center;
        }

        .isotope-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: #f9f9f9;
        }
        .navbar-nav li:hover{
            font-size: 23px;
            text-decoration: underline;
        }
        </style>
</head>

<body>
    {{-- navbar --}}
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
                <ul class="navbar-nav mr-auto align-items-center ">
                    <li class="nav-item active ">
                        <a class="nav-link mr-5 text-white " href="{{ route('web-home') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item mr-5 ">
                        <a class="nav-link text-white" href="{{ route('home-services') }}">Services</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="{{ route('home-contact') }}">Contact</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="{{ route('posts-update') }}">Posts</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="{{ route('news-update') }}">News</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link text-white" href="{{ route('jobs-update') }}">jobs</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- slider --}}
    <div class="container mt-2 ">
        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="/images/tech3.jpeg" class="w-md-50 " alt="HomeTown" width="1200" height="550">
                    <div class="carousel-caption">
                        <h2><b>Global Village</b></h2>
                        <p>Welcome to World Of Technology !</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/images/tech2.jpeg" alt="Mountains" width="1200" height="550">
                    <div class="carousel-caption">
                        <h2><b>AI</b></h2>
                        <p>World, Of Artificial Intellegence !</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/images/tech1.jpeg" alt="Glaicers" width="1200" height="550">
                    <div class="carousel-caption ">
                        <h2>Robotics</h2>
                        <p class="">New Emerging Tech in the Field Science !</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    {{-- our mission --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading mt-3" style="text-align: center;color:#3498db">
                    <h2 class=" m-5">Our Missions</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="/images/mypic.JPG" class="img-thumbnail" width="300" height="300">
                    </div>

                    <div class="col-md-6 " style="margin-top: 10%">
                        <h3 class="mb-2 text-success">About</h3>
                        <p class="text-justify">The Department of Information Technology Gilgit-Baltistan envisions
                            improving citizens’ quality of life and economic well-being by ensuring the availability of
                            accessible, affordable, reliable, universal, and high-quality ICT services in
                            Gilgit-Baltistan. By doing so, we intend to develop a competitive technology sector, and an
                            efficient digital governance framework, that will lead to an increase in the well being of
                            the people of Gilgit-Baltistan particularly and Pakistan in general.</p>
                        <div class="clearfix">
                            <h3 class="text-right">
                                <span class="slab"></span>
                                Muhammad Saqlain Sherliyat
                                <!-- Muhammad Azam Khan --><br>
                                <small class="text-success">(CEO IT , Gilgit-Baltistan)</small>
                            </h3>

                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>
    {{-- who we are? --}}
    <div class="introduction mt-4">
        <h2 class="text-center text-primary mt-4">Who We Are?</h2>
        <p class="site-title  p-3 m-2"><b>Creating New Knowledge And leading Scientists</b> <br><br> The Faculty of
            Science
            comprises <span class="text-success">thirteen Departments</span> , namely: <span class="text-primary"> Academy of Computer Science and Software Engineering; Applied
            Chemistry; App​​​lied Physics and Engineering Mathematics;
            Biochemistry; Biotechnology and Food Technology; Botany and Plant Biotechnology; Chemistry; Geography,
            Environmental Management & Energy Studies; Geology; Physics; Pure and Applied Mathematics; Statistics;
            Zoology</span>. Non-academic units housed in
            the Faculty include SPECTRUM (an Analytical Research Facility), the Faculty's Workshop and the Glass Blowing
            Unit In addition the Faculty has a regular Newsletter and is also involved in Community and Outreach
            Programmes<br><br> We offer
            excellent bursaries for top achievers in Science. Visit the UJ Winter School Science Workshops</p><br>
    </div>
    {{-- social media --}}
    <div class="container">
        <div class="row">
            <article class="col-md-4 col-lg-3">
                <div class="card-content">
                    <a class="spectrum-a" href="{{ route('Social-Media') }}"><img class="spectrum1"
                            src="/images/socialmedia.jpeg" alt="meow">
                        <h4 class="spectrum-h2">Social Media Marketing</h4>
                        <p>Visit our world-class analytical facility </p>
                    </a>
                </div>
                <!-- .card-content -->
            </article>
            <!-- .card -->
            <article class="col-md-4 col-lg-3">
                <div class="card-content">
                    <a href="{{ route('Data-Science') }}"><img class="spectrum1" src="/images/dataScience.jpeg"
                            alt="meow">
                        <h4 class="spectrum-h2">Data Science</h4>
                        <p>Visit our world-class analytical facility </p>
                    </a>
                </div>
                <!-- .card-content -->
                </a>
            </article>
            <!-- .card -->

            <article class="col-md-4 col-lg-3">
                <div class="card-content">
                    <a href=" {{ route('computer-science') }}"><img class="spectrum1"
                            src="/images/ComputerScience.jpeg" alt="meow">
                        <h4 class="spectrum-h2">Computer Science Centre</h4>
                        <p>Visit our world-class analytical facility </p>
                    </a>
                </div>
                <!-- .card-content -->
                </a>
            </article>
            <!-- .card -->

            <article class="col-md-4 col-lg-3">
                <div class="card-content">
                    <a href="{{ route('Machine-learing') }}"><img class="spectrum1"
                            src="/images/machineLearning.jpeg" alt="meow">
                        <h4 class="spectrum-h2">Machine Learning</h4>
                        <p>Visit our world-class analytical facility</p>
                    </a>
                </div>
                <!-- .card-content -->
                </a>
            </article>
            <!-- .card -->

        </div>
    </div>
    {{-- our faculty --}}
    <main class="mt-4">
        <h2 class="text-center text-primary m-4">Our Faculty </h2>
        <div class="card-group ">
            <div class="card card-primary text-center ">
                <img class="card-img-top" src="https://static3.avast.com/10001215/web/i/index2/for-home.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <div class="badge badge-primary badge-sm">Asst Prof Ali </div>
                    <div class="card-title">Personal online protection everywhere you go</div>
                    <p class="card-text">We protect your privacy and keep you safe online with Premium Security and our
                        Virtual Private Network (VPN) that safeguards your personal data.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-outline-secondary btn-icon-right">
                        <span>More Details
                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                height="24">
                        </span>
                    </a>
                </div>
            </div>
            <div class="card card-primary text-center">
                <img class="card-img-top" src="https://static3.avast.com/10001215/web/i/index2/for-partners.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <div class="badge badge-primary badge-sm">lecturer Fatima Naqvi</div>
                    <div class="card-title">Simple solutions for business’s biggest security problems</div>
                    <p class="card-text">We deliver complete endpoint and network security solutions designed for small
                        and midsize businesses & IT service providers.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-outline-secondary btn-icon-right">
                        <span>More Details
                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                height="24">
                        </span>
                    </a>
                </div>
            </div>
            <div class="card card-primary text-center">
                <img class="card-img-top" src="https://static3.avast.com/10001215/web/i/index2/for-business.jpg"
                    alt="Card image cap">
                <div class="card-body">
                    <div class="badge badge-primary badge-sm">Prof Muhammad Khan</div>
                    <div class="card-title">Protecting the customers of global operators</div>
                    <p class="card-text">We partner with the world’s leading mobile and broadband network operators to
                        offer security, privacy, and digital parenting solutions.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-outline-secondary btn-icon-right">
                        <span>More Details
                            <img src="https://static3.avast.com/1/web/i/v2/components/arrow-m-right-orange.png"
                                height="24">
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    {{-- Our Products --}}

    <div class="container mt-5" style="margin-top: 70%; margin-bottom: 20%;font-size:25px ">
        <h2 class="text-center  text-primary p-3 ">Our Products</h2>
        <div class="row">

            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/images/webDev.jpeg" alt="Walnut" width="200" height="200">
                        </div>
                        <div class="flip-card-back p-3">
                            <h2>Web Development </h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                                praesentium..
                            </p>
                            <a href=""><button class="btn btn-primary">More Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/images/dataBase.jpeg" alt="" width="200" height="200">
                        </div>
                        <div class="flip-card-back p-3">
                            <h2>DataBase Management</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                                praesentium....
                            </p>
                            <a href=""><button class="btn btn-primary">More Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/images/mobileApp.jpeg" alt="" width="200" height="200">
                        </div>
                        <div class="flip-card-back p-3">
                            <h2>Mobile App Development</h2>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium,
                                praesentium....
                            </p>
                            <a href=""><button class="btn btn-primary">More Details</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Infrastructure --}}
    <div class="container-fluid">
        <h2 class="text-center text-primary">Our Infrastructure</h2>
        <section class="section-stat m-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="icon-section text-center">
                            <div class="bg-rotate"><i class="fa fa-university fa-3x"></i></div>
                            <h4 class="icon-section-title"><span>02</span> Campuses</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="icon-section text-center">
                            <div class="bg-rotate"><i class="fa fa-building-o fa-3x"></i></div>
                            <h4 class="icon-section-title"><span>5+</span> Departments</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="icon-section text-center">
                            <div class="bg-rotate"><i class="fa fa-sitemap fa-3x"></i></div>
                            <h4 class="icon-section-title"><span>10+</span> Programs</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="icon-section text-center">
                            <div class="bg-rotate"><i class="fa fa-users fa-3x"></i></div>
                            <h4 class="icon-section-title"><span>100+</span> Students</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- top stories / who we are --}}
    <div class="container-fluid">
        <h2 class="text-center text-primary">Stories and Trending </h2>
        <div class="tabs">
            <button class="tab-button active" data-filter=".Type1">BUDGET</button>
            <button class="tab-button" data-filter=".Type2">WHO WE ARE</button>
            <button class="tab-button" data-filter=".Type3">NOTIFICATIONS & TENDERS</button>
            <!-- Add more tab buttons as needed -->
        </div>
        <div class="isotope-grid">
            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type1">
                <a href="../Budget/BudgetGlance">
                    <div class="initiatives-item su-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Budget at a glance</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">Budget at a Glance explains the gist of all broad aggregates and
                                estimates in a form easier for readers to comprehend.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type1">
                <a href="../Budget/BudgetBooks">
                    <div class="initiatives-item su-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Budget Books</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">A government’s budget book shows financial accounts of the
                                previous year along with revised estimates for the current year</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type1">
                <a href="../Budget/SalientFeatures">
                    <div class="initiatives-item su-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Citizen Budget</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">Citizen Budget of annual budget prepared by finance department
                                for the current fiscal year</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type2">
                <a href="../Home/About">
                    <div class="initiatives-item rs-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>About Us</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">Details related to the structure, functions, team and
                                responsibilities of the finance department, government of sindh.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type2">
                <a href="../SpecializedUnits/Index">
                    <div class="initiatives-item rs-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Specialized Units</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">Specialized units established under finance department to better
                                serve the public by providing help and assistance to the department</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 col-md-6 isotope-item Type2">
                <a href="http://imufd-sindh.com">
                    <div class="initiatives-item rs-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Dashboards</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">Online tools and applications developed by finance department for
                                providing and analyzing fiscal and financial information</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4 isotope-item Type3">
                <a href="../Latest/Notifications">
                    <div class="initiatives-item cb-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Notifications</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">News and notifications issued by finance department.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4 isotope-item Type3">
                <a href="../Latest/TransferPosting">
                    <div class="initiatives-item cb-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Transfer Postings</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">All notifications related to on-going transfers in/out to finance
                                department.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4 isotope-item Type3">
                <a href="../Tenders/Index">
                    <div class="initiatives-item cb-item">
                        <div class="ini-title timeline-classic-item-title-small">
                            <h4>Tenders</h4>
                        </div>
                        <div class="ini-body">
                            <p class="small">All information related to tenders and related documents.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <footer class="footer mt-3 py-3 bg-success">
        <div class="container">
            <div class="row">
                <div class="pt-3 col-12 d-flex justify-content-center">
                    <div class="">
                        <img style="max-width:100px; -webkit-filter: drop-shadow(1px 1px 0 white)
                            drop-shadow(-1px -1px 0 white);
                filter: drop-shadow(1px 1px 0 white)
                    drop-shadow(-1px -1px 0 white);"
                            src="https://gbit.gov.pk/storage/images/zoEjIsm1siUNRfYTZpchU60RtXGkiL-metaZ2Jkb2Vsb2dvLnBuZw==-.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav justify-content-center">

                        <li class="">
                            <a class="nav-link f-links text-white"
                                href="{{route('web-home')}}">Downloads</a>
                        </li>
                        <li class="">
                            <a class="nav-link f-links text-white" href="{{route('web-home')}}">Jobs</a>
                        </li>
                        <li class="">
                            <a class="nav-link f-links text-white"
                                href="{{route('web-home')}}">Tenders</a>
                        </li>
                        <li class="">
                            <a class="nav-link f-links text-white"
                                href="{{route('web-home')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
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
        <div class="pt-4 text-center row ">
            <div class="col-lg-4 col-md-6 col-xsm-12 d-flex justify-content-center">
                <p class="text-center text-white">© 2023
                    GB <a style="color:blue; text-decoration:none;" target="_blank" href="{{route('web-home')}}">IT
                        Department</a> All rights reserved
                </p>
            </div>
            <div class="px-1 col-lg-4 col-md-6 col-xsm-12 d-flex justify-content-center align-items-center">
                <small class="text-white fa fa-phone-alt"></small>
                <a class="text-white text-decoration-none" href="tel:05811-960458">
                    &nbsp;05811-960458</a>
            </div>
            <div class="col-lg-4 col-md-6 col-xsm-12 d-flex justify-content-center">
                <span>
                    <a target="_blank" href="https://www.facebook.com/muhammadsaqlain.sherliyat"> <img
                            src="https://gbit.gov.pk/asset/images/facebook-icon.png" class="img-fluid"></a></span>
                <span>
                    <a target="_blank" href="https://x.com/mssherliyat9474?t=ztPEvHsuwy9J1V2UROsIFw&s=09"> <img
                            src="https://gbit.gov.pk/asset/images/twitter-icon.png" class="img-fluid"></a></span>

            </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script>
        $(document).ready(function() {
            var $grid = $('.isotope-grid').isotope({
                itemSelector: '.isotope-item',
                layoutMode: 'fitRows'
            });

            $('.tab-button').on('click', function() {
                $('.tab-button').removeClass('active');
                $(this).addClass('active');
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
        });
    </script>
</body>

</html>
