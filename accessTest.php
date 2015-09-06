<?php
$USER = "saihe";
$PW   = "xwkx4pz56p";
//パスワードが違うとエラーが出る
$dnsinfo = "mysql:dbname=saihe_reservation;host=saihe.sakura.ne.jp;charset=utf8";
	try{
		$pdo = new PDO($dnsinfo,$USER,$PW);
		$res = "接続しました";
	}catch(PDOException $e){
		//$res = $e->getMessage();
		$res = "<br>接続できませんでした。";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>データベース接続テスト</title>
</head>

<body>
<h1>PHPでMySQLに接続する</h1>
<?php echo $res; ?>
</body>
</html>