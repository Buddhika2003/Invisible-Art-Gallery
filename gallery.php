<?php include 'header.php';?>

<main class="wrap">
    <h2>Gallery</h2>
    <div class="gallery-grid"> 
        <?php
            $dir =__DIR__. '/assets/images';
            $files = array_diff(scandir($dir), ['.','..']);
            foreach ($files as $file) {
                $url = 'assets/images' . $file;
                echo "<div class='gallery-item'><img src='$url' alt='art' style='max-width:100%;height:auto'></div>";
            }
        ?>
    </div>
</main>

<?php include 'footer.php';?>