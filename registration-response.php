<html>
<head>
<meta charset="utf-8">
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

    .index-btn{
        color: #fff;
        background: #00aaff;
        margin: 2px;
        padding: 7px;
        border-radius: 5px;
        box-shadow: 0 4px 0 #00aaff;
        cursor: pointer;
    }

    .index-btn:hover{
        opacity: 0.8;
    }

</style>

<title>ユーザー登録完了</title>
</head>
<body>
    <?php $d = date("Y年m月d日 H時i分s秒");echo $d;?>
    <p><span>ユーザー登録完了</span></p>
    <a href="login.php"><input type="button" class="index-btn" value="ログイン画面に移る"></a>
</body>
</html>