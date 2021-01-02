<?php
// I have enclosed database configuration here
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');


//Connecting to Database
$conn= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn==false)
{
    dir('Error: Connection Failed..');
}
?>