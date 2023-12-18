<?php
define('DB_SERVER','localhost:3306');
define('DB_USER','cmsgroupproject');
define('DB_PASS' ,'cmsprogroupproject');
define('DB_NAME', 'cmspro');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>