<?php
    require 'db_connect.php';

    if($_SERVER['REQUEST_METHOD'] !=='POST'){
        http_response_code(405);
        exit('Method Not Allowed');
    }

$customer_name = trim($_POST['customer_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$size = trim($_POST['size'] ?? '');
$style =trim($_POST['style'] ?? '');
$notes = trim($_POST['notes'] ?? '');    

if(!$customer_name || !$email || !isset($_FILES['photo'])){
    die('Missing required fields');
}
?>
