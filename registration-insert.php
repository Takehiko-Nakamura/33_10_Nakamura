<?php

if (
  !isset ($_POST["username"]) || $_POST["username"] == "" ||
  !isset ($_POST["lid"]) || $_POST["lid"] == "" ||
  !isset ($_POST["lpw"]) || $_POST["lpw"] == ""
){
  exit('<a href="registration.php">データの送信が出来なかったです。</a>');
}

$username = $_POST["username"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

include("functions.php");
$pdo = db_conn();

$sql = "INSERT INTO user (id, username, lid, lpw, kanri_flg, life_flg) 
VALUES (NULL, :a1, :a2, :a3, :a4,:a5)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $username, PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid, PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg, PDO::PARAM_STR);
$stmt->bindValue(':a5', $life_flg, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  errorMsg($stmt);
}else{
  header("Location: registration-response.php");
}
?>