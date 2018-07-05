<?php

if (
  !isset ($_POST["part"]) || $_POST["part"] == "" ||
  !isset ($_POST["serial"]) || $_POST["serial"] == "" ||
  !isset ($_POST["qty"]) || $_POST["qty"] == ""
){
  exit('<a href="inventory.php">データの送信が出来なかったです。</a>');
}

$part = $_POST["part"];
$serial = $_POST["serial"];
$qty = $_POST["qty"];
$id = $_POST["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE item SET part=:a1, serial=:a2, qty=:a3 WHERE id=:id");
$stmt->bindValue(':a1', $part, PDO::PARAM_STR);
$stmt->bindValue(':a2', $serial, PDO::PARAM_STR);
$stmt->bindValue(':a3', $qty, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
}else{
  header("Location: inventory.php");
}
?>