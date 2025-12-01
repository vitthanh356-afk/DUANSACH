<?php
// Xử lý đăng nhập 
session_start();

if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Tùy Hưng xử lý DB, đây là ví dụ:
    if ($user === "Hưng" && $pass === "123") {
        $_SESSION['admin'] = $user;
        header("Location: index.php");
        exit;
    } else {
        $error = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <link rel="stylesheet" href="views/assets/css/login.css">
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <img src="views/assets/images/logo/logo.png" class="logo" alt="Admin Logo">

        <h2>Đăng nhập Admin</h2>

        <?php if (!empty($error)) : ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="input-group">
                <label>Tên đăng nhập</label>
                <input type="text" name="username" placeholder="Nhập username" required>
            </div>

            <div class="input-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" placeholder="Nhập mật khẩu" required>
            </div>

            <button type="submit" class="btn">Đăng nhập</button>
        </form>
    </div>
</div>

</body>
</html>
