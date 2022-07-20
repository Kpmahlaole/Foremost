<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('db_server', 'localhost');
define('db_username', 'root');
define('db_password', '');
define('db_name', 'foremost');

//define('DB_SERVER', 'sql6.freemysqlhosting.net');
//define('DB_USERNAME', 'sql6450823');
//define('DB_PASSWORD', 'bq5uI3Pkbc');
//define('DB_NAME', 'sql6450823');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(db_server, db_username, db_password, db_name);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>