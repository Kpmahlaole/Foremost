<?php 
$databaseHost = 'localhost';
$databaseName = 'foremost'; 
$databaseUsername = 'root'; 
$databasePassword = '';  

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(isset($_POST['submit']))

{
$name = $_POST['name'];
$gender = $_POST['gender'];
$result = mysqli_query($mysqli,"insert into data values('','$name','$gender')");
if($result){
echo "Data inserted ";
}
else{
echo "Something wrong";

}
}
?>

<form action="" method="post">
Name:- <input type="text" name="name">

<br>
Gender :-
<input type="radio" name="gender" value="Male">Male 
<input type="radio" name="gender" value="Female">Female 
<input type="submit" value="Submit" name="submit">

</form>