<?php
try{
	$dbh = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
	$sql = 'select * from subjects';
	foreach ($dbh->query($sql) as $row) {
		print($row['id'].',');
		print($row['sub_name']);
		print('<br />');
	}
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
?>
