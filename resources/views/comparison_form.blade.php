@extends('main')
@section('content')
<form action="/vs" method="POST">
  @csrf
  <div class="contact-form">
    <div class="input-fields">
      <legend style="text-align-last: center;">Comparison Form</legend>
      <br>
      <div class="form-group">
        <select name="check" class="form-control">
          <option value="1">Graphic Card</option>
          <option value="2">Processor</option>
        </select>
        <br>
      </div>
      <legend>Hardware 1</legend>
      <input type="text" class="input" name="h1" placeholder="i.e. NVIDIA GeForce GTX 1070 or intel Corei5-4200u">
      <br><br>
      <legend style="text-align-last: center;">VS</legend>
      <legend>Hardware 2</legend>
      <input type="text" class="input" name="h2" placeholder="i.e. NVIDIA GeForce GTX 1080 or intel Core2Duo e8400">
      <br>
      <button type="submit" class="btn btn-info">Compare</button>
    </div>
  </div>
</form>
@endsection