<?php 
$title = 'Capture Payment';
include_once 'inc/header.php';
?>

<h1>Capture Payment</h1>
       <form action="cappayment.php" method="post">
  <label for="fname">Policy Number:</label>
  <input type="text" class="form-label" id="policynumber" name="policynumber" required><br>
  
  <label for="lname">Receipt Number:</label>
  <input type="text" id="receiptnumber" name="receiptnumber"><br>
  
  <label for="lname">Receipt Date:</label>
  <input type="date" id="receiptdate" name="receiptdate"><br>
  
  <label for="lname">Amount:</label>
  <input type="text" id="amount" name="amount"><br>
  
  <label for="lname">Comments:</label>
  <input type="textfield" id="comments" name="comments"><br>
  <input type="submit" value="Submit">
</form>


<br><br><br>
<h2>Search Policy</h2>
<form action="search.php" method="post">
  <input type="search" class="form-label" id="policynumber" name="policynumber" required>
  <input type="submit" value="Search">
</form>

<br><br><br>

<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM payment");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
    <td><b>Policy Number</b></td>
    <td><b>Receipt Number</b></td>
    <td><b>Receipt Date</b></td>
    <td><b>Amount</b></td>
    <td><b>Comments</b></td>
  </tr>
  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>

<tr>
    <td><?php echo $row["policynumber"]; ?></td>
    <td><?php echo $row["receiptnumber"]; ?></td>
    <td><?php echo $row["receiptdate"]; ?></td>
    <td><?php echo $row["amount"]; ?></td>
    <td><?php echo $row["comments"]; ?></td>
</tr>

<?php
$i++;
}
?>

</table>
 <?php
}
else{
    echo "No result found";
}
?>

<?php include_once 'inc/footer.php';?>
