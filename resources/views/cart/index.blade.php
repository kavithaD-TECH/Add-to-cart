@extends('layouts.app')
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="aura.html">AURA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">PAGES</a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="#">About</a></li>
           <li><a class="dropdown-item" href="#">Cart</a></li>
           <li><a class="dropdown-item" href="#">wishlist</a></li>
           <li><a class="dropdown-item" href="#">checkout</a></li>
           <li><a class="dropdown-item" href="#">contact</a></li>
           <li><a class="dropdown-item" href="#">FAQs</a></li>
            <li><a class="dropdown-item" href="#">Account</a></li>
           <li><a class="dropdown-item" href="#">Thankyou</a></li>
           <li><a class="dropdown-item" href="#">Error 404</a></li>
           <li><a class="dropdown-item" href="#">styles</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">SHOP</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">shop</a></li>
            <li><a class="dropdown-item" href="#">single post</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">BLOG</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">blog</a></li>
            <li><a class="dropdown-item" href="#">single product</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
        <li class="nav-item"><a class="nav-link fw-bold text-decoration-underline" href="#">GET PRO</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i></a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-heart"></i></a></li>
       <li class="nav-item position-relative">
    <a class="nav-link" href="{{ route('cart.list') }}">
        <i class="bi bi-cart"></i>
    </a>
    @php 
    $cartCount = \App\Models\Cart::count(); 
    @endphp
    <span class="badge bg-danger position-absolute top-0 start-100 translate-middle">
        {{ $cartCount }}
    </span>
</li>

        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-search"></i></a></li>

        
    {{-- LOGOUT BUTTON --}}
    @auth
    <li class="nav-item">
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm ms-3">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>
    </li>
    @endauth
      </ul>
    </div>
  </div>
</nav>


<!-- New Arrivals Section -->
<section class="new-arrivals py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-title">NEW ARRIVALS</h2>
      <p class="text-muted">Browse our brand new collections</p>
    </div>

    <div class="row g-4">

      <!-- Product 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item1.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 1) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product One</h6>
            <p class="product-price">$40.00</p>
          </div>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item2.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 2) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Two</h6>
            <p class="product-price">$50.00</p>
          </div>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item3.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 3) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Three</h6>
            <p class="product-price">$60.00</p>
          </div>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item4.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 4) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Four</h6>
            <p class="product-price">$45.00</p>
          </div>
        </div>
      </div>

      <!-- Product 5 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item5.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 5) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Five</h6>
            <p class="product-price">$55.00</p>
          </div>
        </div>
      </div>

      <!-- Product 6 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item6.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 6) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Six</h6>
            <p class="product-price">$35.00</p>
          </div>
        </div>
      </div>

      <!-- Product 7 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item7.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 7) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Seven</h6>
            <p class="product-price">$65.00</p>
          </div>
        </div>
      </div>

      <!-- Product 8 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="product-card position-relative">
          <img src="{{ asset('images/product-item8.jpg') }}" class="img-fluid product-img" alt="Product">
          <div class="product-overlay">
            <div class="overlay-buttons">
              <form action="{{ route('add.to.cart', 8) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Add to Cart</button>
              </form>
            </div>
          </div>
          <div class="text-center mt-3">
            <h6 class="product-name">Product Eight</h6>
            <p class="product-price">$48.00</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<footer class="footer-area py-5" style="background-color:#5b0e18;">
  <div class="container">

    <div class="row gy-4">

      <!-- LEFT BRAND AREA -->
      <div class="col-lg-3 col-md-6">
        <h2 class="footer-logo">AURA</h2>
        <p class="footer-text">Find and Define Your Perfect Beauty</p>

        <div class="footer-social d-flex gap-3 mt-3">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">QUICK LINKS</h5>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Offer</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>

      <!-- ABOUT -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">ABOUT</h5>
        <ul class="footer-links">
          <li><a href="#">How It Work</a></li>
          <li><a href="#">Our Packages</a></li>
          <li><a href="#">Promotions</a></li>
          <li><a href="#">Refer A Friend</a></li>
        </ul>
      </div>

      <!-- SERVICES -->
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">SERVICES</h5>
        <ul class="footer-links">
          <li><a href="#">Payments</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Product Returns</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Checkout</a></li>
          <li><a href="#">Other Issues</a></li>
        </ul>
      </div>

      <!-- HELP CENTER -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">HELP CENTER</h5>
        <ul class="footer-links">
          <li><a href="#">Payments</a></li>
          <li><a href="#">Shipping</a></li>
          <li><a href="#">Product Returns</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Checkout</a></li>
          <li><a href="#">Other Issues</a></li>
        </ul>
      </div>

    </div>

    <hr class="border-light mt-4">

    <!-- BOTTOM BAR -->
    <div class="text-center text-light small mt-3">
      © 2025 AURA. All rights reserved.
    </div>

  </div>
</footer>

@endsection