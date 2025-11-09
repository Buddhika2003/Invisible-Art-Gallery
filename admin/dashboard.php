<<<<<<< HEAD

=======
>>>>>>> 267d2a8 (admin dashboard updated and add logout.php to securely end user session and redirect to login)
<?php
require_once 'config.php';
if (empty($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
$orders = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC")->fetchAll();
?>
<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
    <title>Admin dashboard</title>
</head>
<body>
    <h1>Orders</h1>
    <table>
=======
<!doctype html>
<html><head><title>Admin Dashboard</title></head>
<body>
<h1>Orders</h1>
<p><a href="logout.php">Logout</a></p>
<table border="1" cellpadding="6">
  <thead>
    <tr>
>>>>>>> 267d2a8 (admin dashboard updated and add logout.php to securely end user session and redirect to login)
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Size</th>
        <th>Style</th>
        <th>Status</th>
        <th>Created</th>
<<<<<<< HEAD


    </table>
    
</body>
</html>
=======
    </tr>
</thead>
  <tbody>
    <?php foreach($orders as $o): ?>
    <tr>
      <td><?= $o['id'] ?></td>
      <td><?= htmlspecialchars($o['customer_name']) ?></td>
      <td><?= htmlspecialchars($o['email']) ?></td>
      <td><a href="../<?= htmlspecialchars($o['photo_path']) ?>" target="_blank">view</a></td>
      <td><?= htmlspecialchars($o['size']) ?></td>
      <td><?= htmlspecialchars($o['style']) ?></td>
      <td><?= htmlspecialchars($o['status']) ?></td>
      <td><?= $o['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body></html>
>>>>>>> 267d2a8 (admin dashboard updated and add logout.php to securely end user session and redirect to login)
