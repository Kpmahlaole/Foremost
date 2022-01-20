<?php require_once 'inc/header.php' ?>

<div class="wrapper">
<form name="CoverOption" method="post">
<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input type="radio" class="btn-check" name="Session" id="btnradio1"  value="180.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btnradio1">Silver Cover (A)</label>

  <input type="radio" class="btn-check" name="Session" id="btnradio2"  value="250.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btnradio2">Platinum Cover (B)</label>

  <input type="radio" class="btn-check" name="Session" id="btnradio3"  value="350.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btnradio3">Gold Cover (C)</label>
</div>
<br><br>

<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
  <input type="radio" class="btn-check" id="btncheck0"  name="exteamem" value="0.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck0"> 0</label>

  <input type="radio" class="btn-check" id="btncheck1"  name="exteamem" value="20.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck1"> 1</label>
  
    <input type="radio" class="btn-check" id="btncheck2"  name="exteamem" value="40.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck2"> 2</label>

  <input type="radio" class="btn-check" id="btncheck3"  name="exteamem" value="60.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck3"> 3</label>

  <input type="radio" class="btn-check" id="btncheck4"  name="exteamem" value="80.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck4"> 4</label>
  
  <input type="radio" class="btn-check" id="btncheck5"  name="exteamem" value="100.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck5"> 5</label>
  
  <input type="radio" class="btn-check" id="btncheck6"  name="exteamem" value="120.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck6"> 6</label>
  
  <input type="radio" class="btn-check" id="btncheck7"  name="exteamem" value="140.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck7"> 7</label>
  
  <input type="radio" class="btn-check" id="btncheck8"  name="exteamem" value="160.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck8"> 8</label>
  
  <input type="radio" class="btn-check" id="btncheck9"  name="exteamem" value="180.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck9"> 9</label>
  
  <input type="radio" class="btn-check" id="btncheck10"  name="exteamem" value="200.00" onclick="calculateTotal(this.form)">
  <label class="btn btn-outline-primary" for="btncheck10"> 10</label>

</div>
<br>
<br>


  <div class="col-md-6 position-relative">
    <div class="input-group has-validation">
       <span class="input-group-text" id="validationTooltipUsernamePrepend">Grocery Cover:</span>
	   
	  <input type="radio" class="btn-check" name="Supervision" id="success-outlined"  value="150.00" onclick="calculateTotal(this.form)">
<label class="btn btn-outline-primary" for="success-outlined">Yes, Please!</label>

<input type="radio" class="btn-check" name="Supervision" id="danger-outlined"  value="0.00" onclick="calculateTotal(this.form)">
<label class="btn btn-outline-primary" for="danger-outlined">No, Thank you</label>
	  
    </div>
  </div>
  
  
  <br>
<br>

  <div class="col-md-4 position-relative">
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">Your total is:</span>
      <input type="text" class="form-control" class="col-form-label" name="total" readonly="readonly" value="R0.00">
    </div>
  </div>
  
  
</form>
</div>

<?php require_once 'inc/footer.php' ?>