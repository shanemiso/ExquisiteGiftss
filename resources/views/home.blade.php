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
          <div class="shop-btn"><a href="/marketplace">SHOP NOW</a></div>
        </div>
      </div>
      <div class="main-content">
        <h2>WELCOME TO</h2>
        <h1>EXQUISITE GIFTS</h1>
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
      <div class="content">
        <h2>OUR FAVOURITES</h2>
        <div class="gallery">
          <div class="gallery__item test gallery__item--1">
            <img
              src="{{ asset('image/grid-img1.png') }}"
              alt="Gallery image 1"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model" >Shop now</button>



          </div>
          <div class="gallery__item test gallery__item--2">
            <img
              src="{{ asset('image/grid-img2.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model" >Shop now</button>

          </div>
        
          <div class="gallery__item test gallery__item--3">
            <img
              src="{{ asset('image/grid-img3.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--4">
            <img
              src="{{ asset('image/grid-img4.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--5">
            <img
              src="{{ asset('image/grid-img5.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--6">
            <img
              src="{{ asset('image/grid-img6.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--7">
            <img
              src="{{ asset('image/grid-img7.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--8">
            <img
              src="{{ asset('image/grid-img8.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
        </div>
        <div class="gallery-2">
          <div class="gallery__item test gallery__item--1">
            <img
              src="{{ asset('image/grid-img1.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--2">
            <img
              src="{{ asset('image/grid-img3.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--3">
            <img
              src="{{ asset('image/grid-img4.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--4">
            <img
            src="{{ asset('image/grid-img7.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--5">
            <img
              src="{{ asset('image/grid-img5.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
        </div>
        <div class="gallery-3">
          <div class="gallery__item test gallery__item--1">
            <img
              src="{{ asset('image/grid-img1.png') }}"

              alt="Gallery image 1"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--2">
            <img
              src="{{ asset('image/grid-img2.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--3">
            <img
              src="{{ asset('image/grid-img3.png') }}"

              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--4">
            <img
            src="{{ asset('image/grid-img4.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--5">
            <img
            src="{{ asset('image/grid-img5.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--6">
            <img
            src="{{ asset('image/grid-img6.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--7">
            <img
            src="{{ asset('image/grid-img7.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
          <div class="gallery__item test gallery__item--8">
            <img
            src="{{ asset('image/grid-img8.png') }}"
              alt="Gallery image 2"
              class="gallery__img"
            />
            <button class="shop-now buttontest" for="model">Shop now</button>

          </div>
        </div>
        <button class="icon-xl"><i class="fa-solid fa-plus"></i></button>
      </div>

      <div class="popup-container">
        <a><i class="fas fa-times close-btn"></i></a>

        <div class="images">
          <img id="popupImage" src="{{ asset('image/card1.png') }}"/>
        </div>
        <div class="product">
          <div class="images">
            <img id="secondPopupImage"
            src="{{ asset('image/card1.png') }}"  style="width: 90px; height: 90px"
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
        <img src="{{ asset('image/holiday-banner.png') }}"alt="Banner Image" />
        <div class="overlay-text">
          <h2>HOLIDAY SPECIAL</h2>
          <div class="shop-btn"><a href="/marketplace">SHOP NOW</a></div>
        </div>
      </div>
      <div class="content">
        <h2>GIFT GUIDES</h2>
        <div class="wrapper">
          <ul class="carousel">
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img3.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img4.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img6.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img3.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img7.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
            <li class="card">
              <div class="img">
                <img
                src="{{ asset('image/grid-img8.png') }}"
                  alt=""
                  draggable="false"
                />
              </div>
            </li>
          </ul>
        </div>

        <div class="pagination"></div>
        <div class="shop-btn"><a href="/readytoship">SHOP NOW</a></div>
      </div>
      <div class="marketplace-banner">
        <img                 src="{{ asset('image/marketplace-banner.png') }}"
 alt="Banner Image" />
        <div class="overlay-text">
          <h2>MARKETPLACE</h2>
          <div class="shop-btn"><a href="/marketplace">SHOP NOW</a></div>
        </div>
      </div>
      <div class="card-container">
        <div class="image">
          <img                 src="{{ asset('image/single-card.png') }}"
 />
        </div>
        <div class="text">
          <h2>COORPORATE</h2>
        
          Corporate orders are the lifeblood of many upscale gifting platforms, representing a significant segment of their clientele. These orders often involve larger quantities, customization requirements, and stringent delivery timelines tailored to corporate events, client appreciation gestures, or employee recognition programs. 

          
          
            
          </p>
          <div class="shop-btn"><a href="/coorporate">SHOP NOW</a></div>
        </div>
      </div>
      <div class="content">
        <div class="about-us">
          <div class="overlay__about">
            <h2>ABOUT US</h2>
          </div>
          <p class="about-text">
          Welcome to Exquisite Gifts, a company born out of a desire to spread happiness through beautiful creations since our inception in 2019. Our journey began with a simple yet powerful idea: to craft creative gifts infused with love, aiming to bring joy into people's lives.
          </p>
          <div class="overlay__item">
            <img
              src="{{ asset('image/overlay-img.png') }}"

              alt="about image"
              class="overlay__img"
            />
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

  document.addEventListener("DOMContentLoaded", function() {
  const plusIcon = document.querySelector(".icon-xl");
  
  // Select all galleries
  const gallery1 = document.querySelector(".gallery");
  const gallery2 = document.querySelector(".gallery-2");
  const gallery3 = document.querySelector(".gallery-3");

  // Hide galleries 2 and 3 initially
  gallery2.style.display = "none";
  gallery3.style.display = "none";

  // Add click event listener to the plus icon
  plusIcon.addEventListener("click", function() {
    // Toggle visibility of gallery 
    if (gallery2.style.display === "none") {
      gallery2.style.display = "grid";
    } else {
      if (gallery3.style.display === "none") {
        gallery3.style.display = "grid";
        plusIcon.innerHTML = '<i class="fa-solid fa-minus"></i>';
      } else {
        gallery3.style.display = "none";
        plusIcon.innerHTML = '<i class="fa-solid fa-plus"></i>';
      }
    }
  });
});


document.addEventListener("DOMContentLoaded", function () {
    const popupImage = document.getElementById("popupImage");

    const secondPopupImage = document.querySelector(".product .images img");

    const popupContainer = document.querySelector(".popup-container");

    const shopNowButtons = document.querySelectorAll(".shop-now");

    // Add click event listener to each shop now button
    shopNowButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const imageSource = this.parentNode.querySelector("img").getAttribute("src");
            popupImage.setAttribute("src", imageSource);
            secondPopupImage.setAttribute("src", imageSource);
            popupContainer.style.display = "block";
        });
    });

    // Add click event listener to close button
    document.querySelector(".close-btn").addEventListener("click", function () {
        popupContainer.style.display = "none";
    });
});

;

function adjustPopupPosition() {
    const popupContainer = document.querySelector(".popup-container");

    // Get viewport dimensions
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;

    // Get popup dimensions
    const popupWidth = popupContainer.offsetWidth;
    const popupHeight = popupContainer.offsetHeight;

    // Calculate new top and left positions
    const newTop = Math.max((viewportHeight - popupHeight) / 2, 0);
    const newLeft = Math.max((viewportWidth - popupWidth) / 2, 0);

    // Set new top and left positions
    popupContainer.style.top = newTop + "px";
    popupContainer.style.left = newLeft + "px";
}
    
  </script>


@endsection