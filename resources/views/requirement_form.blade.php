@extends('main')
@section('content')
<form action="/reco_submit" method="post">
    @csrf
    <div class="contact-form">
        <div class="input-fields">
            <legend style="text-align-last: center;">Requirement Form</legend>
            <legend>CPU</legend>
            <input type="text" name="cpu" class="input" placeholder="i.e. Intel Core i5-6600K">
            <legend>GPU</legend>
            <input type="text" name="gpu" class="input" placeholder="i.e. Nvidia GeForce GTX 1070">
            <legend>RAM</legend>
            <div class="form-group">
                <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                    <option>12</option>
                    <option>16</option>
                    <option>32</option>
                    <option>64</option>
                </select>
            </div>
            <legend>PLATFORM</legend>
            <div class="form-group">
                <select class="form-control" id="sel1">
                    <option>Windows</option>
                    <option>macOS</option>
                    <option>Linux</option>
                </select>
            </div> <br>
            <button class="btn btn-info">Submit</button>
        </div>
    </div></form>
@endsection