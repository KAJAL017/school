<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap Css  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Custom Css  -->
    <link rel="stylesheet" href="../css/adminStyle.css">

</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470;">
        <a href="admin_dash_board.php" class="navbar-brand col-sm-3 col-md-2 mr-0">E-Learning <small
                class="text-white">Admin Area</small>
        </a>
    </nav>

    <!-- Sida Bar  -->

    <div class="container-fluid md-5" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                Lessons
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-users"></i>
                                Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-table"></i>
                                Sell Report
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-table"></i>
                                Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fab fa-accessible-icon"></i>
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-key"></i>
                                Change Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="admin_dash_board.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Admin Body  -->

            <div class="col-sm-9 mt-5">
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Courses</div>
                            <div class="card-body">
                                <h4 class="card-title">5</h4>
                                <a href="" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Students</div>
                            <div class="card-body">
                                <h4 class="card-title">25</h4>
                                <a href="" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
                            <div class="card-header">Sold</div>
                            <div class="card-body">
                                <h4 class="card-title">3</h4>
                                <a href="" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <!-- Table  -->

                    <p class="bg-dark text-white p-2"> Course ordered</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student Email</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">22</th>
                                <td>100</td>
                                <td>kajal@gmail.com</td>
                                <td>22/10/2022</td>
                                <td>2000</td>
                                <td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i
                                            class="far fa-trash-alt"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- row close  -->
    </div> <!-- container-fluid close  -->

    <!-- Jquery and Boostrap Java Script  -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>


    <!-- FontAwesome Js  -->
    <script src="../js/all.min.js"></script>

    <!-- Admin AjaxReq Js  -->
    <script src="../js/adminAjax.js"></script>

    <!-- Admin Custom Js  -->
    <script src="../js/admin_custom.js"></script>
</body>

</html>