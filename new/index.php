<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  
  
  <?php require_once 'os.php' ?>
  
  <div class="wrapper">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Personal</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cover</button>
  </li>
  
    <li class="nav-item" role="presentation">
    <button class="nav-link" id="other-tab" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">other</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <title>Hello, New Member!</title>
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
  </head>
  <body>
  
<br>

<h5>1. Personal Details of Principal Member</h5>
<br>	
<form class="row g-3 needs-validation" novalidate action="insert.php" method="post">
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
    <input type="text" class="form-control" id="validationCustom02" value="" required>
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
    <input type="text" class="form-control" id="validationCustom02" value="" required>
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
    <input type="tel" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks great!
    </div>
  </div>
  
  
    <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Alternative number</label>
    <input type="tel" class="form-control" id="validationCustom02" value="" required>
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
    <input type="text" class="form-control" id="validationCustom03" required>
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

	
</div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <fieldset>
<form name="CoverOption" method="post">

<fieldset>
<strong>Cover Option</strong><br />
<input type="radio" name="Session" value="180.00" onclick="calculateTotal(this.form)" />Silver Cover (A)<br />
<input type="radio" name="Session" value="250.00" onclick="calculateTotal(this.form)" />Platinum Cover (B)<br />
<input type="radio" name="Session" value="350.00" onclick="calculateTotal(this.form)" />Gold Cover (C)<br />

<input type="checkbox" name="Discount_one" value="20.00" onclick="calculateTotal(this.form)"/>1 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_two" value="40.00" onclick="calculateTotal(this.form)"/>2 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_three" value="60.00" onclick="calculateTotal(this.form)"/>3 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_four" value="80.00" onclick="calculateTotal(this.form)"/>4 Extra Member
</fieldset>

<fieldset>
<legend><strong>Optional Extras</strong><br/></legend>
<p><strong>Grocery Cover</strong><br />
<input type="radio" name="Supervision" value="150" onclick="calculateTotal(this.form)" />Yes<br />
<input type="radio" name="Supervision" value="0" onclick="calculateTotal(this.form)" />No, Thank you<br />

<input type="checkbox" name="Discount_one" value="20.00" onclick="calculateTotal(this.form)"/>1 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_two" value="20.00" onclick="calculateTotal(this.form)"/>2 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_three" value="20.00" onclick="calculateTotal(this.form)"/>3 Extra Member&nbsp;&nbsp;&nbsp;
<input type="checkbox" name="Discount_four" value="20.00" onclick="calculateTotal(this.form)"/>4 Extra Member

</fieldset>


<fieldset>
<p><strong>Your total is:</strong><input type="text" name="total" readonly onfocus="this.blur()" value="R0.00" />
</form>
  
  </div>
  <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
  
  <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
  <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
</div>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
</div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
      <button class="btn btn-success" type="submit">Submit form</button>
 
</form>
  
  </div>
</div>
 </div>
 <script type="text/javascript">
<!--

</script>
 
 <script src="script.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>