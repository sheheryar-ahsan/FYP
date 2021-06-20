<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="dashboard_style.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Home Page</a>
              <div class="bottom-border pb-3">
                <!-- <img src="images/admin.jpeg" width="50" class="rounded-circle mr-3"> -->
                <a href="#" class="text-white">Admin</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="/dashboard" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                <li class="nav-item"><a href="/gpu_form" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Insert GPU Information</a></li>
                <li class="nav-item"><a href="/cpu_form" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Insert CPU Information</a></li>
                <li class="nav-item"><a href="/show/gpu" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>GPUS</a></li>
                <li class="nav-item"><a href="/show/cpu" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>CPUs</a></li>
                     </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
               
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="/dashboard" class="nav-link"> <button type="button" class="btn btn-danger">Logout</button></a></li>
                    </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
   

    <!-- cards -->
    <section>
    
    </section>
    <!-- end of cards -->

    <!-- tables -->
    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                <form action="{{url('\gpu_update',[$users->id])}}" method="POST">
  @csrf
    <div class="contact-form">
        <div class="input-fields">
          <legend style="text-align-last: center;">Update GPU</legend>
          <legend>GPU Code Name</legend>
          <input type="text" name="name" class="form-control" value="{{ $users->name }}" required>
          <legend>Dedicated Video memory</legend>
          <input type="text" name="memory" class="form-control" value="{{ $users->memory}}">
          <legend>Memory Interface</legend>
          <input type="text" name="bandwidth" class="form-control" value="{{ $users->bandwidth }}">
          <legend>Graphic Clock</legend>
          <input type="text" name="clock" class="form-control" value="{{ $users->clock }}">
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
          <input type="text" name="unit" class="form-control" value="{{ $users->unit }}">
          <br>
          <button class="btn btn-info">Submit</button>
        </div>
    </div>
</form>

              

              </div></div></div></div></div>
           

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script1.js"></script>
  </body>
</html>






