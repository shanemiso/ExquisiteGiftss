@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
    <nav class="navbar">
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>

          <!-- NAVIGATION MENUS -->
          <div class="menu">
          <div class="nav-logo">
              <a href="/"><img src="{{ asset('image/2.png') }}"/></a>
            </div>
            <li><a href="/coorporate">COORPORATE GIFTS</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/shopnow">SHOP</a></li>
            <li><a href="/buildbox1">BUILD A BOX</a></li>
            <li><a href="/readytoship">READY TO SHIP</a></li>
            <div class="nav-icon">
            <a href="/#favourites"><i class="fa-regular fa-heart"></i></a>
              <a href="/profile"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
          </div>
        </ul>
      </nav>
      <div class="content">
      <div class="progress-content">
        <div class="progress-line"></div>

        <div class="progress-container">
          <div class="steps">
            <div class="step-container">
              <div class="step" id="0"></div>
              <span>Step 1</span>
            </div>
            <div class="step-container">
              <div class="step" id="1"></div>
              <span>Step 2</span>
            </div>
            <div class="step-container">
              <div class="step" id="2"></div>
              <span>Step 3</span>
            </div>
            <div class="step-container">
              <div class="step" id="3"></div>
              <span>Done!</span>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="content">
        <h3>STEP 1 of 3</h3>
        <h1>CHOOSE YOUR BOX COLOR</h1>
      </div>
      <div class="card-container">
      <div class="first-box">
        <a href="/buildbox2?image={{ asset('image/box1.png') }}">
            <img src="{{ asset('image/box1.png') }}" />
        </a>
      </div>
      <div class="second-box">
        <a href="/buildbox2?image={{ asset('image/box2.png') }}">
            <img src="{{ asset('image/box2.png') }}" />
        </a>
      </div>
    </div>

      <div class="email-container">
      <div class="email-content">
        <p class="left-align">sign up for updates:</p>
        <input
          type="text"
          class="form-control custom-input"
          name="email"
          id="email"
          placeholder="email address"
        />
        <input type="submit" value="SUBMIT" class="submit-btn" />
        <span class="submitting"></span>
        <p class="align">by signing up you agree to our terms.</p>
      </div>
</div>
          
    </div>

   @endsection