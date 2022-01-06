<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "foremost");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Escape user inputs for security
$policynumber = $mysqli->real_escape_string($_REQUEST['policynumber']);
$receiptnumber = $mysqli->real_escape_string($_REQUEST['receiptnumber']);
$receiptdate = $mysqli->real_escape_string($_REQUEST['receiptdate']);
$amount = $mysqli->real_escape_string($_REQUEST['amount']);
$comments = $mysqli->real_escape_string($_REQUEST['comments']);
 
// Attempt insert query execution
$sql = "INSERT INTO payment (policynumber, receiptnumber, receiptdate, amount, comments) VALUES ('$policynumber', '$receiptnumber', '$receiptdate', '$amount', '$comments')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    header("location: capturepayment.php");
                //exit();
    
    
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();
?>
