<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dot Gameware</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="css\news.css">
    <link rel="stylesheet" href="css\style_common.css">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\style1.css">
    <link rel="stylesheet" href="css\style2.css">
    <link rel="stylesheet" href="css\style3.css">
    <link rel="stylesheet" href="css\style4.css">
    <link rel="stylesheet" href="css\help.css">
    <link rel="icon" href="news\icon.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <img src="news\Logo.png" alt="Logo" class="logo">
                <!-- <img src="news\Title.gif" alt="Title" class="title"> -->
            </div>
            <div class="col-sm">
                <img src="news\twitter_icon.png" alt="Twitter" class="icons">
                <img src="news\youtube_icon.jpg" alt="Twitter" class="icons">
                <img src="news\facebook_icon.jpg" alt="Twitter" class="icons">
            </div>
            <div>

            </div>
        </div>
    </div>
    <header class="nav navbar-expand-sm  navbar-dark header fixed-top">
        <ul class="navbar-nav">

            <div class="nav_style"></div>
            <div class="nav_style"></div>

            <li class="nav-item active">
            <a class="nav-link" href="{{URL('/')}}"><img class="header_icons" src="news/news.png" alt="News Icon"> NEWS</a>
            </li>
            <div class="nav_style"></div>
            <div class="nav_style"></div>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/requirement_form')}}"><img class="header_icons" src="news/search.png" alt="News Icon"> Can I Run Game?</a>
            </li>

            <div class="nav_style"></div>
            <div class="nav_style"></div>

            <li class="nav-item">
                <a class="nav-link" href="{{URL('/rec_requirement_form')}}"><img class="header_icons" src="news/list.png" alt="News Icon"> Games Recommendation</a>
            </li>
            <div class="nav_style"></div>
            <div class="nav_style"></div>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/comparison_form')}}"><img class="header_icons" src="news/hardware.png" alt="News Icon"> Hardware Comparsion</a>
            </li>

            <div class="nav_style"></div>
            <div class="nav_style"></div>&nbsp&nbsp

            <li class="dropdown">
                <img class="header_icons" src="news/bug.png" alt="News Icon">
                <span>Bug'N'Error</span>
                <div class="dropdown-content-news">
                 <a  href="{{URL('/bug_forum')}}"> Write Quesetions </a>
                 <a  href="{{URL('/solution_forum')}}"> My Questions </a>
                </div>
            </li>

            &nbsp&nbsp
            <div class="nav_style"></div>
            <div class="nav_style"></div>&nbsp&nbsp

            <li class="dropdown">
                <img class="header_icons" src="news/community.png" alt="News Icon">
                <span>Community</span>
                <div class="dropdown-content-news">
                    <a href="{{URL('/login')}}">Login</a> <br>
                    <a href="{{URL('/cpu_form')}}">CPU Form</a> <br>
                    <a href="{{URL('/gpu_form')}}">GPU Form</a> <br>
                    <a href="{{URL('/game_form')}}">Game Form</a> <br>
                    <a href="{{URL('/signup')}}">Signup</a> <br>
                    <a href="{{URL('/logout')}}">Logout</a>
                </div>
            </li>

            &nbsp&nbsp
            <div class="nav_style"></div>
            <div class="nav_style"></div>

        </ul>
    </header>

    <div>
        @yield('content')
    </div>

    <footer class="contaier-fluid">
    </footer>
</body>

</html>