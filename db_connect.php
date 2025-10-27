<?php
    $DB_HOST = '127.0.0.1';
    $DB_USER = 'root';
    $DB_PASS = '';
    $DB_NAME = 'invisiblArt_db';

    try{
        $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PASS,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }catch(Exception $e){
        die("Database Connection error " . $e->getMessage());
    }
?>