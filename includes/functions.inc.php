<?php

function invalidUid($username){
    $result=true;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result=true;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidPswdLength($pswd){
    $result=true;
    if(strlen($pswd)<8)
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function PswdMismatch($pwd,$pwdRepeat){
    $result=true;
    if($pwd !== $pwdRepeat)
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($conn,$username,$email)
{
    $query = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";// '?' is used as placeholder.
    $stmt = mysqli_stmt_init($conn);//Prepared statement used to increase protection so that code isnt used(injected) in input fields to destroy dB
    if(!mysqli_stmt_prepare($stmt, $query))
    {
        header("location: ../signup.php?error=queryfailed"); 
        exit();
    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn,$name,$email,$username,$pwd)
{
    $query = "INSERT INTO users(usersName,usersEmail,usersUid,usersPwd) VALUES(?,?,?,?)";
    $stmt = mysqli_stmt_init($conn); 

    if(!mysqli_stmt_prepare($stmt,$query))
    {
        header("location: ../signup.php?error=insertionfailed"); 
        exit();
    }

    $pwdHashed = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$username,$pwdHashed);

    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header('location: ../loginAfterSignup.php');
    exit();
}

function loginUser($conn,$username,$pwd)
{
    $usernameExists = uidExists($conn,$username,$username);

    if($usernameExists === false)
    {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }

    $hashPass = $usernameExists["usersPwd"];
    $checkPass = password_verify($pwd,$hashPass);

    if($checkPass === false)
    {
        header("location: ../login.php?error=wrongLogin");
        exit();
    }
    else if($checkPass === true)
    {
        session_start();
        $_SESSION["userid"] = $usernameExists["usersId"];
        $_SESSION["useruid"] = $usernameExists["usersUid"];
        header("location: ../index.php?error=none");
        exit();
    }
}
