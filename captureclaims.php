<?php 
$title = 'Capture Claims';
include_once 'inc/header.php';
?>

<h1>Capture Claims</h1>
        <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM payment");
?>

<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  <tr>
    <td>Policy Number</td>
    <td>Receipt Number</td>
    <td>Receipt Date</td>
    <td>Amount</td>
    <td>Comments</td>
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