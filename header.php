<?php
    session_start();    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <title>STEP4CAREER</title>
</head>

<body>
    <nav class="navbar">
        <div class="nav-logo"><a href="index.php"><span style="color:white;text-decoration:none;transition: 0.3s ease;" onMouseOver="this.style.color='#FDC93B'" onMouseOut="this.style.color='white'">STEP4CAREER</span></a></div>
        <div class="nav-links">
            <ul>
                <?php
                    if(isset($_SESSION["useruid"]))
                    {
                        echo '<li class="nav-about"><a href="interestForm.php">COURSES</a></li>';
                        echo '<li class="nav-about"><a href="allJobs.php">JOBS</a></li>';
                        echo '<li class="nav-profile"><a href="payments.php">PAYMENTS</a></li>';
                        echo '<li class="nav-logout"><a href="includes/logout.inc.php">LOGOUT</a></li>';
                    }
                    else{
                        echo '<li class="nav-signup"><a href="signup.php">SIGNUP</a></li>';
                        echo '<li class="nav-about"><a href="#">ABOUT</a></li>';
                        echo '<li class="nav-services"><a href="#">SERVICES</a></li>';
                        echo '<li class="nav-login"><a href="login.php">LOGIN</a></li>';
                    }
                ?>
            </div>
        </ul>
    </nav>
    
    