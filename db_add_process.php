<?php
$pdo = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
$sql = $pdo->prepare ( 'insert into subjects values(null, 'hogae',null,null,null);' );
$err = array ();
if (empty ( $_REQUEST ['name'] )) {
	$err ['name'] = '商品名を入力してください。';
}
if ((preg_match ( '/^[a-zA-Z]+$/', $_REQUEST ['name'] ) || preg_match ( "/^[一-龠]+$/u", $_REQUEST ['name'] )) && ! strlen ( $_REQUEST ['name'] ) == 0) {
	$err ['name'] = '商品名はひらがな又はカタカナで入力してください。';
}
// if (empty ( $_REQUEST ['price'] )) {
// 	$err ['price'] = '価格を入力してください。';
// } else if (! preg_match ( '/[0-9]+/', $_REQUEST ['price'] ) && ! strlen ( $_REQUEST ['price'] ) == 0) {
// 	$err ['price'] = '商品価格は整数で入力してください。';
// }
if (count ( $err ) >= 1) {
	if (isset ( $err ['name'] )) {
		echo $err ['name'].'</br>';
	}
	// if (isset ( $err ['price'] )) {
	// 	echo $err ['price'];
	// }
}else
	if ($sql->execute(
		[htmlspecialchars($_REQUEST['name'])]
		// [htmlspecialchars($_REQUEST['name']), $_REQUEST['price']]
	))
	{
		echo '追加に成功しました。';
	} else {
		echo '追加に失敗しました。';
	}
?>
