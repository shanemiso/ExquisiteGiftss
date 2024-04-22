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
            <li><a href="/coorporate">COORPORATE GIFTS</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/marketplace">SHOP</a></li>
            <li><a href="/buildbox1">BUILD A BOX</a></li>
            <li><a href="/readytoship">READY TO SHIP</a></li>
            <div class="nav-icon">
              <a href="#"><i class="fa-regular fa-heart"></i></a>
              <a href="/profile"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
          </div>
        </ul>
      </nav>
      <div class="content">
        <h3>HI SHANE!</h3>
      </div>
      <div class="profile-container">
        <div class="section">
          <p>My Account</p>
          <a href="#">Log Out</a>
        </div>
        <div class="layout">
          <div class="layout_item w-50">
            <div class="newsletter">
              <img src="{{ asset('image/default-profile.jpg') }}"  />
            </div>
          </div>

          <div class="layout_item w-25">
            <nav>
              <h4>ACCOUNT DETAILS</h4>
              <ul></ul>
            </nav>
          </div>

          <div class="layout_item w-25">
            <nav>
              <h4>ORDER DETAILS</h4>
              <ul></ul>
            </nav>
          </div>
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