<?php 
$pageTitle = "Destinos - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Lista de destinos</h1>
<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); gap: 1rem;">
    <?php
    $dir = __DIR__ . "/uploads";
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file == "." || $file == "..") continue;
        
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if ($extension == 'jpg' || $extension == 'png') {
            echo "<img src='uploads/$file' style='width: 100%; aspect-ratio: 1/1; object-fit: cover;' alt='Imagen'>";
        }
    }
    ?>
</div>

<?php require __DIR__ . "/includes/footer.php"; ?>
