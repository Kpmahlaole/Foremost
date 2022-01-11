<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{    
     $nationalid = $_POST['nationalid'];
     $birthday = $_POST['birthday'];
     $age = $_POST['age'];
     $title = $_POST['title'];
     $givenname = $_POST['givenname'];
     $middleinitial = $_POST['middleinitial'];
     $surname = $_POST['surname'];
     $gender = $_POST['gender'];
     //$email = $_POST['email'];
     $streetaddress = $_POST['streetaddress'];
     $telephonenumber = $_POST['telephonenumber'];
     $suburb = $_POST['suburb'];
     $city = $_POST['city'];
     $province = $_POST['province'];
     $countryfull = $_POST['countryfull'];
     $zipcode = $_POST['zipcode'];
     $emailaddress = $_POST['emailaddress'];
     
     $sql1 = "INSERT INTO personalinformation (nationalid,birthday,age,title,givenname,middleinitial,surname,gender)
     VALUES ('$nationalid','$birthday','$age','$title','$givenname','$middleinitial','$surname','$gender')";
     $sql2 = "INSERT INTO contactinformation (telephonenumber,emailaddress,streetaddress,suburb,city,province,countryfull,zipcode)
     VALUES ('$telephonenumber','$emailaddress','$streetaddress','$suburb','$city','$province','$countryfull','$zipcode')";
     
     if (mysqli_query($conn, $sql1)) {
        echo "New record 1";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
     if (mysqli_query($conn, $sql2)) {
         echo " and 2";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);

     mysqli_close($conn);
}
}
?>