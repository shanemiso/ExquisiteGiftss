@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="image-container">
        <img class="" src="{{ asset('image/Group 69.png') }}" alt="">

        <div class="main-overlay">
          <h2>EXQUISITE</h2>
          <h2>GIFTS</h2>
          <p>Changing the way of gifting.</p>
          <p>Curated with Love.</p>
          <div class="shop-btn"><a href="marketplace.html">SHOP NOW</a></div>
        </div>
      </div>
      <div class="main-content">
        <h2>WELCOME TO</h2>
        <h1>EXQUISITE GIFTS</h1>
      </div>
      <nav class="navbar">
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>

          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="#">COORPORATE GIFTS</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="marketplace.html">SHOP</a></li>
            <li><a href="buildbox1.html">BUILD A BOX</a></li>
            <li><a href="readytoship.html">READY TO SHIP</a></li>
            <div class="nav-icon">
              <a href="#"><i class="fa-regular fa-heart"></i></a>
              <a href="profile.html"><i class="fa-regular fa-user"></i></a>
              <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
          </div>
        </ul>
      </nav>
      <div class="breadcrumb flat">
        <a href="buildbox1.html">BUILD A BOX</a>
        <a href="readytoship.html">READY TO SHIP</a>
        <a href="marketplace.html">MARKETPLACE</a>
      </div>
      <div class="content">
        <h2>WHAT WE DO?</h2>
        <div class="wrap">
          <div class="box">
            <img
              class="box-image"
              src="assets/image/card1.png"
              alt="Card1"
            />
            <div class="title-flex">
              <h4 class="box-title">BUILD A BOX</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="assets/image/card2.png"
              alt="Card2"
            />
            <div class="title-flex">
              <h4 class="box-title">READY TO SHIP</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="assets/image/card3.png"
              alt="Card3"
            />
            <div class="title-flex">
              <h4 class="box-title">MARKETPLACE</h4>
            </div>
          </div>
          <div class="box">
            <img
              class="box-image"
              src="assets/image/card4.png"
              alt="Card4"
            />
            <div class="title-flex">
              <h4 class="box-title">COORPORATE ORDER</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <h2>OUR FAVOURITES</h2>
        <div class="gallery">
          <div class="gallery__item gallery__item--1">
            <img
              src="assets/image/grid-img1.png"
              alt="Gallery image 1"
              class="gallery__img"
            />
            <div class="centered">Centered</div>

          </div>
          <div class="gallery__item gallery__item--2">
            <img
              src="assets/image/grid-img2.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--3">
            <img
              src="assets/image/grid-img3.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--4">
            <img
              src="assets/image/grid-img4.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--5">
            <img
              src="assets/image/grid-img5.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--6">
            <img
              src="assets/image/grid-img6.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--7">
            <img
              src="assets/image/grid-img7.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--8">
            <img
              src="assets/image/grid-img8.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
        </div>
        <div class="gallery-2">
          <div class="gallery__item gallery__item--1">
            <img
              src="assets/image/grid-img1.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--2">
            <img
              src="assets/image/grid-img3.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--3">
            <img
              src="assets/image/grid-img4.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--4">
            <img
              src="assets/image/grid-img7.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--5">
            <img
              src="assets/image/grid-img5.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
        </div>
        <div class="gallery-3">
          <div class="gallery__item gallery__item--1">
            <img
              src="assets/image/grid-img1.png"
              alt="Gallery image 1"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--2">
            <img
              src="assets/image/grid-img2.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--3">
            <img
              src="assets/image/grid-img3.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--4">
            <img
              src="assets/image/grid-img4.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--5">
            <img
              src="assets/image/grid-img5.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--6">
            <img
              src="assets/image/grid-img6.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--7">
            <img
              src="assets/image/grid-img7.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
          <div class="gallery__item gallery__item--8">
            <img
              src="assets/image/grid-img8.png"
              alt="Gallery image 2"
              class="gallery__img"
            />
          </div>
        </div>
        <div class="icon-xl"><i class="fa-solid fa-plus"></i></div>
      </div>

      <div class="popup-container">
        <a><i class="fas fa-times close-btn"></i></a>

        <div class="images">
          <img src="assets/image/card1.png" />
        </div>
        <div class="product">
          <div class="images">
            <img
              src="assets/image/card1.png"
              style="width: 90px; height: 90px"
            />
          </div>
          <h2>Rs.4000</h2>
          <p class="desc">Father's day</p>
          <div class="buttons">
            <button class="add">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="holiday-banner">
        <img src="assets/image/holiday-banner.png" alt="Banner Image" />
        <div class="overlay-text">
          <h2>HOLIDAY SPECIAL</h2>
          <div class="shop-btn"><a href="marketplace.html">SHOP NOW</a></div>
        </div>
      </div>
      <div class="content">
        <h2>GIFT GUIDES</h2>
        <div class="wrapper">
          <ul class="carousel">
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img3.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img4.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img6.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img3.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img4.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                  src="assets/image/grid-img6.png"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
          </ul>
        </div>

        <div class="pagination"></div>
        <div class="shop-btn"><a href="marketplace.html">SHOP NOW</a></div>
      </div>
      <div class="marketplace-banner">
        <img src="assets/image/marketplace-banner.png" alt="Banner Image" />
        <div class="overlay-text">
          <h2>MARKETPLACE</h2>
          <div class="shop-btn"><a href="marketplace.html">SHOP NOW</a></div>
        </div>
      </div>
      <div class="card-container">
        <div class="image">
          <img src="assets/image/single-card.png" />
        </div>
        <div class="text">
          <h2>COORPORATE</h2>
          <p>
            Sedsfghbvcfdrtfyghjdfghjknbjkjrstrtfgyhuijqwertyuioasdfghjkzxc
            vbnmasdfghjkaarthikbjhfjdjfgvmgjfjfhbmjuyulitjtydrfcgh
            sdfghjklxcvbnmk,dfghjkiqwertyuiosdfghjkvbnmdfghjkertyuiodsfgh
            jkcvbnmdfghjertyuidfghjcvbnmghnjfg.
          </p>
          <p>
            Sedsfghbvcfdrtfyghjdfghjknbjkjrstrtfgyhuijqwertyuioasdfghjkzxc
            vbnmasdfghjkaarthikbjhfjdjfgvmgjfjfhbmjuyulitjtydrfcgh
            sdfghjklxcvbnmk,dfghjkiqwertyuiosdfghjkvbnmdfghjkertyuiodsfgh
            jkcvbnmdfghjertyuidfghjcvbnmghnjfg.
          </p>
          <div class="shop-btn"><a href="marketplace.html">SHOP NOW</a></div>
        </div>
      </div>
      <div class="content">
        <div class="about-us">
          <div class="overlay__about">
            <h2>ABOUT US</h2>
          </div>
          <p class="about-text">
            Sedsfghbvcfdrtfyghjdfghjknbjkjrstrtfgyhuijqwertyuioasdfghjkzxcvbnmasdfghjkaa
            sdfghjklxcvbnmkhhhhhhhhhhhhhhhhhhhhhhjkkkkkkkkkkkkkkkkkkkkkvc
          </p>
          <div class="overlay__item">
            <img
              src="assets/image/overlay-img.png"
              alt="about image"
              class="overlay__img"
            />
          </div>
        </div>
      </div>

      <div class="content">
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

      <footer class="footer">
        <div class="footer-container">
          <div class="footer_inner">
            <div class="c-footer">
              <div class="layout">
                <div class="layout_item w-50">
                  <div class="newsletter">
                    <h3>ABOUT US</h3>
                    <p>
                      EXQUISITEGIFTS iasjbjsshcAzsxdfgbhnjjcscdcfgvbiajkszkjsn
                    </p>
                    <p>
                      jkkmishnlovejnbjazjrthiknjksasdfghjklxcxdcfvbgnm.asdfghjkerrtyuivbnm
                    </p>
                  </div>
                </div>

                <div class="layout_item w-25">
                  <nav>
                    <h3>HELPFUL LINE</h3>
                    <ul>
                      <li>
                        <a href="/collections/all" class="c-link">FAQ</a>
                      </li>

                      <li>
                        <a href="/pages/about-us" class="c-link">ABOUT</a>
                      </li>

                      <li>
                        <a href="/blogs/community" class="c-link">CAREERS</a>
                      </li>
                      <li>
                        <a href="#" class="c-link">CONTACT</a>
                      </li>
                      <li>
                        <a href="#" class="c-link">BLOG</a>
                      </li>
                    </ul>
                  </nav>
                </div>

                <div class="layout_item w-25">
                  <nav>
                    <h3>MENU</h3>
                    <ul>
                      <li>
                        <a href="/pages/shipping-returns" class="c-link"
                          >SHOP BY OCCASION</a
                        >
                      </li>

                      <li>
                        <a href="/pages/help" class="c-link">BUILD A BOX</a>
                      </li>

                      <li>
                        <a href="/pages/terms-conditions" class="c-link"
                          >SHOP</a
                        >
                      </li>

                      <li>
                        <a href="/pages/privacy-policy" class="c-link">ABOUT</a>
                      </li>

                      <li>
                        <a href="/pages/contact" class="c-link"
                          >CORPORATING GIFTING</a
                        >
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="layout c-2">
                <div class="layout_item w-50"></div>
                <div class="layout_item w-25">
                  <ul class="flex">
                    <li>
                      <a href="#">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="32"
                          height="32"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="32"
                          height="32"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"
                          />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24"
                          width="32"
                          height="32"
                        >
                          <path fill="none" d="M0 0h24v24H0z" />
                          <path
                            d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_copyright">
            <p>&copy; EXQUISITEGIFTS 2024 TERMS OF SERVICE REFUND POLICY</p>
          </div>
        </div>
      </footer>
    </div>


  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const carousel = document.querySelector(".carousel");
      const pagination = document.querySelector(".pagination");

      const updatePagination = () => {
        pagination.innerHTML = "";
        const totalSlides = carousel.querySelectorAll(".card").length;
        for (let i = 0; i < totalSlides; i++) {
          const dot = document.createElement("span");
          dot.classList.add("dot");
          pagination.appendChild(dot);
        }
      };

      updatePagination();

      carousel.addEventListener("scroll", () => {
        const scrollOffset = carousel.scrollLeft;
        const cardWidth = carousel.querySelector(".card").offsetWidth;
        const slideIndex = Math.round(scrollOffset / cardWidth);
        const dots = pagination.querySelectorAll(".dot");
        dots.forEach((dot, index) => {
          if (index === slideIndex) {
            dot.classList.add("active");
          } else {
            dot.classList.remove("active");
          }
        });
      });
    });


    
  </script>


@endsection