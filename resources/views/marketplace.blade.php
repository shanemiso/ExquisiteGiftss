@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="secondary-img">
        <img src="{{ asset('image/marketplace-banner.png') }}" alt="Main Img" />
        <div class="secondary-overlay">
          <h2>MARKETPLACE</h2>
        </div>
      </div>
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
      <section class="app">
        <aside class="sidebar">
          <header>Menu</header>
          <nav class="sidebar-nav">
            <ul>
              <li>
                <form onsubmit="event.preventDefault();" role="search">
                  <label for="search">Search for stuff</label>
                  <input
                    id="search"
                    type="search"
                    placeholder="Search..."
                    autofocus
                    required
                  />
                  <button type="submit">Go</button>
                </form>
              </li>
              <li>
                <a href="#"><i class="ion-bag"></i> <span>Shop</span></a>
              </li>
              <li>
                <a href="#"
                  ><i class="ion-ios-settings"></i>
                  <span class="">Controls</span></a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="ion-ios-briefcase-outline"></i>
                  <span class="">Folio</span></a
                >
              </li>
            </ul>
          </nav>
        </aside>
      </section>
      <div class="grid-container">
        <div>
          <img
            class="grid-item grid-item-1"
            src="{{ asset('image/choose1.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-2"
            src="{{ asset('image/choose5.png') }}"            alt=""
          />
          <p>Father's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-3"
            src="{{ asset('image/choose1.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-4"
            src="{{ asset('image/choose5.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-5"
            src="{{ asset('image/choose2.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-6"
            src="{{ asset('image/choose6.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-7"
            src="{{ asset('image/choose2.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-8"
            src="{{ asset('image/choose6.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-9"
            src="{{ asset('image/choose3.png') }}"            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-10"
            src="{{ asset('image/choose7.png') }}"              alt=""
          />
          <p>Father's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-11"
            src="{{ asset('image/choose3.png') }}"              alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-12"
            src="{{ asset('image/choose7.png') }}"              alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-13"
            src="{{ asset('image/choose4.png') }}"              alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-14"
            src="{{ asset('image/choose8.png') }}"              alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-15"
            src="{{ asset('image/choose4.png') }}"              alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-16"
            src="{{ asset('image/choose8.png') }}"              alt=""
          />
          <p>Mother's Day</p>
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