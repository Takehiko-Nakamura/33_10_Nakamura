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

<title>アンケート編集確認</title>

</head>
<body>
    <form action="update-insert.php" method="POST">
        <table>
            <tr>
                <th>アイテム番号</th>
                <td><?php echo $_POST["part"]; ?></td>
            </tr>
            <tr>
                <th>シリアル番号</th>
                <td><?php echo $_POST["serial"]; ?></td>
            </tr>
            <tr>
                <th>個数</th>
                <td><?php echo $_POST["qty"]; ?></td>
            </tr>
        </table>
        <ul>
            <li><input type="button" onclick="javascript:window.history.back(-1);return false;" value="戻る"></li>
            <li><input type="submit" value="更新"></li>
        </ul>
        <input type="hidden" name="part" value="<?php echo $_POST["part"]; ?>">
        <input type="hidden" name="serial" value="<?php echo $_POST["serial"]; ?>">
        <input type="hidden" name="qty" value="<?php echo $_POST["qty"]; ?>">
        <input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>">
    </form>
</body>
</html>