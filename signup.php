<?php
    include_once 'header.php';
    include_once 'main_blur.php';
?>
<div class="signup-form-container" style="filter:blur(0px);">
        <form class="signup-form" method="post" action="includes/signup.inc.php">
            <div class="signup-form-close-button"  style="float:right;text-decoration:none;color:black;"><a href="index.php">X</a></div><br>
            <h1 class="signup-form-title">SIGN UP</h1>
            <div class="signup-form-error"></div>
            <div class="signup-form-input-wrapper">
                <div class="signup-form-input">
                    <input type="text" class="signup-form-input-name" name="name" autofocus required placeholder="Enter Name">
                    <div class="signup-form-input-name-error" style="display:none;">Invalid Name.</div>
                </div>
                <div class="signup-form-input">
                    <input type="text" class="signup-form-input-email" name="email" autofocus required placeholder="Enter Email">
                    <div class="signup-form-input-email-error" style="display:none;">Invalid Email.</div>
                </div>
                <div class="signup-form-input">
                    <input type="text" class="signup-form-input-username" name="uid" autofocus required placeholder="Enter Username">
                    <div class="signup-form-input-username-error" style="display:none;">Invalid Username. Do not use special characters or punctuation marks.</div>
                </div>
                <div class="signup-form-input">
                    <input type="password" class="signup-form-input-password" name="pwd" autofocus required placeholder="Enter Password">
                    <div class="signup-form-input-password-error" style="display:none;">Invalid Password.</div>
                </div>
                <div class="signup-form-input">
                    <input type="password" class="signup-form-input-confirm-password" name="pwdrepeat" autofocus required placeholder="Confirm Password">
                    <div class="signup-form-input-confirm-error" style="display:none;text-align:center;font-size:14px;color:red;margin-bottom:9px;">Passwords not matching.</div>
                </div>
                <button class="signup-form-button" name="submit" type="submit">Sign Up</button>
            </div>
            <p class="signup-form-link-login" id="signup-to-login-link">Already have an account?<a href="login.php"> Login to your account.</a><br><br><span style="font-size:11.5px;">By creating this account you are agreeing to our <a href="#">Privacy Policy</a> & <a href="#">Cookie Policy</a>.</span></p>
        </form>
    </div>
    <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "invalidusername")
            {
                echo "<script>";
                echo "document.getElementsByClassName('signup-form-input-username-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('signup-form-input-username')[0].style.borderColor = 'red';";
                echo "</script>";
            }
            if($_GET["error"] == "invalidemail")
            {
                echo "<script>";
                echo "document.getElementsByClassName('signup-form-input-email-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('signup-form-input-email')[0].style.borderColor = 'red';";
                echo "</script>";
            }
            if($_GET["error"] == "passwordnotmatch")
            {
                echo "<script>";
                echo "document.getElementsByClassName('signup-form-input-confirm-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('signup-form-input-password')[0].style.borderColor = 'red';";
                echo "document.getElementsByClassName('signup-form-input-confirm-password')[0].style.borderColor = 'red';";
                echo "</script>";
            }
            if($_GET["error"] == "passwordinsufficientlength")
            {
                echo "<script>";
                echo "document.getElementsByClassName('signup-form-input-password-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('signup-form-input-password')[0].style.borderColor = 'red';";
                echo "</script>";
            }
            if($_GET["error"] == "uidExists")
            {
                echo "<script>";
                echo "document.getElementsByClassName('signup-form-input-username-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('signup-form-input-username')[0].style.borderColor = 'red';";
                echo "</script>";
            }
            if($_GET["error"] == "none")
            {
                header("location: index.php?error=none");
                exit();
            }
        }
    ?>
    