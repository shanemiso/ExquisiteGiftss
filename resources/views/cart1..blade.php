@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
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
        <div class="shopping-cart">
          <div class="column-labels">
            <label class="product-image">CONTINUE</label>
            <label class="product-removal">Remove</label>
            <label class="product-price">PRICE</label>
            <label class="product-quantity">QUANTITY</label>
            <label class="product-line-price">TOTAL</label>
          </div>

          <div class="product">
            <div class="product-image">
              <img           src="{{ asset('image/choose3.png') }}"
/>
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
        </div>
      </div>
    </div>
@endsection