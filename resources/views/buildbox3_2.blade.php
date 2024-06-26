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
      <div class="content">
        <h3>STEP 3 of 3</h3>
        <h1>CHOOSE YOUR CARD</h1>
      </div>
      <div class="blog-card">
        <div class="meta">
          <img 
          src="{{ $_GET['image'] }}"
          class="photo" />
        </div>
        <div class="description">
          <form>
            <div class="row">
              <div class="form-group">
                <input
                  type="text"
                  id="input1"
                  name="input1"
                  placeholder="To:"
                />
              </div>
              <div class="form-group">
                <input
                  type="text"
                  id="input2"
                  name="input2"
                  placeholder="From:"
                />
              </div>
            </div>
            <div class="form-group">
              <input type="text" id="input3" name="input3" placeholder="" />
            </div>
            <a href="/box" type="submit">ADD TO CART</a>
          </form>
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