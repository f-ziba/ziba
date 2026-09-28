<?php
function database(){
    $connect = mysqli_connect("localhost","root","","db_testhive");
    if(!$connect){
        echo "Db not found";
    }
    return $connect;
}

function register(){
    if(isset($_POST['reg'])){
        $fullname = $_POST['fname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];
        $password = $_POST['pword'];

        // $password = password_hash($password, PASSWORD_DEFAULT);
$insert = mysqli_query(database(),"INSERT INTO tb_testhive (`FULLNAME`,`EMAIL`,`COURSE`,`GENDER`,`PASSWORD`)VALUES('$fullname','$email','$course','$gender','$password')");
        if($insert){
            echo "Registration done <a href='login.php'>Login</a>";
        }
        else{
            echo "<script>alert('Not Registered')</script>";
        }
    }
}

function login(){
    session_start();
    if(isset($_POST['log'])){
        $email = $_POST['email'];
        $password = $_POST['pword'];
    $check = mysqli_query(database(), "SELECT * FROM tb_testhive WHERE EMAIL='$email' AND PASSWORD='$password'");
    $row = mysqli_num_rows($check);
        if($row>0){
            $_SESSION['email'] = $email;
            header("Location:profile.php");
        }
        else{
            echo "<h3 style = 'color: reg;'>Wrong login details</h3>";
        }
    }
}

?>