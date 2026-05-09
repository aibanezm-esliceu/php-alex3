<?php 
$pageTitle = "Contacto - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Formulario de Contacto</h1>
<form action="procesar-reserva.php" method="POST" style="display: flex; flex-direction: column; gap: 10px; max-width: 400px;">
    <label>Nombre Viajero:</label>
    <input type="text" name="nombre_viajero" required>
    
    <label>Destino deseado:</label>
    <input type="text" name="destino_deseado" required>
    
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Mensaje:</label>
    <textarea name="missatge" rows="4" required></textarea>
    
    <button type="submit">Enviar Mensaje</button>
</form>

<?php require __DIR__ . "/includes/footer.php"; ?>
