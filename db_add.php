<p>商品を追加します。</p>
<form action="show/" method="post">
商品名<input type="text" name="name_">
価格<input type="text" name="price">
<input type="submit" value="追加">
</form>

<?php
echo $_POST['name'];
$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'wordpressuser';
$password = 'Vista';
try{
	$dbh = new PDO($dsn, $user, $password);
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
