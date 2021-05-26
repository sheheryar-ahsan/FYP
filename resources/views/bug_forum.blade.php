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
   <!-- <h1 class="title">Bug & Error Forum</h1> -->
   <legend style="text-align-last: center;">Write a Question</legend>
   <form  action="{{url('/bug')}}" method="POST">
   @csrf
   
      <div class="form-field col-lg-12">
         <input id="query" name="queries" class="input-text js-input form-control" type="text" required>
         <!-- <label class="label" for="queries">Please enter your query/issue</label> -->
      </div>
      <div class="form-field col-lg-12">
         <!-- <input class="submit-btn" type="submit" value="Submit"> --><br>
         <button class="submit-btn btn" type="submit" value="Submit">Submit</button>
      </div>
   </form>
</div>
</div>
@endsection
<!-- </section>
</body>
</html> -->
 