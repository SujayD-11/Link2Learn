<?php
    include_once 'header.php';
    include_once 'main_blur.php';
?>
<div class="login-form-container">
        <form class="login-form"  method="post" action="includes/login.inc.php">
        <div class="login-form-close-button"  style="float:right;text-decoration:none;color:black;"><a href="index.php" onclick="loginclose()">X</a></div>
            <h1 class="login-form-title">LOG IN</h1>
            <div class="login-form-error"></div>
            <div class="login-form-input-wrapper">
                <div class="login-form-input">
                    <input type="text" class="login-form-input-username" name="uid" autofocus placeholder="Enter Username/Email">
                    <div class="login-form-input-username-error" style="display:none;">Invalid username/email or password</div>
                </div>
                <div class="login-form-input">
                    <input type="password" class="login-form-input-password" name="pwd" autofocus placeholder="Enter Password">
                    <div class="login-form-input-password-error"></div>
                </div>
                <button class="login-form-button" name="submit" type="submit">Log In</button>
            </div>
            <p class="login-form-link-forgotPass" ><a href="#">Forgot your password?</a></p>
            <p class="login-form-link-signup" id="login-to-signup-link">Dont have an account?<a href="signup.php"> Create account.</a></p>
        </form>
    </div>
    <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "wrongLogin")
            {
                echo "<script>";
                echo "document.getElementsByClassName('login-form-input-username-error')[0].style.display = 'block';";
                echo "document.getElementsByClassName('login-form-input-password')[0].style.borderColor = 'red';";
                echo "document.getElementsByClassName('login-form-input-username')[0].style.borderColor = 'red';";
                echo "</script>";
            }
        }
    ?>
    <script>
        function loginclose()
        {
            document.getElementsByClassName("login-form-container").style.display = 'none';
        }
    </script>