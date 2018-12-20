<?php
try{
	$dbh = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
	$sql = 'select * from subjects';
	foreach ($dbh->query($sql) as $row) {
		// print($row['id'].',');
		if (!is_null($row['name_subject'])){
			print '<a href="'.$row['URL'].'">'.$row['name_subject'].'</a><br />';
			print('<br />');
		}
	}
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
?>
