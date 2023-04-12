<?php
    include_once 'header.php';
    include_once 'main.php';
?>
<div class="interestForm-container">
    <h2 class="title">Please choose the domain that interests you the most</h2>
    <form class="interestForm-form" action="includes/interestForm.inc.php" method="POST">
        <label>Domains:</label><br>
        <input class="interestForm-input" type="radio" name="interest" value="psychology"> Psychology<br>
        <input class="interestForm-input" type="radio" name="interest" value="buisness"> Buisness<br>
        <input class="interestForm-input" type="radio" name="interest" value="webdevelopment"> Web Devolopment<br>
        <input class="interestForm-input" type="radio" name="interest" value="cybersecurity"> Cyber Security<br><br>
        <input type="submit" class="interestForm-submit-btn" name="interest-submit">
    </form>
</div>