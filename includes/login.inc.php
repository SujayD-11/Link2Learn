<?php
include 'header.php';
$username = $_POST["uid"];
$pwd = $_POST["pwd"];
if(isset($_POST["submit"]))
{

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // if(invalidUid($uid) !== false || invalidEmail($email) !== false)
    // {
    //     header("location: ../login.php?error=wrongLogin");
    //     exit();
    // }
    loginUser($conn,$username,$pwd);
}
else{
    header("location: ../login.php");
    exit();
}