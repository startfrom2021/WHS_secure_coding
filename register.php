<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    echo "가입 성공!";
}
?>
<form method="post">
  ID: <input type="text" name="username"><br>
  PW: <input type="password" name="password"><br>
  <input type="submit" value="가입">
</form>
