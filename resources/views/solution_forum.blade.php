@extends('main')
@section('content')
<!-- <!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\style5.css">
    <link rel="stylesheet" href="css\style6.css">
</head>
<body>
<section class="get-in-touch"> -->
<div class="contact-form">
<div class="input-fields">
     <!-- <h1 class="title">User Solution</h1> -->
     <legend style="text-align-last: center;">My Qusetions</legend>
   @foreach ($bug as $s)
      <div class="form-field col-lg-12 ">
       <p class="bg-primary">{{$s->queries}}</p>
      </div>
     <div class="form-field col-lg-12 ">
       <!-- <label class="label" for="comment">Ans</label> -->
       <input id="comment" class="input-text js-input form-control" type="text" value="{{$s->solution}}" required><br>
     </div>
   @endforeach  
<!-- <section class="get-in-touch"> -->
   <!-- <h1 class="title">Recent Bug & Error Forum</h1> -->
   <legend style="text-align-last: center;">Recent Questions</legend>
   @foreach ($bug1 as $s1)
   
   @if($s1->user_id==$value)
       <!-- <h6 class="text-danger"></h4> -->
    @else
       <form  action="{{url('/S',[$s1->user_id,$s1->queries])}}" method="POST">
   @csrf
      <div class="form-field col-lg-12">
       <p class="bg-primary">{{$s1->queries}}</p>
      </div>
     <div class="form-field col-lg-12 ">
         <input id="comment" class="input-text js-input form-control" type="text" name="comment" required>
         <!-- <label class="label" for="comment">Comment</label> -->
      </div>
      <div class="form-field col-lg-12 ">
         <!-- <input class="submit-btn" type="submit" value="Submit"> --><br>
         <button class="submit-btn btn" type="submit" value="Submit">Submit</button>
      </div>
   </form>                      
   @endif
   @endforeach 
</div>
</div>
@endsection
<!-- </section>
</body>
</html> -->
 