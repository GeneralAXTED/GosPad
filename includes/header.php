<?php
// Sessiyani boshlash
if (session_status() === PHP_SESSION_DISABLED || session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GosPad</title>
</head>
<body></body>