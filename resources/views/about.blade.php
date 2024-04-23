@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="secondary-img">
        <img 
        src="{{ asset('image/marketplace-banner.png') }}"
          alt="Main Img" />
        <div class="secondary-overlay">
          <h2>ABOUT US</h2>
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
              <a href="/marketplace"><i class="fa-regular fa-heart"></i></a>
              <a href="/profile"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
          </div>
        </ul>
      </nav>
      <div class="about-container">
        <div class="about-content">
          <h3>Curate with Love</h3>
          <h2>Creating  Uniqueness Since 2019</h2>
          <p>dsbcsdbvsdbvds v,msd jk bs,n ksdbvj sdkjvbuskrhgorej,fgvkwgoewhgvjldsnvkj
            uovbjkwbvurwvbewjvbrgvjbevkjruvohbrejvberkjbvjerbvkjbkjrbvkjrbgvkjerbkjerbjebkj
            bvkjerjvbekjbvrkjebvkjerbvkjbvkjrebvkjerbvkjebkjerbjlebvuwbvjwrbhvjsbvlwjubgvwbvkjbvo
            uwebvwjlebvowueubvowebvjlwngvwehfoewhewuhbrwrrirleworilovefihewbfkjbsdkhcsdkbvjhebviebvhkdbvd</p>
            <p>dsbcsdbvsdbvds v,msd jk bs,n ksdbvj sdkjvbuskrhgorej,fgvkwgoewhgvjldsnvkjuovbjkwbvurwvbewjvbrgvjbevkjruvohbr
              ejvberkjbvjerbvkjbkjrbvkjrbgvkjerbkje
              rbjebkjbvkjerjvbekjbvrkjebvkjerbvkjbvkjrebvkjerbvkjebkjerbjlebvuwbvjwrbhvjsbvlwjubgvw
              bvkjbvouwebvwjlebvowueubvowebvjlwngvwehfoewhewuhbrwrrirleworilovefihewbfkjbsdkhcsdkbvjhebviebvhkdbvd</p>
        </div>
        <div class="about-content">
        <h2>You can shop us </h2>
        <div class="wrap">
          <div class="box">
            <img
              class="box-image"
              src="{{ asset('image/card1.png') }}"
              alt="Card1"
            />
            <div class="title-flex">
              <h4 class="box-title">BUILD A BOX</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="{{ asset('image/card2.png') }}"
              alt="Card2"
            />
            <div class="title-flex">
              <h4 class="box-title">READY TO SHIP</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="{{ asset('image/card3.png') }}"
              alt="Card3"
            />
            <div class="title-flex">
              <h4 class="box-title">MARKETPLACE</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="{{ asset('image/card4.png') }}"
              alt="Card4"
            />
            <div class="title-flex">
              <h4 class="box-title">COORPORATE ORDER</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="holiday-banner">
        <img src="{{ asset('image/marketplace-banner.png') }}"alt="Banner Image" />
        <div class="overlay-text">
          <h2>Our Team</h2>
        </div>
      </div>
      <div class="team-content">

      <div class="team-container">
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/founder.png') }}"
              alt="Card1"
            />
            <div class="title-flex">
              <h4 class="box-title">Founder</h4>
              <h5>Rashi Rajbhandari</h5>  

            </div>
          </div>
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/creative-head.png') }}"
              alt="Card2"
            />
            <div class="title-flex">
              <h4 class="box-title">Creative Head</h4>
            <h5>Stuti Rajbhandari</h5>  
            </div>
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
   
    </div>
@endsection
