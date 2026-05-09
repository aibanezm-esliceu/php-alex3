<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "No se han recibido datos.";
    exit;
}

// 1. Recogemos solo los 3 datos que existen en la BD
$nombre = $_POST["nombre_viajero"] ?? "";
$destino = $_POST["destino_deseado"] ?? "";
$email = $_POST["email"] ?? "";

require __DIR__ . "/db.php";

try {
    // 2. Quitamos 'mensaje' del INSERT y dejamos 3 interrogantes
    $sql = "INSERT INTO reservas (nombre_viajero, destino_deseado, email) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    // 3. Pasamos solo 3 variables al execute
    $result = $stmt->execute([$nombre, $destino, $email]);

    if ($result) {
        $pageTitle = "Éxito";
        require __DIR__ . "/includes/header.php";
        echo "<h1>¡Reserva confirmada!</h1>";
        echo "<p>Gracias, $nombre. ¡Prepara tu pasaporte!</p>";
        echo "<a href='reserva.php'>Volver</a>";
        require __DIR__ . "/includes/footer.php";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>