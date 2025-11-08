
<?php
require_once 'config.php';
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
$orders = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin dashboard</title>
</head>
<body>
    <h1>Orders</h1>
    <table>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Size</th>
        <th>Style</th>
        <th>Status</th>
        <th>Created</th>


    </table>
    
</body>
</html>