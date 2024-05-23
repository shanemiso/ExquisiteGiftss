@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
  
      <div class="secondary-img">
      <img src="{{ asset('image/marketplace-banner.png') }}" alt="Main Img" />
        <div class="secondary-overlay">
          <h2>READY TO SHIP</h2>
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
      <section class="app">
        <aside class="sidebar">
          <header>Menu</header>
          <nav class="sidebar-nav">
            <ul>
              <li>
                <form onsubmit="event.preventDefault();" role="search">
                  <label for="search">Search </label>
                  <input
                    id="search"
                    type="search"
                    placeholder="Search..."
                    autofocus
                    required
                  />
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
          <a href="/cart">
          <img
            class="grid-item grid-item-1"
            src="{{ asset('image/grid-img1.png') }}"
            alt=""
          /></a>
          <p>Fathers Day Box</p>

        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-2"
            src="{{ asset('image/grid-img2.png') }}"
            alt=""
          />
        </a>
          <p>Mother's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-3"
            src="{{ asset('image/grid-img3.png') }}"
            alt=""
          />
          </a>

          <p>Birthday Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-4"
            src="{{ asset('image/grid-img4.png') }}"
            alt=""
          />
          </a>

          <p>Mother's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-5"
            src="{{ asset('image/grid-img5.png') }}"
            alt=""
          />
          </a>

          <p>Christmas Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-6"
            src="{{ asset('image/grid-img6.png') }}"
            alt=""
          />
          </a>

          <p>Mother's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-7"
            src="{{ asset('image/grid-img7.png') }}"
            alt=""
          />
          </a>

          <p>Christmas Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-8"
            src="{{ asset('image/grid-img8.png') }}"
            alt=""
          />
          </a>

          <p> Father's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-9"
            src="{{ asset('image/grid-img1.png') }}"
            alt=""
          />
          </a>

          <p>Father's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-10"
            src="{{ asset('image/grid-img2.png') }}"
            alt=""
          />
          </a>

          <p>Gift for her Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-11"
            src="{{ asset('image/grid-img3.png') }}"
            alt=""
          />
          </a>

          <p>Pink Gift Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-12"
            src="{{ asset('image/grid-img4.png') }}"
            alt=""
          />
          </a>

          <p>Christmas Gift  Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-13"
            src="{{ asset('image/grid-img5.png') }}"
            alt=""
          />
          </a>

          <p>Christmas  Gift Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-14"
            src="{{ asset('image/grid-img6.png') }}"
            alt=""
          />
          </a>

          <p>Happy Diwali Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-15"
            src="{{ asset('image/grid-img7.png') }}"
            alt=""
          />
          </a>

          <p>Father's Day Box</p>
        </div>
        <div>
        <a href="/cart">

          <img
            class="grid-item grid-item-16"
            src="{{ asset('image/grid-img8.png') }}"
            alt=""
          />
        </a>
          <p>Mother's Day Box</p>
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
