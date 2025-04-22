<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_SESSION['user_id']; // 로그인 세션 사용

    $stmt = $pdo->prepare("INSERT INTO items (title, description, price, user_id) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $desc, $price, $user_id]);

    echo "상품 업로드 완료!";
}
?>
<form method="post">
  제목: <input type="text" name="title"><br>
  설명: <textarea name="description"></textarea><br>
  가격: <input type="number" name="price"><br>
  <input type="submit" value="올리기">
</form>
