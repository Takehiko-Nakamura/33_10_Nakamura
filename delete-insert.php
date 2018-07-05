<?php

$id = $_POST["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("DELETE FROM item WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
  exit("SQLエラー:".$error[2]);
}else{
  header("Location: inventory.php");
  exit;
}
?>
