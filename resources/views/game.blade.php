@extends('main')
@section('content')
<form action="/game_submit" method="POST">
  @csrf
    <div class="contact-form">
        <div class="input-fields">
          <legend style="text-align-last: center;">GPU</legend>
          <legend>Game</legend>
          <input type="text" name="name" class="form-control" placeholder="i.e. Tomb Rider" required>
          <legend>CPU</legend>
          <input type="text" name="cpu" class="form-control" placeholder="i.e. CPU">
          <legend>GPU</legend>
          <input type="text" name="gpu" class="form-control" placeholder="i.e. GPU">
          <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection