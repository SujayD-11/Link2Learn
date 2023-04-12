<?php
include 'header.php';
$value = $_POST["interest"];
if(isset($_POST["interest-submit"]))
{
    if($value == "psychology")
    {
        header("location: ../psychology.php");
        exit();
    }
    else if($value == "buisness")
    {
        header("location: ../business.php");
        exit();
    }
    else if($value == "webdevelopment")
    {
        header("location: ../webdev.php");
        exit();
    }
    else if($value == "cybersecurity")
    {
        header("location: ../cybersecurity.php");
        exit();
    }
}
else{
    header("location: ../interestForm.php");
    exit();
}