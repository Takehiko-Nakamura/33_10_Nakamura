<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/sanitize.css">
<link rel="stylesheet" href="css/reset.css">

<style>

    body {
        margin-right: auto;
        margin-left: auto;
        margin-top: 24px;
        text-align:center; 
        font-size: 16px;
    }

    P {
        font-size: 16px;
        margin-top: 24px;
        margin-bottom: 24px;
        }

    .btn{
        color: #fff;
        background: #00aaff;
        margin: 2px;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 0 4px 0 #00aaff;
        cursor: pointer;
        text-align: center;
    }

    .btn:hover{
        opacity: 0.8;
    }

</style>

<title>機能一覧画面</title>
</head>
<body>
    <p>機能一覧</p>
    <p><a href="inbound.php"><input type="button" class="btn" value="入庫"></a></p>
    <p><a href="outbound.php"><input type="button" class="btn" value="出庫"></a></p>
    <p><a href="inventory.php"><input type"button" class="btn" value="在庫リスト"></a></p>
    <p><a href="login.php"><input type="button" class="btn" value="ログアウト"></a></p>   
</body>
</html>