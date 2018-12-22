<?php
$today = new DateTime();
$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
echo $today->format('Y-m-d H:i:s');
try{
	$dbh = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
	$sql = 'select * from subjects';
	foreach ($dbh->query($sql) as $row) {
		if (!is_null($row['apply_deadline'])){
			if(strtotime($today->format('Y-m-d H:i:s')) < strtotime($row['apply_deadline'])){
				print("ok");
			}
			else{
				print("ng");
			}
			print('<br />');
		}
	}
}catch (PDOException $e){
	print('Error:'.$e->getMessage());
	die();
}
?>
