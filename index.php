<!-- Start Header -->
<?php include ("main/header.php")?>
<!-- End Header -->

<!-- Start Video Background -->

<div class="container-fluid remove-vid-marg">
    <div class="vid-parrent">
        <video playsinline autoplay muted loop>
            <source src="videos/backvid.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome To Siliguri Collage</h1>
        <small class="my-content">Learn And Implement</small><br>
        <!-- Modal Button -->
    <?php
    if(!isset($_SESSION['is_Login'])){
        echo '<a href="" class="btn btn-danger btn_dan mt-3" data-toggle="modal" data-target="#RegModal">Get Started </a>';
       
    } else{
        echo '<button class="btn btn-primary mt-3">My Profile</button>';
    }
    
    
    ?>
    </div>
</div>

<!-- End Video Background -->


<!-- Start Text Banner -->

<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ Online courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-user mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarantee*</h5>
        </div>
    </div>
</div>

<!-- End Text Banner -->

<!-- Start Popular Course -->
<?php include ("assets/courses.php")?>
<!-- End Popular Course -->

<!-- Start Contact US -->
<?php  include ("assets/contact.php")?>
<!-- End Contact US -->


<!-- Start Testimonial  -->
<?php include ("assets/testimonial.php")?>
<!-- End Testimonial  -->



<!-- Start Social Follow -->
<div class="conatiner-fluid bg-danger">
    <!-- Start Social Follow -->
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>Whatsapp</a>
        </div>
    </div>
</div>
<!-- End Social Follow -->

<!-- Start About Section -->
<?php include ("assets/about.php")?>
<!-- End About Section -->

<!-- Start Footer -->
<?php include ("main/footer.php")?>
<!-- End Footer -->

<!-- All Modals -->
<?php include ("assets/modals.php")?>
<!-- End Modals -->



<!-- Jquery and Bootstrap Javascript -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Font Awesome JS -->

<script src="js/all.min.js"></script>

<!-- Testimonial jquery cdn -->
<script src="/path/to/cdn/jquery.slim.min.js"></script>

<!-- Testimonial Js -->
<script src="js/testimonial.js"></script>

</body>

</html>