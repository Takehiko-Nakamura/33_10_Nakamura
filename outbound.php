<html>
<head>
<meta charset="UTF-8">
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

    a {
        color: #fff;
    }

</style>

<title>出庫処理</title>
</head>
<body>
    <form action="outbound-confirmation.php" method="POST">
        <table>
            <tr>
                <th>アイテム番号</th>
                <td><input type="text" name="part" required></td>
            </tr>
            <tr>
                <th>シリアル番号</th>
                <td><input type="text" name="serial" required></td>
            </tr>
            <tr>
                <th>個数</th>
                <td><input type="number" name="qty" required></td>
            </tr>
        </table>
        <ul>
            <li><a href="index.php"><input type="button" class="btn" value="機能一覧に戻る"></a></li>
            <li><input type="submit" value="確認"></li>
            <li><input type="reset" value="リセット"></li>
        </ul>
    </form>
</body>
</html>