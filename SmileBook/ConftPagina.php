<?php
define ('DB_CHARSET', 'utf-8');
define ('DB_HOST','localhost');
define ('DB_PASS', 'oscar123');
define ('DB_USER', 'oscar2');
define ('DB_NAME', 'smilebook');

$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$conn) {

die("Connection failed: " .mysqli_connect_error());

}/*else
echo "Connected successfully"; */
//mysqli_close ($conn);

?>