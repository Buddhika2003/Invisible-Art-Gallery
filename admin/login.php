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