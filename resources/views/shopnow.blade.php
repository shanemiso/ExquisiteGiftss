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
            <a href="/marketplace"><i class="fa-regular fa-heart"></i></a>
              <a href="/profile"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
          </div>
        </ul>
      </nav>
      <div class="content">
        <div class="shop-container">
          <div class="image">
            <img src="{{ asset('image/shopnow.png') }}"/>
          </div>
          <div class="text">
            <h3>MOTHER'S DAY</h3>
            <p>Rs.4000</p>
            <p>COLOR: Black Box</p>
            <form>
              <div class="row">
              <div class="form-group">
              <input
              type="number" value="1" min="0" max="99"
              class="quantity"
              />

            </div>

                <div class="form-group">
                  <input
                    type="text"
                    id="input1"
                    name="input1"
                    placeholder="Description"
                  />
                </div>
                <button>Add Ribbon</button>
                <button>Pick a card</button>

                <div class="form-group">
                  <input
                    type="text"
                    id="input1"
                    name="input1"
                    placeholder="To"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    id="input2"
                    name="input2"
                    placeholder="From"
                  />
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <input type="text" id="input3" name="input3" placeholder="" />
              </div>
              <button type="submit">ADD TO CART</button>
            </form>
          </div>
        </div>
        <div class="content">
          <h3>You might also like</h3>
          <div class="wrap">
            <div class="box">
              <img
                class="box-image"
                src="{{ asset('image/grid-img8.png') }}"                
                alt=""
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="{{ asset('image/grid-img1.png') }}"                
                alt=""
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="{{ asset('image/grid-img2.png') }}"                
                alt=""
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="{{ asset('image/grid-img3.png') }}"                
                alt=""
              />
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
