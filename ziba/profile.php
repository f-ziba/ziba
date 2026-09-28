<?php
include 'backend.php';
session_start();
$data = $_SESSION['email'];
    if($data==""){
        header("Location:login.php");
    }
$query = mysqli_query(database(), "SELECT * FROM tb_testhive WHERE EMAIL='$data'");
$fetch = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - TestHive</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/fontawesome/">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background: radial-gradient(rgb(11,23,65) 16%, rgb(9,18,51) 45%, rgb(8,16,46) 50%, rgb(7,14,38) 59%, rgb(5,9,25) 73%, black 100%);color: rgb(244,244,244);border-color: rgb(26,35,116);">
    
    <div class="container-fluid" id="profile">
        <div class="row">

            <!-- side bar here -->
            <div class="col-md-2 side-bar">
                <div class="top" style="margin-bottom: 1em;">
                    <h3 style="color: #045fcc;"><i class="fa-solid fa-graduation-cap"></i> TEST<span style="color: var(--bs-pink);">HIVE</span></h3>
                    <h1 style="color: rgb(131,151,171);font-style: italic;font-size: 14px;font-family: 'Advent Pro', sans-serif;">Learn. Practice. Succeed.</h1>
                    <hr>
                </div>
                <div class="links">
                    <p style="background-color: #045fcc;">
                        <a href="profile.html"><i class="fa-solid fa-house"></i>&nbsp; &nbsp; Dashboard</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-solid fa-book-open"></i>&nbsp; &nbsp; My Course</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-regular fa-calendar-days"></i>&nbsp; &nbsp; Assignments</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-solid fa-scroll-torah"></i>&nbsp; &nbsp; Exams</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-solid fa-trophy"></i>&nbsp; &nbsp; Certificate</a>
                    </p>
                    <p>
                        <a href="#"><i class="fa-solid fa-envelope"></i>&nbsp; &nbsp; Messages</a>
                    </p>
                    <p>
                        <a href="settings.php"><i class="fa-solid fa-gear"></i>&nbsp; &nbsp; Settings</a>
                    </p>
                </div>
                <div class="logout"  style="margin-top: 7em;">
                    <hr>
                    <p>
                        <a href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; &nbsp; Logout</a>
                    </p>
                </div>
            </div>
            <!-- main content here -->
            <div class="col-md-10" id="main">
                <div class="row align-items-center head">
                    <div class="col-md-2 d-flex burger">
                        <a href="#"><i class="fa-solid fa-bars-staggered fs-4"></i></a>
                    </div>
                    <div class="col-md-10 d-flex align-items-center gap-3 mt-3 justify-content-end prof">
                        <p><i class="fa-regular fa-bell fs-6"></i></p>
                        <p><img src="assets/img/profile.png" alt="john Doe" width="30px"></p>
                        <p><i class="fs-6">John Doe</i></p>
                        <p><i class="fa-solid fa-chevron-down fs-6"></i></p>
                    </div>
                    <hr>
                </div>
                <div class="row heading">
                    <div class="col-md-12">
                        <h3>My Profile - Ajibola Hephzibah</h3>
                        <p><a href="#">Dashboard<i class="fa-solid fa-chevron-right fs-6"></i></a> My Profile</p>
                    </div>
                </div>
                <div class="row section1">
                    <div class="button">
                        <button type="button" class="btn btn-link"><i class="fa-regular fa-pen-to-square"></i> Edit Profile</button>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <img src="assets/img/profile.png" alt="JB" width="150px">
                        </p>
                        <p>
                            <button type="button" class="btn">Student</button>
                        </p>
                        <h4>Ajibola Hephzibah</h4>
                        <p>hephzibah@example.com</p>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <label><i class="fa-regular fa-user"></i> Full Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>Abayomi Ajibola</p>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <label><i class="fa-regular fa-envelope"></i> Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>abayomiajibol88@gmail.com</p>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <label><i class="fa-solid fa-phone"></i> Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>09033453662</p>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <label><i class="fa-solid fa-location-dot"></i> Location</label>
                            </div>
                            <div class="col-md-6">
                                <p>Ojodu-Berger, Lagos.</p>
                            </div>
                            <hr>
                            <div class="col-md-6">
                                <label><i class="fa-solid fa-image-portrait"></i> Member Since</label>
                            </div>
                            <div class="col-md-6">
                                <p>MArch, 16 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of section-1 -->

                <div class="row section2">
                    <h6>
                        <i class="fa-solid fa-magnifying-glass-chart"></i> ACCOUNT OVERVIEW
                    </h6>
                    <div class="col-md-3">
                        <span class="icon blue"><i class="fa-solid fa-book-open"></i></span>
                        <p>4</p>
                        <h6>Enrolled Courses</h6>
                    </div>
                    <div class="col-md-3">
                        <span class="icon pink"><i class="fa-solid fa-clipboard-list"></i></span>
                        <p>12</p>
                        <h6>Assignments Completed</h6>
                    </div>
                    <div class="col-md-3">
                        <span class="icon blue"><i class="fa-solid fa-award"></i></span>
                        <p>3</p>
                        <h6>Certificate Earned</h6>
                    </div>
                    <div class="col-md-3">
                        <span class="icon pink"><i class="fa-solid fa-clock"></i></span>
                        <p>28</p>
                        <h6>Hours Learned</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <script src="https://kit.fontawesome.com/7ea723ba62.js" crossorigin="anonymous"></script> -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/stylish-portfolio.js"></script>
</body>

</html>