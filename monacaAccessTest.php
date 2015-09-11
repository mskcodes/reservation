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
header("Content-Type: text/javascript; charset=utf-8");
echo json_encode($rse);
die;
?>
