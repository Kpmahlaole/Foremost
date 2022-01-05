<<<<<<< Updated upstream
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
=======
<?php require_once"inc/header.php"?>
<link rel="stylesheet" type="text/css" href="css/style.css"> 
<p></p>
<div class="wrapper">
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#captureapayment">
  Capture a payment
</button>

<!-- captureapayment -->
<div class="modal fade" id="captureapayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong>Capture Payment</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  
<form>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Policy Number:</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Receipt Number: </span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Receipt Date: </span>
  <input type="date" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Amount: </span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">Comments:</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Process</button>
      </div>
    </div>
  </div>
</div>
</form>

<?php require_once"inc/footer.php"?>
>>>>>>> Stashed changes
