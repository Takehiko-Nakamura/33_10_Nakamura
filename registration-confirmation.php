<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/reset.css">

<?php

function h($val){
    return htmlspecialchars($val, ENT_QUOTES);
}

$username = $_POST["username"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

?>

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
    }
    
    ul li:hover{
        opacity: 0.8;
    }

</style>

<title>ユーザー登録確認</title>
</head>
<body>
    <form action="registration-insert.php" method="POST">
        <table>
            <tr>
                <th>名前（フルネーム）</th>
                <td><?= h ($username); ?></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?= h ($lid); ?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?= h ($lpw); ?></td>
            </tr>
            
        </table>
        <ul>
            <li><input type="button" onclick="javascript:history.back(-1);return false;" value="戻る"></li>
            <li><input type="submit" value="登録"></li>
        </ul>
        <input type="hidden" name="username" value="<?= h ($username); ?>">
        <input type="hidden" name="lid" value="<?= h ($lid); ?>">
        <input type="hidden" name="lpw" value="<?= h ($lpw); ?>">
        <input type="hidden" name="kanri_flg" value="0">
        <input type="hidden" name="life_flg" value="0">
    </form>
</body>
</html>