@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')

    <div class="main">
      <div class="secondary-img">
        <img 
        src="{{ asset('image/marketplace-banner.png') }}"
 alt="Main Img" />
        <div class="secondary-overlay">
          <h2>ABOUT US</h2>
        </div>
      </div>
      <div class="about-container">
        <div class="about-content">
          <h3>Curate with Love</h3>
          <h2>Creating  Uniqueness Since 2019</h2>
          <p>dsbcsdbvsdbvds v,msd jk bs,n ksdbvj sdkjvbuskrhgorej,fgvkwgoewhgvjldsnvkj
            uovbjkwbvurwvbewjvbrgvjbevkjruvohbrejvberkjbvjerbvkjbkjrbvkjrbgvkjerbkjerbjebkj
            bvkjerjvbekjbvrkjebvkjerbvkjbvkjrebvkjerbvkjebkjerbjlebvuwbvjwrbhvjsbvlwjubgvwbvkjbvo
            uwebvwjlebvowueubvowebvjlwngvwehfoewhewuhbrwrrirleworilovefihewbfkjbsdkhcsdkbvjhebviebvhkdbvd</p>
            <p>dsbcsdbvsdbvds v,msd jk bs,n ksdbvj sdkjvbuskrhgorej,fgvkwgoewhgvjldsnvkjuovbjkwbvurwvbewjvbrgvjbevkjruvohbr
              ejvberkjbvjerbvkjbkjrbvkjrbgvkjerbkje
              rbjebkjbvkjerjvbekjbvrkjebvkjerbvkjbvkjrebvkjerbvkjebkjerbjlebvuwbvjwrbhvjsbvlwjubgvw
              bvkjbvouwebvwjlebvowueubvowebvjlwngvwehfoewhewuhbrwrrirleworilovefihewbfkjbsdkhcsdkbvjhebviebvhkdbvd</p>
        </div>
        <div class="about-content">
        <h2>You can shop us </h2>
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
      <div class="holiday-banner">
        <img src="{{ asset('image/marketplace-banner.png') }}"alt="Banner Image" />
        <div class="overlay-text">
          <h2>Our Team</h2>
        </div>
      </div>
      <div class="team-content">

      <div class="team-container">
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/card1.png') }}"
              alt="Card1"
            />
            <div class="title-flex">
              <h4 class="box-title">Founder</h4>
              <h5>Rashi Rajbhandari</h5>  

            </div>
          </div>
          <div class="team-box">
            <img
              class="box-image"
              src="{{ asset('image/card2.png') }}"
              alt="Card2"
            />
            <div class="title-flex">
              <h4 class="box-title">Creative Head</h4>
            <h5>Stuti Rajbhandari</h5>  
            </div>
          </div>
      </div>
    </div>
    </div>
    </div>
@endsection
