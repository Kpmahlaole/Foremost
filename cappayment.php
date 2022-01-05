<?php require_once"includes/header.php"?>

<div class="wrapper">
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "genesispro");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$membershipnumber = $mysqli->real_escape_string($_REQUEST['membershipnumber']);
$receiptnumber = $mysqli->real_escape_string($_REQUEST['receiptnumber']);
$receiptdate = $mysqli->real_escape_string($_REQUEST['receiptdate']);
$amount = $mysqli->real_escape_string($_REQUEST['amount']);
$comments = $mysqli->real_escape_string($_REQUEST['comments']);
 
// Attempt insert query execution
$sql = "INSERT INTO payment (membershipnumber, receiptnumber, receiptdate, amount, comments) VALUES ('$membershipnumber', '$receiptnumber', '$receiptdate', '$amount', '$comments')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
</div>
<?php require_once"includes/footer.php"?>