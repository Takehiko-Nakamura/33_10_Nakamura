<?php
session_start();
include("functions.php");

$pdo = db_conn();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

$stmt = $pdo->prepare("SELECT * FROM user WHERE lid=:lid AND lpw=:lpw AND life_flg=0");
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$res = $stmt->execute();

if($res==false){
  errorMsg($stmt);
}

$val = $stmt->fetch();

if($val["id"] != "" ){
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["username"]  = $val['username'];
  header("Location: index.php");
}else{
  header("Location: login.php");
}

exit();
?>

