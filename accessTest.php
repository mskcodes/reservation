<?php
$USER = "saihe";
$PW   = "kyon3141";
$DB   = "saihe_reservation";
$HOST = "mysql515.db.sakura.ne.jp";
$dnsinfo = "mysql:dbname={$DB};host={$HOST};charset=utf8";
	try{
		$pdo = new PDO($dnsinfo,$USER,$PW);
		$res = "接続しました";
	}catch(PDOException $e){
		$res = $e->getMessage();
		//$res = "<br>接続できませんでした。";
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
<?php
echo $res;
echo "<br>";
echo "<br>";
echo "USE　:　" . $USER;
echo "<br>";
echo "PW　 :　" . $PW;
echo "<br>";
echo "HOST :　" . $HOST;
echo "<br>";
echo "DB　 :　" . $DB;
echo "<br>";
?>
</body>
</html>