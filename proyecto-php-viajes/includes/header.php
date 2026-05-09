Abre includes/header.php y pega esto:

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Examen PHP'; ?></title>
    
    <link rel="stylesheet" href="/css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="destinos.php">Destinos</a></li>
            <li><a href="rutas.php">Rutas</a></li>
            <li><a href="reserva.php">Reservas</a></li>
        </ul>
    </nav>
    
    <main>

