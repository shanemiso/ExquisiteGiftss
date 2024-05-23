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
        <h3>STEP 2 of 3</h3>
        <h1>CHOOSE YOUR ITEMS</h1>
      </div>
      <div class="item-container">
        <div class="layout">
          <div class="layout_item w-60">
          <img src="{{ $_GET['image'] }}" style="width: 150px; height: 150px" />

          </div>

          <div class="layout_item w-40">
            <nav>
              <h3>BOX CONTENT</h3>
              <ul>
                <li>Gift Packaging Card and Hand Wrapping</li>
                <li class="fill">Current Packaging | Regular</li>
                <li>Box Subtotal:</li>
              </ul>
              <button class="checkout"><a href="/buildbox3">COMPLETE BOX</a></button>
            </nav>
          </div>
        </div>
      </div>
      <div class="grid-below">
        <div>
          <img
            class="grid-item grid-item-1"
            src="{{ asset('image/wine b1.jpg') }}"  onclick="toggleSelection('grid-item-1')"      
            alt=""
          />
          <p>Wine Bottle</p>

        </div>

        <div>
          <img
            class="grid-item grid-item-2" onclick="toggleSelection('grid-item-2')"  
            src="{{ asset('image/candle.jpg') }}"           
            alt=""
          />
          <p>Scented Candle</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-3"
            src="{{ asset('image/wine2.jpg') }}"         onclick="toggleSelection('grid-item-3')"    
            alt=""
          />
          <p>Wine Glass</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-4"
            src="{{ asset('image/candlee3.jpg') }}"      onclick="toggleSelection('grid-item-4')"       
            alt=""
          />
          <p>Candle</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-5"
            src="{{ asset('image/wine b2.jpg') }}"           onclick="toggleSelection('grid-item-5')"    
            alt=""
          />
          <p>Vintage Wine</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-6"
            src="{{ asset('image/candle2.jpg') }}"            onclick="toggleSelection('grid-item-6')"   
            alt=""
          />
          <p>Vanilla Candle</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-7"
            src="{{ asset('image/wine glass 1.jpg') }}"          onclick="toggleSelection('grid-item-7')"     
            alt=""
          />
          <p>Wine Glasses</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-8"
            src="{{ asset('image/wine4.jpg') }}"             onclick="toggleSelection('grid-item-8')"  
            alt=""
          />
          <p>Wine Glasses</p>
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
    
<script>
  function toggleSelection(className) {
    var element = document.querySelector('.' + className);
    if (element.classList.contains('selected')) {
      element.classList.remove('selected');
    } else {
      element.classList.add('selected');
    }
  }
</script>

@endsection