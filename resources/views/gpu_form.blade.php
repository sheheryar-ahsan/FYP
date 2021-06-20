@extends('main')
@section('content')
<form action="/gpu_submit" method="POST">
  @csrf
    <div class="contact-form">
        <div class="input-fields">
          <legend style="text-align-last: center;">GPU</legend>
          <legend>GPU Code Name</legend>
          <input type="text" name="name" class="form-control" placeholder="i.e. nvidia 720m GT" required>
          <legend>Dedicated Video memory</legend>
          <input type="text" name="memory" class="form-control" placeholder="i.e. 2GB">
          <legend>Memory Interface</legend>
          <input type="text" name="bandwidth" class="form-control" placeholder="i.e. 64 bit">
          <legend>Graphic Clock</legend>
          <input type="text" name="clock" class="form-control" placeholder="i.e. 900 MHz">
          <legend>Memory Type</legend>
          <div class="form-group">
            <select class="form-control" name="type">
              <option value="DDR2">DDR2</option>
              <option value="DDR3">DDR3</option>
              <option value="GDDR3">GDRR3</option>
              <option value="DDR4">DDR4</option>
              <option value="GDDR4">GDDR4</option>
            </select>
          </div>
          <legend>Processing units</legend>
          <input type="text" name="unit" class="form-control" placeholder="i.e. 96">
          <br>
          <button class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection