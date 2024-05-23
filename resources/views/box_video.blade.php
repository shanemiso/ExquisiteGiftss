@extends('master')
@section('meta')
<title>HOME</title>
@endsection
@section('content')
<div class="main">
    <div class="content">
<video id="myVideo" src="{{asset('image/untitled_3.webm')}}" autoplay muted playsinline 
           onplay="setTimeout(() => { document.getElementById('myVideo').pause(); window.location.href = '/cart'; }, 10000);">
    </video></div>
</div>

@endsection