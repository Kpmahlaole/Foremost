<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM policyuseraccount WHERE id = ?";

    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $id = $row["id"];
                $gender = $row["gender"];
                $title = $row["title"];
                $givenname = $row["givenname"];
                $middleinitial = $row["middleinitial"];
                $surname = $row["surname"];
                $streetaddress = $row["streetaddress"];
                $city = $row["city"];
                $zipcode = $row["zipcode"];
                $emailaddress = $row["emailaddress"];
                $username = $row["username"];
                $password = $row["password"];
                $birthday = $row["birthday"];
                $telephonenumber = $row["telephonenumber"];
                $age = $row["age"];
                $occupation = $row["occupation"];
                $company = $row["company"];
                $nationalid = $row["nationalid"];
                $countryfull = $row["countryfull"];
				$memberplan = $row["memberplan"];
                $premium = $row["premium"]; 
				$dependent1 = $row["dependent1"];              
                $dependent2 = $row["dependent2"];
				$dependent1relationship = $row["dependent1relationship"];              
                $dependent2relationship = $row["dependent2relationship"];	
				
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<?php require_once"includes/header.php"?>

    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1 class="mt-5 mb-3">Member Policy Details</h1>
			
            <br>
			<div class="container">
              <div class="row">
			  
                <div class="col">
                  <label><b>Membership Number</b></label>
                  <p><?php echo $row["id"];?></p>
				  <label><b>Name and Surname</b></label><p>
				  <?php echo $row["title"]; ?>
				  <?php echo $row["givenname"];?>
				  <?php echo $row["surname"]; ?>
				  </p>
				</div>
				  
                <div class="col">
                  <label><b>National ID Number</b></label>
                  <p><?php echo $row["nationalid"]; ?></p>
				  <label><b>Premium</b></label>
                  <p><?php echo $row["premium"]; ?>
                  </p>
                </div>
				
                <div class="col">
                  <label><b>Member Plan</b></label>
                  <p><?php echo $row["memberplan"]; ?></p>
                </div>
				
                <div class="col">
                  <label><b>Policy Status</b></label>
                  <p><?php echo $row["policystatus"]; ?></p>
                </div>
              </div>
			  
			<br>

		<div class="row">
			<div class="col order-last">
			<label><b>Address</b></label>
				<p><?php echo $row["streetaddress"]; ?>
						<?php echo $row["city"]; ?>,
						<?php echo $row["zipcode"]; ?></p>
			</div>
		
			<div class="col">
			<label><b>Email Address</b></label>
			<p><?php echo $row["emailaddress"];?></p>
			</div>
		
			<div class="col order-first">
			<label><b>Telephone Number</b></label>
			<p><?php echo $row["telephonenumber"]; ?></p>
			</div>
		
		</div>
			
			</div>
          </div>
        </div>
		 <br/> 


<h4 class="mt-4 mb-4">Dependents Covered</h4>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First and Last name</th>
      <th scope="col">Relationship</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row["dependent1"]; ?></td>
      <td><?php echo $row["dependent1relationship"]; ?></td>
      <td><?php echo $row["policystatus"]; ?></td>
    </tr>
	
    <tr>
      <th scope="row">2</th>
      <td><?php echo $row["dependent2"]; ?></td>
      <td><?php echo $row["dependent2relationship"]; ?></td>
      <td><?php echo $row["policystatus"]; ?></td>
    </tr>


  </tbody>
</table> <br/> <br/>
        <p>
          <a href="memberpolicymanagement.php" class="btn btn-primary">Back</a>
		  
        </p>
      </div>
    </div>
	
<?php require_once"includes/footer.php"?>
