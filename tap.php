<?php include_once 'inc/header.php';?>
<style>
.wrapper {
  margin-right: auto; /* 1 */
  margin-left:  auto; /* 1 */
  margin-top:  auto; /* 1 */
  margin-bottom:  auto; /* 1 */

  max-width: 960px; /* 2 */

  padding-right: 10px; /* 3 */
  padding-left:  10px; /* 3 */
  padding-top:  10px; /* 3 */
  padding-bottom:  10px; /* 3 */
}
</style>
<!-- Body section of website -->
    <div class="wrapper">

<form action="insert.php" method="post">
 
<div class="accordion" id="personalInformation">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Personal Information
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#personalInformation">
      <div class="accordion-body">
      
      <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
        <select class="form-select " id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingInputGrid">Title</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
          <input type="email" class="form-control form-control-sm" id="floatingInputGrid" placeholder="name@example.com" value="">
      <label for="floatingSelectGrid">Email address</label>
    </div>
  </div>
</div>
      
      
      
      <label for="title" class="form-label"></label>
      <select id="title" class="form-select form-select-sm" "name="title" type="text" tabindex="1">
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
        <option value="Dr">Dr</option>
        <option value="Ms">Ms</option>
        <option value="Prof">Prof</option>
      </select>
      
      <label for="middleinitial" class="form-label"></label>
      <input class="form-control form-control-sm" id="middleinitial" name="middleinitial" size="3" tabindex="1" maxlength="3" placeholder="Initial" min="1" max="3">
      
      <label for="givenname" class="form-label"></label>
      <input class="form-control form-control-sm" id="givenname" name="givenname" maxlength="30" placeholder="Given name" min="3" max="30">
 
      <label for="surname" class="form-label"></label>
      <input class="form-control form-control-sm" id="surname" name="surname" size="10" tabindex="3" placeholder="surname" min="3" max="30">
 
      <label for="nationalid" class="form-label"></label>
      <input class="form-control form-control-sm" id="nationalid" name="nationalid" type="text" size="13" tabindex="1" minlength="13" maxlength="13" placeholder="National ID" required>

      <label for="birthday" class="form-label"></label>
      <input class="form-control form-control-sm" id="birthday" name="birthday" type="date" size="10" tabindex="1" maxlength="10" placeholder="Birthday">

      <label for="age" class="form-label"></label>
      <input  id="age" name="age" type="text" size="3" tabindex="1" maxlength="3" placeholder="age">



      <label for="gender" class="form-label"></label>
      <select class="form-select form-select-sm" id="gender" name="gender" type="text" tabindex="2" maxlength="6" placeholder="gender">
        <option value="">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      

      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Contact Information
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<label for="telephonenumber" class="form-label"></label>
<input type="tel" id="telephonenumber" name="telephonenumber" size="10" maxlength="10" placeholder="phone number " min="10" max="10">

<label for="streetaddress" class="form-label"></label>
<input type="tel" id="streetaddress" name="streetaddress" size="10" maxlength="10" placeholder="streetaddress" min="10" max="10">

<label for="emailaddress" class="form-label"></label>
<input type="email" id="emailaddress" name="emailaddress" size="10" maxlength="50" placeholder="emailaddress" min="10" max="10" required>

<label for="suburb" class="form-label"></label>
<input id="suburb " name="suburb" size="20" maxlength="100" placeholder="suburb " min="3" max="50">

<label for="city" class="form-label"></label>
<input id="city" name="city" type="text" size="15" maxlength="50" placeholder="city" min="3" max="50">

<label for="province" class="form-label"></label>
<input id="province" name="province" size="5" maxlength="20" placeholder="province" min="4" max="12">

<label for="countryfull" class="form-label"></label>
<input id="countryfull" name="countryfull" size="5" maxlength="4" placeholder="countryfull" min="4" max="12">

<label for="zipcode" class="form-label"></label>
<input id="zipcode" name="zipcode" size="5" maxlength="4" placeholder="zipcode" min="4" max="4">

      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Policy Information
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foremost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT min, givenname, surname FROM personalinformation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["min"]. " - Name: " . $row["givenname"]. " " . $row["surname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
      </div>
    </div>
  </div>
</div>
<br>
<input type="submit" class="btn btn-primary" name="submit" value="Submit">
</form>

 </div> 

 
<?php include_once 'inc/footer.php';?>