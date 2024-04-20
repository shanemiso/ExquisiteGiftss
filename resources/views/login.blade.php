@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')
    <div class="login-wrapper">
      <div class="inner">
        <div class="image-holder">
          <img src="assets/image/login.png" alt="" />
        </div>
        <form action="">
          <h3>LOGIN</h3>
          <div class="form-wrapper">
            <input type="email" placeholder="EMAIL" class="form-control" />
          </div>

          <div class="form-wrapper">
            <input
              type="password"
              placeholder="PASSWORD"
              class="form-control"
            />
          </div>
          <p>
            by logging in, you agree to terms, privacy policy, and reward
            programs terms.
          </p>
          <button>
            LOGIN
            <i class="fa-solid fa-arrow-right"></i>
          </button>
          <div class="sign-up">
            <a href="#">CREATE ACCOUNT</a>
            <p>.</p>
            <a href="#">FORGOT PASSWORD</a>
          </div>
        </form>
      </div>
    </div>
    @endsection