<?php
$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'wordpressuser';
$password = 'Vista';
try{
	$dbh = new PDO($dsn, $user, $password);
	$sql = 'select * from subjects';
	foreach ($dbh->query($sql) as $row) {
		print($row['id'].',');
		print($row['name']);
		print('<br />');
	}
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
?>
