    <?php
        include_once 'header.php';
    ?>
    <?php
        if(isset($_SESSION["useruid"]))
        {
            include_once 'main.php';
        }
        else{
            echo '<script>';
            echo 'setTimeout(function(){
            window.location.href = "signup.php";
            }, 5000);';
            echo '</script>';
            include_once 'main_blur.php';
        }
    ?>
