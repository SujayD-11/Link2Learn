<?php
include 'header.php';
if(isset($_POST['submit'])) //If user got in the proper way
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(invalidUid($uid) !== false)
    {
        header("location: ../signup.php?error=invalidusername");
        exit();
    }
    if(invalidEmail($email) !== false)
    {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(PswdMismatch($pwd,$pwdRepeat))
    {
        header("location: ../signup.php?error=passwordnotmatch");
        exit();
    }
    if(invalidPswdLength($pwd) !== false)
    {
        header("location: ../signup.php?error=passwordinsufficientlength");
        exit();
    }
    if(uidExists($conn,$uid,$email) !== false)
    {
        header("location: ../signup.php?error=uidExists");
        exit();
    }

    createUser($conn,$name,$email,$uid,$pwd);

}
else
{
    header("location: ../signup.php");//send user to a particular place
}