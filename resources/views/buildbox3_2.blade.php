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
        <div class="progress-line"></div>
        <div class="progress-container">
          <div class="steps">
            <div class="step" id="0"></div>
            <div class="step" id="1"></div>
            <div class="step" id="2"></div>
            <div class="step" id="3"></div>
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
          src="{{ asset('image/choose4.png') }}"
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
            <button type="submit">ADD TO CART</button>
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