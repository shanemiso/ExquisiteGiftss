@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="secondary-img">
        <img 
        src="{{ asset('image/coorporate.png') }}"
          alt="Main Img" />
        <div class="secondary-overlay">
          <h2>Coorporate Gifting </h2>
        </div>
      </div>
      <nav class="navbar-transparent">
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>

          <!-- NAVIGATION MENUS -->
          <div class="menu">
          <div class="nav-logo">
              <a href="/"><img src="{{ asset('image/2-white.png') }}"/></a>
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
      <div class="about-container">
        <div class="about-content">
          <h2>Why ExquisiteGifts?</h2>
          <p>Exquisite Gifts is your ultimate destination for top-notch gifting experiences, whether you run a large enterprise or 
            a small business. Our concierge service extends our signature style and personal touch to cater to businesses of all sizes.
             We are committed to being your trusted partner for all gifting needs, providing personalized solutions that align perfectly with 
             your brand image and requirements. With a dedicated sales manager, a skilled production team, and a wide range of customization options, 
             we bring your gifting visions to life seamlessly and punctually.</p>
            <p>Expect nothing but the best from our expert gifting team, who will attentively listen to your preferences and requirements to ensure 
              a premium and hassle-free experience. We understand that flexibility is key, which is why we offer a diverse range of solutions spanning 
              different price points, presentations, and offerings. Our unmatched gifting presentation guarantees that each recipient is amazed and delighted 
              every single time they receive a gift from Exquisite Gifts.</p>
        </div>
        
        <div class="coororate-banner">
          <h4 class="coorporate-title">We are known for</h4>
          <div class="container-lg">
            <div class="card1">
              <h5>5</h5>
              <p>years of experience</p>
            </div>
            <div class="card1">
            <h5>Women</h5>
              <p>owned company</p>
            </div>
            <div class="card1">
            <h5>50+</h5>
              <p>Vendors</p>
            </div>
          </div>
        </div>

        <div class="team-container">
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/card1.png') }}"
              alt="Card1"
            />
            <div class="title-flex">
              <h5>Order Less than 50</h5>
              <button class="shop-btn">CHECK OUT</button>
            </div>
          </div>
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/card2.png') }}"
              alt="Card2"
            />
            <div class="title-flex">
              <h5>Coorporate Order</h5>
              <button class="shop-btn">CHECK OUT</button>
            </div>
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
@endsection
