<?php

include_once('../config.php');
include_once('../util.php');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include_once('common/head.php');?>
    <title>通知画面 / Twitterクローン</title>
    <meta name="description" content="通知画面です。">
</head>

<body class="home notification text-center">
    <div class="container">
        <?php include_once('common/side.php');?>
        <div class="main">
            <div class="main-header">
                <h1>通知</h1>
            </div>
            <div class="ditch"></div>
            <div class="notification-list">
                <?php if(isset($_GET['case'])):?>
                    <p class="no-result">通知はまだありません。</p>
                <?php else:?>
                <div class="notification-item">
                    <div class="user">
                        <img src="img_uploaded/user/sample-person.jpg" alt="">
                    </div>
                    <div class="content">
                        <p>いいね！されました。</p>
                    </div>
                </div>
                <div class="notification-item">
                    <div class="user">
                        <img src="img_uploaded/user/sample-person.jpg" alt="">
                    </div>
                    <div class="content">
                        <p>フォローされました。</p>
                    </div>
                </div>
                <?php endif ;?>
            </div>
        </div>
    </div>
    <?php include_once('common/foot.php');?>
</body>

</html>