<?php
    require 'db_connect.php';

    if($_SERVER['REQUEST_METHOD'] !=='POST'){
        http_response_code(405);
        exit('Method Not Allowed');
    }
?>
