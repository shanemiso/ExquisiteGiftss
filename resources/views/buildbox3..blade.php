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
            src="{{ asset('image/choose5.png') }}"
            alt=""
          />
          <p>Father's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-3"
            src="{{ asset('image/choose1.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-4"
            src="{{ asset('image/choose5.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-5"
            src="{{ asset('image/choose2.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-6"
            src="{{ asset('image/choose6.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-7"
            src="{{ asset('image/choose2.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-8"
            src="{{ asset('image/choose6.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-9"
            src="{{ asset('image/choose3.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-10"
            src="{{ asset('image/choose7.png') }}"
            alt=""
          />
          <p>Father's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-11"
            src="{{ asset('image/choose3.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-12"
            src="{{ asset('image/choose7.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-13"
            src="{{ asset('image/choose4.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-14"
            src="{{ asset('image/choose8.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-15"
            src="{{ asset('image/choose4.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
        <div>
          <img
            class="grid-item grid-item-16"
            src="{{ asset('image/choose8.png') }}"
            alt=""
          />
          <p>Mother's Day</p>
        </div>
      </div>
    </div>

    @endsection