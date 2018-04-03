<?php
require_once('functions.php');
setToken(); //  追記
$data = detail($_GET['id']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集</title>
</head>
<body>
    <form action="store.php" method="post">
        <input type="hidden" name="token" value="<?php echo h($_SESSION['token']); ?>"><!-- 追記 -->
        <input type="hidden" name="id" value="<?php echo h($_GET['id']); ?>"><!-- 編集 -->
        <input type="text" name="todo" value="<?php echo h($data); ?>"><!-- 編集 -->
        <input type="submit" value="更新">
    <div>
        <a href="index.php">一覧へ戻る</a>
    </div>
    <?php unsetSession(); ?>
</body>
</html>
