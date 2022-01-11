<?php require_once "inc/header.php" ?>

<h3><?php echo "Good day' " . get_current_user();?></h3>
<div class="wrapper_search">
  <div class="container-sm" >
    <form action="searchresults.php" method="post">
      <div class="input-group mb-3">
      <label class="input-group-text" for="inputGroupSelect01">Search by:</label> 
      <select class="form-select" id="inputGroupSelect01" name="column">
        <option value="id" selected>Member ID</option>
		<option value="givenname">First Name</option>
		<option value="surname">Surname</option>
		<option value="nationalid">Identity Number</option>
		<option value="telephonenumber">Cell Phone</option>	
		<option value="emailaddress">Email</option>
		<option value="streetaddress">Address</option>
      </select>
    <br/>
</div>
	  
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search Customer" autocomplete="off" required="yes"
        aria-describedby="button-addon2" pattern=".{3,}" title="3 or more characters"/>
        <br />
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" class="btn btn-success">Search Party</button>
      </div>
    </form>
    
</div>

<?php require_once "inc/footer.php" ?>


