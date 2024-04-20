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
            <div class="step-container">
              <div class="step" id="0"></div>
              <span>Step 1</span>
            </div>
            <div class="step-container">
              <div class="step" id="1"></div>
              <span>Step 2</span>
            </div>
            <div class="step-container">
              <div class="step" id="2"></div>
              <span>Step 3</span>
            </div>
            <div class="step-container">
              <div class="step" id="3"></div>
              <span>Done!</span>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <h3>STEP 1 of 3</h3>
        <h1>CHOOSE YOUR BOX COLOR</h1>
      </div>
      <div class="card-container">
        <div class="first-box">
          <img src="assets/image/box1.png" />
        </div>
        <div class="second-box"><img src="assets/image/box2.png" /></div>
      </div>
    </div>

   @endsection