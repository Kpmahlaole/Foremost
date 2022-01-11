<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     //$nationalid = $_POST['nationalid'];
     //$birthday = $_POST['birthday'];
     //$age = $_POST['age'];
     //$title = $_POST['title'];
     //$givenname = $_POST['givenname'];
     //$middleinitial = $_POST['middleinitial'];
     //$surname = $_POST['surname'];
     //$gender = $_POST['gender'];
     $email = $_POST['email'];
     $streetaddress = $_POST['streetaddress'];
     //$telephonenumber = $_POST['telephonenumber'];
     //$suburb = $_POST['suburb'];
     //$city = $_POST['city'];
     //$province = $_POST['province'];
     //$countryfull = $_POST['countryfull'];
     //$zipcode = $_POST['zipcode'];

     $sql = "INSERT INTO contactinformation (email,streetaddress,age,title,givenname,middleinitial,surname,gender)
     VALUES ('$nationalid','$birthday','$age','$title','$givenname','$middleinitial','$surname','$gender')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Success</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<br>
<a href="tap.php" button type="button" class="btn btn-info">Info</a></button>
<button type="button" class="btn btn-link">Link</button>
</body>
</html>