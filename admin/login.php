<?php
    require_once "config.php";

    $err = '';

    if($DB_HOST['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'] ??'';
        $pass = $_POST['password']??'';

        if($email ==ADMIN_USER && password_verify($pass,$ADMIN_PASS_HASH)){
            $_SESSION['admin_logged_in']  = true;
            header('Location:dashboard.php');
<<<<<<< HEAD
            exit;
        }else{
            $err = "Invalid Credential";
        }

    }
    
=======

        }
    }
>>>>>>> 267d2a8 (admin dashboard updated and add logout.php to securely end user session and redirect to login)
?>
<!DOCTYPE html>
<html>
    <head><title>Admin Login</title></head>

    <body>
        <h2>Admin Login</h2>
        <?php
            if($err) echo "<p<style='color:red'>".htmlspecialchars($err)."</p>";
        ?>
        <form method ="post">
            <label>Email<input name="email" type="email" required></label><br>
            <label>Password<input name="password" type="password" required></label><br>
            <button type="submit">Login</button>
        </form>

    </body>

</html>