@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="content">
        <div class="shop-container">
          <div class="image">
            <img src="assets/image/shopnow.png" />
          </div>
          <div class="text">
            <h3>MOTHER'S DAY</h3>
            <p>Rs.4000</p>
            <p>COLOR: Black Box</p>
            <form>
              <div class="row">
                <div class="form-group">
                  <input
                    type="text"
                    id="input1"
                    name="input1"
                    placeholder="To:"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    id="input2"
                    name="input2"
                    placeholder="From:"
                  />
                </div>
              </div>
              <div class="form-group">
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
                src="assets/image/grid-img8.png"
                alt="Girl Eating Pizza"
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="assets/image/grid-img1.png"
                alt="Girl Eating Pizza"
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="assets/image/grid-img2.png"
                alt="Girl Eating Pizza"
              />
            </div>
            <div class="box">
              <img
                class="box-image"
                src="assets/image/grid-img3.png"
                alt="Girl Eating Pizza"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
