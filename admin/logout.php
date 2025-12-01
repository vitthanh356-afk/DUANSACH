<?php
session_start();
// Xoá tất cả session
session_unset();
session_destroy();
// Quay về trang login
header("Location: login.php");
exit;
?>
