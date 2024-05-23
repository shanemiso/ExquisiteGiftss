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
        <div class="checkout-container">
            <div class="layout">
                <div class="layout_item w-60">
                    <div class="checkout-form">
                    
                    
                        <div class="text">
                            <a href="/"><img src="{{ asset('image/2.png') }}"/></a>
                            <div class="row">
                                <div class="form-group">
                                <a class="pay" type="submit">CASH ON DELIVERY</a>

                                </div>
                                
                            
                                <div class="form-group">
                                <a class="pay" type="submit">FONEPAY</a>

                                </div>
                            </div>
                            <h3>CONTACTS</h3>
                        
                            <form>
                                <div class="row">

                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input1"
                                        name="input1"
                                        placeholder="First Name"
                                    />
                                    </div>
                                
                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input1"
                                        name="input1"
                                        placeholder="Last Name"
                                    />
                                    </div>
                                </div>
                                <div class="form-group">
                                <input
                                    type="text"
                                    id="input2"
                                    name="input2"
                                    placeholder="First Address"
                                />
                                </div>
                                <div class="form-group">
                                <input
                                    type="text"
                                    id="input2"
                                    name="input2"
                                    placeholder="Second Address"
                                />
                                </div>
                                <div class="row">

                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input2"
                                        name="input2"
                                        placeholder="House No."
                                    />
                                    </div>
                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input2"
                                        name="input2"
                                        placeholder="Appartment No."
                                    />
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input2"
                                        name="input2"
                                        placeholder="Phone No. 1"
                                    />
                                    </div>
                                    <div class="form-group">
                                    <input
                                        type="text"
                                        id="input2"
                                        name="input2"
                                        placeholder="Phone No. 2"
                                    />
                                    </div>
                                </div>
                               <a  href="/cart"> <i class="fa-solid fa-arrow-left"></i></a>
                            <button type="submit"> <a href="/">CONTINUE SHOPPING</a></button>
                            </form>
                        </div>
                    </div>
                </div>

            <div class="layout_item w-40">
            
            <table id="myTable">
        <tr>
            <th>
                <img src="{{ asset('image/shopnow.png') }}"/>Mother's Day
            </th>
            <th>Rs.2000</th>
        </tr>
        <tr>
            <th>
                <img src="{{ asset('image/shopnow.png') }}"/>Mother's Day
            </th>
            <th>Rs.2000</th>
        </tr>
        <tr>
            <td>Subtotal</td>
            <td id="subtotal">Rs.0</td>
        </tr>
        <tr>
            <td>Shipping</td>
            <td id="shipping">Not calculated</td>
        </tr>
        <tr>
            <td>Total</td>
            <td id="total">Rs.0</td>
        </tr>
    </table>

    <script>
        // Function to calculate the total from the 'th' elements and update the 'td' elements
        function calculateTotal() {
            var table = document.getElementById('myTable');
            var rows = table.getElementsByTagName('tr');
            var total = 0;

            // Loop through the rows and sum the values in the second 'th' element
            for (var i = 0; i < rows.length; i++) {
                var ths = rows[i].getElementsByTagName('th');
                if (ths.length > 1) {
                    var valueText = ths[1].innerText;
                    var value = parseInt(valueText.replace('Rs.', '').replace(',', ''));
                    total += value;
                }
            }

            // Update the Subtotal and Total cells
            document.getElementById('subtotal').innerText = 'Rs.' + total;
            document.getElementById('total').innerText = 'Rs.' + total;
        }

        // Call the function to calculate and update the totals
        calculateTotal();
    </script>

            </div>
            </div>
        </div>
        </div>
    </div>

@endsection