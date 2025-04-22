<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>중고거래 플랫폼</title>
</head>
<body>
    <h1>🎉 중고거래 플랫폼에 오신 것을 환영합니다!</h1>

    <?php if (isset($_SESSION['username'])): ?>
        <p>안녕하세요, <?= htmlspecialchars($_SESSION['username']) ?>님!</p>
        <p><a href="upload_item.php">📦 상품 올리기</a> | <a href="view_items.php">🛍 상품 보기</a> | <a href="logout.php">🚪 로그아웃</a></p>
    <?php else: ?>
        <p><a href="register.php">회원가입</a> | <a href="login.php">로그인</a></p>
    <?php endif; ?>
</body>
</html>
