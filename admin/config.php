<?php
    session_start();

    require_once __DIR__.'../db_connect.php';

    define('ADMIN_USER', 'admin');
    define('ADMIN_PASS_HASH', password_hash('securepassword', PASSWORD_DEFAULT));
?>