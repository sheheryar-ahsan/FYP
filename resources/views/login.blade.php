@extends('main')
@section('content')
<form action="/submit" method="POST">
<div class="contact-form">
  @csrf
    <div class="input-fields">
      <legend style="text-align-last: center;">LogIn Form</legend>
      <label for="validationCustom01">username</label>
      <input type="text" class="form-control" id="validationCustom01" name="user_name" placeholder="Your username">
      <label for="validationCustom01">Password</label>
      <input type="password" class="form-control" id="validationCustom01" name="pass" placeholder="Your Password">
      <br>
      <button class="btn btn-info">LogIn</button>
      <br>
      <a class="btn btn-info" href="{{URL('/signup')}}">SignIn</a>
    </div>
</div>
</form>
@endsection