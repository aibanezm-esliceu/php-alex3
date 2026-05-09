<?php 
$pageTitle = "Destinos - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Nuestros Destinos</h1>
<p>Descubre los mejores lugares para tu próximo viaje.</p>

<div class="galeria-grid">
    <?php
    [cite_start]// 1. Definimos la ruta de la carpeta [cite: 107]
    $dir = __DIR__ . "/uploads";
    
    [cite_start]// 2. Leemos todo lo que hay dentro [cite: 108, 260]
    $files = scandir($dir);
    
    [cite_start]// 3. Recorremos los archivos uno a uno [cite: 263]
    foreach ($files as $file) {
        
        // 4. Filtramos los directorios invisibles que crea el sistema [cite: 261]
        if ($file == "." || $file == "..") {
            continue;
        }
        
        // Extraemos la extensión para asegurarnos de que es una imagen
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        
        // 5. Filtramos para que solo pasen jpg y png [cite: 110]
        if ($extension == 'jpg' || $extension == 'png') {
            // 6. Imprimimos el HTML de la imagen [cite: 112]
            echo "<img src='uploads/$file' alt='Imagen de la galería'>";
        }
    }
    ?>
</div>

<?php 
require __DIR__ . "/includes/footer.php"; 
?>
