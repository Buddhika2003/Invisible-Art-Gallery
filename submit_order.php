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

$uploadDir = __DIR__.'/assets/images/uploads/';
if(!is_dir($uploadDir)){
    mkdir($uploadDir, 0755, true);
}

$photo = $_FILES['photo'];
$allowed = ['image/jpeg', 'image/png', 'image/webp'];
if ($photo['error'] !== UPLOAD_ERR_OK) {
    die('File upload error');
}   

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $photo['tmp_name']);
finfo_close($finfo);
if (!in_array($mime, $allowed)) {
    die('Only JPG, PNG, WEBP allowed.');
}
?>
