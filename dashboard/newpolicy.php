<?php require_once"inc/header.php"?>
<link rel="stylesheet" type="text/css" href="style.css">  

<div class="wrapper">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Protection of Personal Information Act (POPI Act)!</strong> 
  is South Africa's data privacy law that empowers citizens with enforceable rights over their personal information, requires websites, companies and organizations to live up to minimum conditions for lawful processing.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


<hr class="my-4">
<legend><b>Choose Plan</b></legend>
<div class="col-sm-6">
<select class="form-select form-select">
    <option disabled selected>Select Plan..</option>
	<option name="R150" value="plan1">Plan 1</option>
	<option name="R150" value="plan2">Plan 2</option>
	<option name="R150" value="plan3">Plan 3</option>
	<option name="R150" value="plan4">Plan 4</option>
	<option name="R150" value="plan5">Plan 5</option>
</select>
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
<legend><b>Contact Information</b></legend>
<div class="row g-3">
<div class="col-sm-6">
<label class="form-label" for="telephonenumber">Telephone number:</label>
<input type="text" class="form-control" id="telephonenumber" type="text"">
</div>

<div class="col-sm-6">
<label class="form-label" for="emailaddress">Email Address:</label>
<input type="email" class="form-control" id="emailaddress">
</div>

<div class="col-sm-6">
<label class="form-label" for="streetaddress">Street Address:</label>
<input type="text" class="form-control" id="streetaddress" type="streetaddress">
</div>

<div class="col-sm-6">
<label class="form-label" for="city">City:</label>
<input type="text" class="form-control" id="city" type="text">
</div>

<div class="col-sm-6">
<label class="form-label" for="countryfull">Country:</label>
<input type="text" class="form-control" id="countryfull" type="countryfull">
</div>

<div class="col-sm-6">
<label class="form-label" for="city">zipcode:</label>
<input type="text" class="form-control" id="zipcode" type="text">
</div>

<hr class="my-4">
<legend><b>Employment Information</b></legend>
<div class="col-sm-6">
<label class="form-label" for="premium">company:</label>
<input type="text" class="form-control" id="myText" type="text" value="Premium">
</div>

<div class="col-sm-6">
<label class="form-label" for="occupation">occupation:</label>
<input type="text" class="form-control" id="occupation" type="text">
</div>

<br>
<hr class="my-4">
<legend><b>Dependent Information</b></legend>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First name</th>
      <th scope="col">Surname</th>
      <th scope="col">ID Number / D.O.B</th>
      <th scope="col">Relationship</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td><input type="text" name="dep1name" id="dep1name" min="3" required="yes"/></td>
      <td><input type="text" name="dep1surname" id="dep1surname" min="3" required="yes"/></td>
      <td><input type="text" name="dep1idnum" id="dep1idnum" min="3" required="yes"/></td>
      <td><input type="text" name="dep1rel" id="dep1rel" min="3" required="yes"/></td>
    </tr>
	
      <tr>
      <th scope="row">2</th>
      <td><input type="text" name="dep1name" id="dep1name" min="3" required="yes"/></td>
      <td><input type="text" name="dep1surname" id="dep1surname" min="3" required="yes"/></td>
      <td><input type="text" name="dep1idnum" id="dep1idnum" min="3" required="yes"/></td>
      <td><input type="text" name="dep1rel" id="dep1rel" min="3" required="yes"/></td>
    </tr>
	
	<tr>
      <th scope="row">3</th>
      <td><input type="text" name="dep1name" id="dep1name" min="3" required="yes"/></td>
      <td><input type="text" name="dep1surname" id="dep1surname" min="3" required="yes"/></td>
      <td><input type="text" name="dep1idnum" id="dep1idnum" min="3" required="yes"/></td>
      <td><input type="text" name="dep1rel" id="dep1rel" min="3" required="yes"/></td>
    </tr>
	
	    <tr>
      <th scope="row">4</th>
      <td><input type="text" name="dep1name" id="dep1name" min="3" required="yes"/></td>
      <td><input type="text" name="dep1surname" id="dep1surname" min="3" required="yes"/></td>
      <td><input type="text" name="dep1idnum" id="dep1idnum" min="3" required="yes"/></td>
      <td><input type="text" name="dep1rel" id="dep1rel" min="3" required="yes"/></td>
    </tr>
  </tbody>
</table>
</div>

<hr class="my-4" >
<h4 class="mb-3">Prefered Payment Method</h4>
<div class="form-check">
<input class="form-check-input" id="same-address" type="checkbox">
<label class="form-check-label" for="same-address">checkbox option 1</label>
</div>

<div class="form-check">
<input class="form-check-input" id="same-address" type="checkbox">
<label class="form-check-label" for="same-address">checkbox option 1</label>
</div>

<hr class="my-4">

<h4 class="mb-3">Terms and Conditions</h4>

<div class="my-3">
<div class="form-check">
<input checked class="form-check-input" id="credit" name="paymentMethod" required="" type="radio"> <label class="form-check-label" for="credit">Credit card</label>
</div>

<div class="form-check">
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
