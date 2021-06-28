<?php
include_once('../config.php');
include_once('../util.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include_once('common/head.php');?>

    <title>ログイン画面 / Twitterクローン</title>
    <meta name="description" content="ログイン画面です">
</head>

<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-up.php" method="post">
            <img src="img/logo-white.svg" alt="" class="logo-white">
            <h1>Twitterクローンにログイン</h1>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" maxlength="254" required>
            <input type="password" class="form-control" name="password" placeholder="パスワード" required>
            <button class="w-100 btn btn-lg" type="submit">ログイン</button>
            <p class="mt-3 mb-2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3 text-muted">&copy;2021</p>
        </form>
    </main>
    <?php include_once('common/foot.php');?>
</body>
</html>