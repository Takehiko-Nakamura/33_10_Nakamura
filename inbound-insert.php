<?php

if (
  !isset ($_POST["part"]) || $_POST["part"] == "" ||
  !isset ($_POST["serial"]) || $_POST["serial"] == "" ||
  !isset ($_POST["qty"]) || $_POST["qty"] == ""
){
  exit('<a href="inbound.php">データの送信が出来なかったです。</a>');
}

$part = $_POST["part"];
$serial = $_POST["serial"];
$qty = $_POST["qty"];

include("functions.php");
$pdo = db_conn();

$sql = "INSERT INTO item (id, part, serial, qty, indate) 
VALUES (NULL, :a1, :a2, :a3, sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $part, PDO::PARAM_STR);
$stmt->bindValue(':a2', $serial, PDO::PARAM_STR);
$stmt->bindValue(':a3', $qty, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
}else{
  header("Location: inbound.php");
}
?>