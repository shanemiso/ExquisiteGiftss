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
        <h3>STEP 2 of 3</h3>
        <h1>CHOOSE YOUR ITEMS</h1>
      </div>
      <div class="item-container">
        <div class="layout">
          <div class="layout_item w-60">
            <img
            src="{{ asset('image/box1.png') }}" 
              style="width: 150px; height: 150px"
            />
          </div>

          <div class="layout_item w-40">
            <nav>
              <h3>BOX CONTENT</h3>
              <ul>
                <li>Gift Packaging Card and Hand Wrapping</li>
                <li class="fill">Current Packaging | Regular</li>
                <li>Box Subtotal:</li>
              </ul>
              <button class="checkout">COMPLETE BOX</button>
            </nav>
          </div>
        </div>
      </div>
      <div class="grid-container">
        <div>
          <img
            class="grid-item grid-item-1"
            src="assets/image/choose1.png"
            alt=""
          />
          <p>Mother's Day</p>

        </div>

        <div>
          <img
            class="grid-item grid-item-2"
            src="assets/image/choose5.png"
            alt=""
          />
          <p>Father's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-3"
            src="assets/image/choose1.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-4"
            src="assets/image/choose5.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-5"
            src="assets/image/choose2.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-6"
            src="assets/image/choose6.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-7"
            src="assets/image/choose2.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-8"
            src="assets/image/choose6.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-9"
            src="assets/image/choose3.png"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-10"
            src="assets/image/choose7.png"
            alt=""
          />
          <p>Father's Day</p>
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