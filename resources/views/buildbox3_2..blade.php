@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="content">
        <div class="progress-line"></div>
        <div class="progress-container">
          <div class="steps">
            <div class="step" id="0"></div>
            <div class="step" id="1"></div>
            <div class="step" id="2"></div>
            <div class="step" id="3"></div>
          </div>
        </div>
      </div>
      <div class="content">
        <h3>STEP 3 of 3</h3>
        <h1>CHOOSE YOUR CARD</h1>
      </div>
      <div class="blog-card">
        <div class="meta">
          <img 
          src="{{ asset('image/choose4.png') }}"
class="photo" />
        </div>
        <div class="description">
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
@endsection