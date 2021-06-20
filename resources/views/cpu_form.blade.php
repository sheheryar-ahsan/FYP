@extends('main')
@section('content')
<form action="/cpu_submit" method="POST">
  @csrf
  <div class="contact-form">
    <div class="input-fields">
      <legend style="text-align-last: center;">CPU</legend>
      <legend>CPU Code Name</legend>
      <input type="text" name="name" class="form-control" placeholder="i.e. intel core-i5 4200u" required>
      <legend>Cores</legend>
      <input type="text" name="core" class="form-control" placeholder="i.e. 2">
      <legend>Threads</legend>
      <input type="text" name="thread" class="form-control" placeholder="i.e. 4">
      <legend>Clock Speed</legend>
      <input type="text" name="clock" class="form-control" placeholder="i.e. 2.6 GHz">
      <legend>L1 Cache</legend>
      <input type="text" name="l1" class="form-control" placeholder="i.e. 128KB">
      <legend>L2 Cache</legend>
      <input type="text" name="l2" class="form-control" placeholder="i.e. 256Kb">
      <legend>L3 Cache</legend>
      <input type="text" name="l3" class="form-control" placeholder="i.e. 3072kb">
      <br>
      <button class="btn btn-info">Submit</button>
    </div>
</div>
</form>
@endsection