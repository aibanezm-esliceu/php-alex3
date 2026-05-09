<?php 
$pageTitle = "Listado de Viajes - Examen PHP"; 
require __DIR__ . "/includes/header.php"; 
?>

<h1>Listado de Destinos</h1>
<table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
    <thead style="background-color: #2c3e50; color: white;">
        <tr><th>ID</th><th>País</th><th>Ciudad</th><th>Días</th><th>Precio</th></tr>
    </thead>
    <tbody>
        <?php
        try {
            $pdo = new PDO("mysql:host=db;dbname=agencia_php", "guia", "viaje123");
            $stmt = $pdo->query("SELECT * FROM agencia_php");
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['pais'] . "</td>";
                echo "<td>" . $row['ciudad'] . "</td>";
                echo "<td>" . $row['dias'] . "</td>";
                echo "<td>" . $row['precio'] . "</td>";
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "<tr><td colspan='5'>Error: " . $e->getMessage() . "</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php require __DIR__ . "/includes/footer.php"; ?>
