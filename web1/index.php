<?php session_start() ?>

<html lang="ja">
<body>
<h1>ちゃんとしたサイト</h1>
<form method="post" action="/posts.php">
    <div>
        名前: <input type="text" name="name" value=""><br>
        本文: <textarea name="body"></textarea>
        <input type="hidden" name="csrf_token" value="<?= sha1(session_id()) ?>">
    </div>
    <div>
        <button type="submit">送信</button>
    </div>
</form>

<?= $_SESSION['message'] ?>
<?php unset($_SESSION['message']) ?>
<?php
if (array_key_exists('name', $_SESSION)) {
    echo '名前: ' . $_SESSION['name'];
    unset($_SESSION['name']);
}
if (array_key_exists('body', $_SESSION)) {
    echo '本文: ' . $_SESSION['body'];
    unset($_SESSION['body']);
}
?>
</body>
</html>