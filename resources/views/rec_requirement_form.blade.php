@extends('main')
@section('content')
<form action="/req_submit" method="POST">
    @csrf
    <div class="contact-form">
        <div class="input-fields">
            <legend style="text-align-last: center;">Games Recomendation Form</legend>
            <legend>Game</legend>
            <input type="text" name="game" class="input" placeholder="i.e. Tomb Raider">
            <legend>CPU</legend>
            <input type="text" name="cpu" class="input" placeholder="i.e. Intel Core i5-6600K">
            <legend>GPU</legend>
            <input type="text" name="gpu" class="input" placeholder="i.e. Nvidia GeForce GTX 1070">
          <!--   <legend>RAM</legend>
            <div class="form-group">
                <select class="form-control" name="ram">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                    <option value="16">16</option>
                    <option value="32">32</option>
                    <option value="64">64</option>
                </select>
            </div> -->
            <legend>PLATFORM</legend>
            <div class="form-group">
                <select class="form-control">
                    <option>Windows</option>
                    <option>macOS</option>
                    <option>Linux</option>
                </select>
            </div><br>
            <button class="btn btn-info">Submit</button>
        </div>
    </div>
</form>
@endsection