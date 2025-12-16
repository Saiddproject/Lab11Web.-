<?php
/**
 * Nama File: logout.php
 * Deskripsi: Menghapus session login.
 */
session_destroy();
header("Location: /lab11_php_oop/user/login");
exit();
?>