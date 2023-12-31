<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>ecommerce Website</title>
  </head>
  <body>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Order Online Or Call Us: (001) 2222-55555</p>
          <ul class="d-flex">
            <li><a href="#">About Us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
        <a href="/" class="logo"><h1>Dans</h1></a>

          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
            <a href="#terms" class="nav-link">Terms</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
            <li class="icons d-flex">
            <a href="#" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="{{ route('cart.index') }}" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">{{ count(session()->get('cart')) }}</span>
            </a>
          </li>
          </ul>

          <div class="icons d-flex">
            <a href="#" class="icon">
              <i class="bx bx-user"></i>
            </a>
            <div class="icon">
              <i class="bx bx-search"></i>
            </div>
            <div class="icon">
              <i class="bx bx-heart"></i>
              <span class="d-flex">0</span>
            </div>
            <a href="#" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex">0</span>
            </a>
          </div>

          <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
          </div>
        </div>
      </div>

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">New Inspiration 2020</span>
                  <h1 class="">NEW COLLECTION!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="#" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/banner.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>New Inspiration 2020</span>
                  <h1>THE PERFECT MATCH!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="#" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/hero-2.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    @yield('content')

    
    <!-- Contact -->
    <section class="section contact">
      <div class="row">
        <div class="col">
          <h2>EXCELLENT SUPPORT</h2>
          <p>We love our customers and they can reach us any time
          of day we will be at your service 24/7</p>
          <a href="" class="btn btn-1">Contact</a>
        </div>
        <div class="col">
          <form action="">
            <div>
              <input type="email" placeholder="Email Address">
            <a href="">Send</a>
            </div>
          </form>
        </div>
      </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="row">
          <div class="col d-flex">
            <h4>INFORMATION</h4>
            <a href="">About us</a>
            <a href="">Contact Us</a>
            <a href="">Term & Conditions</a>
            <a href="">Shipping Guide</a>
          </div>
          <div class="col d-flex">
            <h4>USEFUL LINK</h4>
            <a href="">Online Store</a>
            <a href="">Customer Services</a>
            <a href="">Promotion</a>
            <a href="">Top Brands</a>
          </div>
          <div class="col d-flex">
            <span><i class='bx bxl-facebook-square'></i></span>
            <span><i class='bx bxl-instagram-alt' ></i></span>
            <span><i class='bx bxl-github' ></i></span>
            <span><i class='bx bxl-twitter' ></i></span>
            <span><i class='bx bxl-pinterest' ></i></span>
          </div>
        </div>
      </footer>
  
  
    {{-- <!-- PopUp -->
    <div class="popup hide-popup">
      <div class="popup-content">
        <div class="popup-close">
          <i class='bx bx-x'></i>
        </div>
        <div class="popup-left">
          <div class="popup-img-container">
            <img class="popup-img" src="./images/popup.jpg" alt="popup">
          </div>
        </div>
        <div class="popup-right">
          <div class="right-content">
            <h1>Get Discount <span>50%</span> Off</h1>
            <p>Sign up to our newsletter and save 30% for you next purchase. No spam, we promise!
            </p>
            <form action="#">
              <input type="email" placeholder="Enter your email..." class="popup-form">
              <a href="#">Subscribe</a>
            </form>
          </div>
        </div>
      </div>
    </div> --}}
  
    </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
  </html>
  