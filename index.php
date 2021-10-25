<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) 

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>GymKhana</title>
    <link href="img/logo.png" rel="icon">

    <!-- Bootstrap and Font Awesome CSS -->
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" rel="stylesheet">
    <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:900|Fjalla+One|Lato|Merriweather|Ultra" rel="stylesheet">

    <!-- Main CSS -->
    <link href="CSS/nav.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    <link href="CSS/footer.css" rel="stylesheet">
</head>
<body>

<!--  NAVBAR -->

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <img alt="Fitness Academy" class="navbar-brand" href="index.html" src="img/logo.png">
    <button class="navbar-toggler" data-target="#navbarMenu" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="src/contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index1.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Image Slider  -->

<div class="wrapper">
    <div class="arrow" id="left-arrow"></div>

    <div class="slider" id='slider'>

        <div class="slide slide-1">
            <div class="slide-content">
                <span>GYM-KHANA</span>
                <p>We Make Champions!</p>
            </div>
        </div>

        <div class="slide slide-2">
            <div class="slide-content">
                <span>Top Class Facilities</span>
            </div>
        </div>

        <div class="slide slide-3">
            <div class="slide-content">
                <span>Your Health Spot!</span>
            </div>
        </div>

        <div class="slide slide-4">
            <div class="slide-content">
                <p>Healthcare With Best</p>
                <p>Equipment</p>
            </div>
        </div>

    </div>

    <div class="arrow" id="right-arrow"></div>
</div>

<!-- Grid -->

<div id="grid">
    <div class="grid-head">
        <h1>Welcome To Fitness Academy!</h1>
        <p>
            We are committed to provide fitness education and knowledge to both Fitness Professionals and Fitness
            Enthusiasts.
            For the first time in India, all about Fitness under one roof at the most competitive rates.
            Our motto is to take fitness to the grassroot level of India were every home has a fitness expert.
            True enjoyment comes from positively directed activity of mind and good physical exercise;both are eternally
            united.
        </p>
        <div class="container">
            <hr/>
        </div>
        <h4>OUR PROCESS</h4>
    </div>
    <div class="container">
        <div class="row" id='process'>
            <div align="center" class="col">
                <i class="fas fa-weight fa-3x"></i>
                <h5>Analyze Your Goal</h5>
                <p>1st Step, is Goal Analysis</p>
            </div>
            <div align="center" class="col">
                <i class="fas fa-dumbbell fa-3x"></i>
                <h5>Work Hard On It</h5>
                <p>Focus on Goal & Work Hard</p>
            </div>
            <div align="center" class="col">
                <i class="fas fa-tachometer-alt fa-3x"></i>
                <h5>Improve Your Performance</h5>
                <p>Constant Practise is the Key.</p>
            </div>
            <div align="center" class="col">
                <i class="fas fa-chart-line fa-3x"></i>
                <h5>Achieve Your Destinity</h5>
                <p>Yes, You did it.</p>
            </div>
        </div>
    </div>
</div>



<div id="bmi">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Calculate Your BMI</h3>
                <form>
                    <div class="row form-group">
                        <div class="col">
                            <input class="form-control form-control-lg" id="height" placeholder="Enter Height in cm.."
                                   type="number">
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg" id="weight" placeholder="Enter Weight in Kgs.."
                                   type="number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary" id='bmi-btn' type="submit" onclick="bmiCalc()">Calculate BMI</button>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" id='bmi-resetbtn' type="submit" onclick="bmiReset()">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <img alt="BMI" src="img/bmi-pic.png">
            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="pt-5 bg-light">
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook fa-3x"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter fa-3x"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus fa-3x"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-sc mx-1">
                <i class="fab fa-snapchat fa-3x"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-yt mx-1">
                <i class="fab fa-youtube fa-3x"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-yt mx-1">
                <i class="fab fa-instagram fa-3x"> </i>
            </a>
        </li>
    </ul>

    <div class="py-2 text-center"><i class="far fa-copyright"></i> 2021 Copyright :
        <a href="index.php"> Ayush_Rakesh_Shivanshu </a>
    </div>
</footer>

<!-- Bootstrap Scripts-->
<script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Main Script -->
<script src='Script/main.js'></script>


</body>
</html>