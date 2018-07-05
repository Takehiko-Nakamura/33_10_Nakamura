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

   td input[type=username]{
        width: 100%;
        line-height: 30px;
    }

    td input[type=lid]{
        width: 100%;
        line-height: 30px;
    }

    td input[type=lpw]{
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

</style>

<title>ユーザー登録画面</title>
</head>
<body>
    <form action="registration-confirmation.php" method="POST">
        <table>
            <tr>
                <th>名前（フルネーム）</th>
                <td><input type="text" name="username" placeholder="鈴木一郎" required></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="lid" placeholder="ichiro@ichiro.com" required></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="password" name="lpw" placeholder="5678ghjk" required></td>
            </tr>
            
        </table>
        <ul>
            <li><input type="submit" value="入力内容確認"></li>
            <li><input type="reset" value="リセット"></li>
        </ul>
    </form>
</body>
</html>