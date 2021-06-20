@extends('main')
@section('content')
<form action="/game_submit" method="POST">
  @csrf
    <div class="contact-form">
        <div class="input-fields">
          <legend style="text-align-last: center;">Game Requirement</legend>
          <legend>Game</legend>
          <input type="text" name="name" class="form-control" placeholder="i.e. Tomb Rider" required>
          <legend>CPU</legend>
          <input type="text" name="cpu" class="form-control" placeholder="i.e. CPU">
          <legend>GPU</legend>
          <input type="text" name="gpu" class="form-control" placeholder="i.e. GPU">
          <!-- <legend>Ram</legend>
          <input type="text" name="ram" class="form-control" placeholder="i.e. Ram"><br> -->
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection