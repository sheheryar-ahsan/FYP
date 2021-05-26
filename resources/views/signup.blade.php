@extends('main')
@section('content')
<form method="post" action="{{url('/login')}}">
<div class="contact-form">
    <div class="input-fields">
      <legend style="text-align-last: center;">SignUp Form</legend>
      <label for="validationCustom01">Your Name</label>
      <input type="text" class="form-control" id="validationCustom01" name="user_name" placeholder="ABC" required>
      <label for="validationCustom01">Email</label>
      <input type="text" class="form-control" id="validationCustom01" name="email" placeholder="XYZ@gmail.com">
      @csrf
      <label for="validationCustom01">Your Password</label>
      <input type="password" class="form-control" id="validationCustom01" name="pass" placeholder="New Password">
      
      <br>
      <button class="btn btn-info" type="submit">SignUp</button>
    </div>
</div>
</form>
@endsection