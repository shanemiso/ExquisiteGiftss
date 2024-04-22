@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="content">
        <h3>HI SHANE!</h3>
      </div>
      <div class="profile-container">
        <div class="section">
          <p>My Account</p>
          <a href="#">Log Out</a>
        </div>
        <div class="layout">
          <div class="layout_item w-50">
            <div class="newsletter">
              <img src="{{ asset('image/default-profile.jpg') }}"  />
            </div>
          </div>

          <div class="layout_item w-25">
            <nav>
              <h4>ACCOUNT DETAILS</h4>
              <ul></ul>
            </nav>
          </div>

          <div class="layout_item w-25">
            <nav>
              <h4>ORDER DETAILS</h4>
              <ul></ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    @endsection