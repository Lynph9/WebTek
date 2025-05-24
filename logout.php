<?php
// Session başlat
session_start();

// Tüm session verilerini temizle
$_SESSION = array();

// Session cookie'sini de sil
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Session'ı tamamen yok et
session_destroy();

// Login sayfasına yönlendir
header('Location: login.html?message=logout');
exit();
?> 