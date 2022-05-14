

<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=250ice-width,250itial-scale=1.0">
    <title>Siliguri Collage </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Testimonials Plugin jQuery CDN  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <!-- Start Navigation  -->
    <nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
        <a class="navbar-brand" href="index.php">Slg Collage</a>
        <span class="navbar-text">Learn And Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link ">Home</a></li>
                <li class="nav-item custom-nav-item"><a href="course.php" class="nav-link">Courses</a></li>
                <li class="nav-item custom-nav-item"><a href="PaymentStatus.php" class="nav-link">Payment Status</a>
                </li>
                <?php
                session_start();
                if(isset($_SESSION['is_Login'])){
                    
                    echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
                    <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                }
                else{
                 
                    echo ' <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal"
                    data-target="#LoginModal">Login</a></li>
                   <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal"
                    data-target="#RegModal">Signup</a></li>';
                };
                
                ?>


                <li class="nav-item custom-nav-item"><a href="assets/testimonial.php" class="nav-link">Feedback</a></li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>