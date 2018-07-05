<?php
$id = $_GET["id"];

include("functions.php");
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM item WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false){
  errorMsg($stmt);
}else{
    $view = $stmt->fetch();
}
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/reset.css">

<style>
    table {
        margin:0 auto;
        width: 80%;
        border-collapse: collapse;
        font-size: 16px;
        margin-top: 24px;
        margin-bottom: 24px;
    }

    th {
        border: #e3e3e3 1px solid;
        text-align: left;
        vertical-align: middle;
        background: #f7f7f7;
        padding: 10px;
        font-weight: bold;
        line-height: 30px;
        width: 20%;
    }

    td {
        border: #e3e3e3 1px solid;
        text-align: left;
        vertical-align: middle;
        padding: 10px;
        line-height: 30px;
        width: 80%;
    }

    td input[type=text]{
        width: 100%;
        line-height: 30px;
    }

    td input[type=number]{
        width: 100%;
        line-height: 30px;
    }

    textarea {
        width: 100%;
        height: 100px;
        resize: none;
    }

    ul {
        display: flex;
        justify-content: center;
        list-style: none;
    }

    ul li {
        color: #fff;
        background: #00aaff;
        margin: 2px;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 0 4px 0 #00aaff;
        cursor: pointer;
        text-align: center;
    }
    
    ul li:hover{
        opacity: 0.8;
    }

    a {
        color: #fff;
    }

</style>

<title>アイテム編集</title>

</head>
<body> 
    <form action="update-confirmation.php" method="POST">
        <table>
            <tr>
                <th>アイテム番号</th>
                <td><input type="text" name="part" value="<?=$view["part"]?>" required></td>
            </tr>
            <tr>
                <th>シリアル番号</th>
                <td><input type="text" name="serial" value="<?=$view["serial"]?>" required></td>
            </tr>
            <tr>
                <th>個数</th>
                <td><input type="number" name="qty" value="<?=$view["qty"]?>" required></td>
            </tr>
        </table>
        <ul>
            <li><a href="inventory.php"><input type="button" value="在庫一覧に戻る"></a></li>
            <li><input type="submit" value="編集内容確認"></li>
            <li><input type="reset" value="リセット"></li>
        </ul>
        <input type="hidden" name="id" value="<?=$view["id"]?>">
    </form>
</body>
</html>