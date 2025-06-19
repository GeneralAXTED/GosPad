<?php
// Ma'lumotlar bazasiga ulanish sozlamalari
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'gospad');

// Ulanishni o'rnatish
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Ulanishni tekshirish
if (!$conn) {
    die("Ma'lumotlar bazasiga ulanishda xato: " . mysqli_connect_error());
}

// Kodlashni sozlash
mysqli_set_charset($conn, 'utf8mb4');
?>