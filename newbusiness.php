<?php 

$title = 'New Policy';

include_once 'inc/header.php';

?>

<style>
	.wrapper {
	 max-width: 786px;
	 
	 margin-right:auto;
	 margin-left:auto;
	 margin-top:auto;
	 margin-bottom:auto;
	 
	 padding-right:10px;
	 padding-left:10px;
	 padding-top:10px;
	 padding-bottom:10px
	 }
	</style>


<div class="wrapper">
<h4>1. Personal Details of Principal Member</h4> 
<br>	
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-2">
    <label for="validationCustom01" class="form-label">Title</label>
        <select type="text" class="form-control" id="validationCustom02" value="" required>
	 <option value=""></option>
	 <option value="Mr">Mr</option>
	 <option value="Ms">Ms</option>
	 <option value="Miss">Miss</option>
	 <option value="Mrs">Mrs</option>
	 <option value="Maste">Master</option>
	 <option value="Maid">Dr</option>
	 <option value="Madam">Proff</option> 
	</select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-2">
    <label for="validationCustom02" class="form-label">Initial</label>
    <input type="text" class="form-control" id="validationCustom02" value="" maxlength="2" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Surname</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
      <div class="col-md-4">
    <label for="validationCustom02" class="form-label">ID Number</label>
    <input type="text" class="form-control" id="validationCustom02" value="" maxlength="13" required>
    <div class="valid-feedback">
      Voila!
    </div>
  </div>
  
      <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks great!
    </div>
  </div>
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Marital Status</label>
    <select type="text" class="form-control" id="validationCustom02" value="" required>
	 <option value=""></option>
	 <option value="Single">Single</option>
	 <option value="Married">Married</option>
	 <option value="Divorced">Divorced</option>
	 <option value="Widowed">Widowed</option>
	</select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail address</label>
    <input type="email" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks great!
    </div>
  </div>
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Cell number</label>
    <input type="tel" class="form-control" id="validationCustom02" value="" maxlength="10" required>
    <div class="valid-feedback">
      Looks great!
    </div>
  </div>
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Alternative number</label>
    <input type="tel" class="form-control" id="validationCustom02" value="" maxlength="10" required>
    <div class="valid-feedback">
      Looks great!
    </div>
  </div>



  <div class="col-md-4">
    <label for="validationCustom03" class="form-label">Physical Address</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>

  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Suburb</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  
    <div class="col-md-3">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  
      <div class="col-md-2">
    <label for="validationCustom03" class="form-label">Postal Code</label>
    <input type="text" class="form-control" id="validationCustom03" min="10" maxlength="4" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-success" type="submit">Submit form</button>
  </div>
</form>
	
</div>
<script src="script.js"></script>      
<?php include_once 'inc/footer.php';?>