<?php
include 'backend.php';
register ();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background: radial-gradient(rgb(11,23,65) 16%, rgb(9,18,51) 45%, rgb(8,16,46) 50%, rgb(7,14,38) 59%, rgb(5,9,25) 73%, black 100%);color: rgb(244,244,244);border-color: rgb(26,35,116);">
    
    <div class="container" style="width: 30%;margin: 40px auto;text-align: center;background: rgb(7,15,44);padding: 20px;box-shadow: 3px 4px 20px 0px rgb(2,4,24);border-radius: 18px;border: 1px solid rgb(14,23,72);">
        <h1 style="color: #045fcc;">TEST<span style="color: var(--bs-pink);">HIVE</span></h1>
        <h1 style="color: rgb(131,151,171);font-style: italic;font-size: 17px;font-family: 'Advent Pro', sans-serif;">Learn. Practice. Succeed.</h1>
        <div style="margin: 30px 0;">
            <h1 style="color: rgb(221,221,221);font-size: 29.9px;">Welcome</h1>
            <p style="color: rgb(131,151,171);font-size: 15px;font-style: italic;">Register Here!</p>
        </div>
        <form method="post">
            <p>
                <label class="form-label" style="font-size: 18px;">Fullname</label> <br>
                <input type="text" name="fname" placeholder="e.g - John Doe">
            </p>
            <div class="gender">
                <label>Gender:</label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
            </div>
            <p>
                <label class="form-label" style="font-size: 18px;">Email</label> <br>
                <input type="email" name="email" placeholder="you@example.com">
            </p>
            <select name="course">
                <option selected> Courses</option>
                <option value="Web Development"> Web Development</option>
                <option value="Web Design"> Web Design</option>
                <option value="Cyber Security"> Cyber Security</option>
                <option value="Cyber Security"> Quality Assurance</option>
            </select>
            <p>
                <label class="form-label" style="font-size: 18px;">Password</label>
                <input type="password" name="pword" placeholder=". . . . . . . .">
            </p>
            <p>
                <input type="submit" value="Register" id="logreg" name="reg" style="margin: 20px 0;">
            </p>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/stylish-portfolio.js"></script>
</body>

</html>