<?php
try {
    $pdo = new PDO("mysql:host=db;dbname=agencia_php", "guia", "viaje123", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
