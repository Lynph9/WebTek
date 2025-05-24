<?php
// InfinityFree uyumlu logout
session_start();
$_SESSION = array();
session_destroy();
header('Location: login.html?message=logout');
exit;
?> 