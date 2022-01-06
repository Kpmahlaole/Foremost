<?php

$title = 'Dashboard';

include "config.php";

?>


<?php include_once 'inc/header.php';?>

<h1>Dashboard</h1>

    <a href="newpolicy.php">New Business</a>
    <a href="capturepayment.php">Capture Payment</a>
    <a href="captureclaims.php">Capture Claims</a>

        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
            
<?php include_once 'inc/footer.php';?>