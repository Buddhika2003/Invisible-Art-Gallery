<?php include 'header.php';?>

<main class="wrap">
    <h2>Order a potrait</h2>
    <form id="orderForm" method="post" action="submit_order.php" enctype="multipart/form-data">
        <label>
            Your name
            <input type="text" name="customer" required>
        </label>
        <label>
            Your email
            <input type="email" name="email" required>
        </label>
        <label>
            Upload photo
            <input type="file" name="photo" accept="image/*" required>
        </label>
        <label>
            Size / Format
            <select name="size">
                <option value="A5">A5</option>
                <option value="A4">A4</option>
                <option value="A3">A3</option>
                <option value="Digital">Digital</option>
            </select>
            </label>
        <label>
            Notes
            <textarea name="notes"></textarea>
            </label>

            <button type="submit" class="btn">Submit Order</button>
            </form>
        
</main>
<?php include 'footer.php';?>