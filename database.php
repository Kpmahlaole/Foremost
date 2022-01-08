<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"foremost");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>

//<?php
//$url='sql6.freemysqlhosting.net';
//$username='sql6450823';
//$password='bq5uI3Pkbc';
//$conn=mysqli_connect($url,$username,$password,"sql6450823");
//if(!$conn){
// die('Could not Connect My Sql:' .mysql_error());
//}
//?>