<?php 
$title = 'Capture Payment';
include_once 'inc/header.php';
?>

<div class="wrapper_payments">
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
</div>
<?php include_once 'inc/footer.php';?>
