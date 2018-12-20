<?php
echo "aaa";
echo $_POST['name_'];
try {
	$pdo = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
	$stmt = $pdo -> prepare("INSERT INTO subjects (id,sub_name) VALUES ('', :name)");
	$stmt -> bindParam(':name', $_POST['name_'], PDO::PARAM_STR);
	$stmt -> execute();
	// $sqla = "insert into subjects values(null, " .$_POST['name_']. ",null,null,null)";
	// echo $pdo->query($sqla);

// 	$sql = "INSERT INTO subjects (		
// 		id, sub_name
// 	) VALUES (
// 		11, 'hogehoge'
// 	)";
// echo $pdo->prepare($sql);
// $result = $pdo->query("insert into subjects values(null, 'hfdosafads',null,null,null);");
// echo $result;
// $result = $pdo->query('insert into subjects values(null,' . $_POST['name_'] . ',')


// $sql = $pdo->prepare ( 'insert into subjects values(null, ?, ?)' );
$sql = 'select * from subjects';
foreach ($pdo->query($sql) as $row) {
	print($row['id'].',');
	print($row['sub_name']);
	print('<br />');
}
} catch(PDOException $e) {	
	echo $e->getMessage();	
	die();
}

?>
