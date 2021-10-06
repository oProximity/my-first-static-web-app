<?php

$host = 'assignment3-database-mysql.ctr5gqfznkbs.us-east-2.rds.amazonaws.com';
$username = 'x12124';
$password = 'miniclips';
$db_name = 'assignment3-database-mysql'
$conn = mysql_init();
mysql_real_connect($conn, $host, $username, $password, $db_name, 3306);

if(mysql_connect_errno($conn)) {
	die('Failed to connect to mySQL: ');
}

$sql = 'SELECT * FROM Students';
$result = mysql_query($conn, $sql);

while($row = mysql_fetch_assoc($result)) {
	echo"database says {$row} <br>";
}

mysql_close($conn);

?>