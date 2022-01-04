<?php require_once"inc/header.php"?>
<link rel="stylesheet" type="text/css" href="css/style.css"> 

<p></p>

<div class="wrapper">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Protection of Personal Information Act (POPI Act)!</strong> 
  is South Africa's data privacy law that empowers citizens with enforceable rights over their personal information, requires websites, companies and organizations to live up to minimum conditions for lawful processing.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<hr class="my-4">
<legend><b>Personal Information	</b></legend>

<div class="row g-3">
<div class="col-sm-6">
<label class="form-label" for="title">Title:</label>
<select class="form-select form-select">
<option value="">Select...</option>
<option value="Mr">Mr</option>
<option value="Mrs">Mrs</option>
<option value="Mrs">Mrs</option>
<option value="Mx">Mx</option>
<option value="Miss">Miss</option></select>
</select>

</div>

<div class="col-sm-6">
<label class="form-label" for="givenname">First name:</label>
<input type="text" class="form-control" id="givenname" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="middleinitial">Initial:</label>
<input type="text" class="form-control" id="middleinitial" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="surname">Surname:</label>
<input type="text" class="form-control" id="surname" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="nationalid">National ID Number:</label>
<input type="text" class="form-control" id="nationalid" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="gender">Gender:</label>
<input type="text" class="form-control" id="gender" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="countryfull">Birthday:</label>
<input type="date" class="form-control" id="countryfull">
</div>

<div class="col-sm-6">
<label class="form-label" for="city">Age:</label>
<input type="text" class="form-control" id="zipcode" type="text">
</div>

<hr class="my-4">
<button type="submit" class="btn btn-success">Proceed</button>
<button type="button" class="btn btn-danger" onclick="myCancelFunction()" >Cancel</button>
<br>
<p id="demo"></p>

</div>
</main>
</div>
<br>
</div>
</div>
<?php require_once"inc/footer.php"?>
