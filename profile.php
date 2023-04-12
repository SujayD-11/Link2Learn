<?php
    include 'header.php';
    include 'includes/dbh.inc.php';
    $user = $_SESSION['username'];
    echo "<br><br><h3>$user</h3>";
    // $query1 = "select * from employee where employee_id=$id";
    // mysql_query($query1, $connection);
    // while ($row1 = mysql_fetch_array($query1))
    // {}
?>
