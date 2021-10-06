<?php

$host = 'assignment3-database-mysql.ctr5gqfznkbs.us-east-2.rds.amazonaws.com';
$username = 'x12124';
$password = 'miniclips';
$db_name = 'assignment3-database-mysql'
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

if(mysqli_connect_errno($conn)) {
	die('Failed to connect to mySQL: ');
}

$sql = 'SELECT * FROM Students';
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
	echo"database says {$row} <br>";
}

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Vanilla JavaScript App</title>
</head>
<body>
<h1>hello</h1>
</body>
</html>