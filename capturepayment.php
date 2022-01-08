<?php 
$title = 'Capture Payment';
include_once 'inc/header.php';
?>

<div class="wrapper_payments">


<h4>Capture Payment</h4>
<form action="cappayment.php" method="post">
       
<label for="policynumber" class="form-label"></label>
<div class="input-group mb-3">
<span class="input-group-text" id="policynumber">Policy Number:</span>
<input type="text" class="form-control" id="policynumber" name="policynumber" required aria-describedby="basic-addon3">
</div>

<label for="receiptnumber" class="form-label"></label>
<div class="input-group mb-3">
<span class="input-group-text" id="receiptnumber">Receipt Number:</span>
<input type="text" class="form-control" id="receiptnumber" name="receiptnumber" aria-describedby="basic-addon3">
</div>
  
<label for="basic-url" class="form-label"></label>
<div class="input-group mb-3">
<span class="input-group-text" id="receiptdate">Receipt Date:</span>
<input type="date" class="form-control" id="receiptdate" name="receiptdate" aria-describedby="basic-addon3">
</div>

<label for="basic-url" class="form-label"></label>
<div class="input-group mb-3">
<span class="input-group-text" id="amount">Amount:</span>
<input type="number" class="form-control" id="amount" name="amount" aria-describedby="basic-addon3">
</div>

<label for="basic-url" class="form-label"></label>
<div class="input-group mb-3">
  <span class="input-group-text" id="comments">Comments:</span>
  <input type="textarea" class="form-control" id="comments" name="comments" aria-describedby="basic-addon3">
</div>

  <input type="submit" value="Submit">
</form>
</div>





<?php include_once 'inc/footer.php';?>
