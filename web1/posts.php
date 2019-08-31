<?php
    session_start();
    if ($_POST['csrf_token'] !== sha1(session_id())) {
        $_SESSION['message'] = '不正な投稿です。';
        header('Location: /');
        return;
    }
    $_SESSION['message'] = '投稿完了しました。';
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['body'] = $_POST['body'];
    header('Location: /');