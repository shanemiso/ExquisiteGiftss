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
        <h3 style="color: #907b54; float: left">Your cart</h3>
      </div>

      <!-- <div class="content">
        <div class="shopping-cart">
          <div class="column-labels">
            <label class="product-image">Image</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-line-price">Total</label>
          </div>

          <div class="product">
            <div class="product-image">
              <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg" />
            </div>
            <div class="product-removal">
              <button class="remove-product">Remove</button>
            </div>
            <div class="product-details">
              <div class="product-title">Dingo Dog Bones</div>
            </div>
            <div class="product-price">12.99</div>
            <div class="product-quantity">
              <input type="number" value="2" min="1" />
            </div>
            <div class="product-line-price">25.98</div>
          </div>

          <div class="totals">
            <div class="totals-item">
              <label>Subtotal</label>
              <div class="totals-value" id="cart-subtotal">71.97</div>
            </div>
          </div>

          <button class="checkout">Checkout</button>
        </div>
      </div> -->
      <div class="content">
        <!-- <div class="shopping-cart">
          <div class="column-labels">
            <label class="product-image">CONTINUE</label>
            <label class="product-removal">Remove</label>
            <label class="product-price">PRICE</label>
            <label class="product-quantity">QUANTITY</label>
            <label class="product-line-price">TOTAL</label>
          </div>

          <div class="product">
            <div class="product-image">
              <img src="{{ asset('image/choose3.png') }}"/>
            </div>
            <div class="product-removal">
              <button class="remove-product">Remove</button>
            </div>

            <div class="product-price">12.99</div>
            <div class="product-quantity">
              <input type="number" value="2" min="1" />
            </div>

            <div class="product-line-price">25.98</div>
          </div>    

          <div class="totals">
            <div class="totals-item">
              <label>Subtotal</label>
              <div class="totals-value" id="cart-subtotal">71.97</div>
            </div>
          </div>

          <button class="checkout">Checkout</button>
        </div> -->
        <div id="w">
  
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="first">Photo</th>
            <th class="second">Qty</th>
            <th class="third">Product</th>
            <th class="fourth">Line Total</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <tr class="productitm">
            <td><img src="{{ asset('image/choose4.png') }}"  class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>Design Bundle Package</td>
            <td>$79.00</td>
            <td><span class="remove"><i class="fa-regular fa-trash-can"></i></span></td>
          </tr>
          <tr class="productitm">
            <td><img   src="{{ asset('image/choose4.png') }}"    class="thumb"></td>
            <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
            <td>Stuff on my Cat: The Book</td>
            <td>$8.95</td>
            <td><span class="remove"><i class="fa-regular fa-trash-can"></i></span></td>
          </tr>
          
          <!-- tax + subtotal -->
        
          <tr class="totalprice">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span class="thick">$225.45</span></td>
          </tr>
          
          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout">Checkout Now</td>
          </tr>
        </tbody>
      </table>
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