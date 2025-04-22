<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        if ($user['is_banned']) {
            echo "차단된 사용자입니다.";
        } else {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: index.php");
            exit;
        }
    } else {
        echo "아이디 또는 비밀번호가 틀렸습니다.";
    }
}
?>

<form method="post">
  ID: <input type="text" name="username"><br>
  PW: <input type="password" name="password"><br>
  <input type="submit" value="로그인">
</form>
