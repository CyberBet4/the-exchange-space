<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Exchangespace -  Cryptocurrency Swapper</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset("home/img/favicon.png")}} rel="icon">
  <link href={{ asset("home/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset("home/vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/boxicons/css/boxicons.min.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/remixicon/remixicon.css")}} rel="stylesheet">
  <link href={{ asset("home/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset("home/css/style.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: Exchangespace - v4.7.0
  * Template URL: https://bootstrapmade.com/Exchangespace-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href={{url('/')}}>Exchange<span>space</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="home/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href={{url('/#hero')}}>Home</a></li>
          <li><a class="nav-link scrollto" href="#hero">About</a></li>
          <li><a class="nav-link scrollto" href="#services">How it works</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      @auth
      <div class="d-flex">
        <a href={{route('dashboard')}} class="get-started-btn scrollto mr-3"> <i class="mdi mdi-profile"></i> {{ auth()->user()->name }}</a>
        <form action={{ route("logout")}} method="post">
          @csrf
          <button type="submit" class="get-started-btn scrollto ">Logout</button>
        </form>
        
      </div>

      @endauth

      @guest
        <div class="d-flex">
          <a href={{route('login')}} class="get-started-btn scrollto mr-3">Login</a>
          <a href={{route('register')}} class="get-started-btn scrollto ">Sign up</a>
        </div>      
      @endguest
      

    </div>
  </header><!-- End Header -->
