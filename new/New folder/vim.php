
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    	<style>
	.wrapper {
		margin-right: auto; /* 1 */
		margin-left:  auto; /* 1 */
		margin-top:  auto; /* 1 */
		margin-bottom:  auto; /* 1 */
		
		max-width: 960px; /* 2 */
		
		padding-right: 10px; /* 3 */
		padding-left:  10px; /* 3 */
		padding-top:  40px; /* 3 */
		padding-bottom:  10px; /* 3 */
	}
	</style>
  </head>
  <body>
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

<input type="radio" class="btn-check" name="Supervision1" id="success-outlined1" onclick="calculateTotal(this.form)" disabled>
<label class="btn btn-outline-primary" for="success-outlined1">Grocery Cover</label>

<input type="radio" class="btn-check" name="Supervision" id="success-outlined"  value="150.00" onclick="calculateTotal(this.form)">
<label class="btn btn-outline-primary" for="success-outlined">Yes, Please!</label>

<input type="radio" class="btn-check" name="Supervision" id="danger-outlined"  value="0.00" onclick="calculateTotal(this.form)">
<label class="btn btn-outline-primary" for="danger-outlined">No, Thank you</label>
</p>

  <div class="col-md-4 position-relative">
    <div class="input-group has-validation">
      <span class="input-group-text" id="validationTooltipUsernamePrepend">Your total is:</span>
      <input type="text" class="form-control" class="col-form-label" name="total" readonly="readonly" value="R0.00">
      <div class="invalid-tooltip">
        Please choose a unique and valid username.
      </div>
    </div>
  </div>


<br>
<br>


<tr><td><input type="submit" name="submit" value="Submit"/></td></tr> 

</form>
</div>




<script type="text/javascript">
function calculateTotal(CoverOption){
var total = 0;
var elems = CoverOption.getElementsByTagName('input');
for(var i = 0; i < elems.length; i++){
if((elems[i].type == "radio" || elems[i].type == "checkbox") && elems[i].checked){
total += parseFloat(elems[i].value);
}
}
total = total.toFixed(2)
CoverOption.total.value = "R" + total;
}

function myFunction() {
  alert("I am an alert box!");
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>