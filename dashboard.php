<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

// Insertar datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);

    if (!empty($nombre) && !empty($descripcion)) {
        $sql = "INSERT INTO registros (nombre, descripcion) 
                VALUES ('$nombre', '$descripcion')";
        
        if (!$conn->query($sql)) {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "<p style='color:red;'>Todos los campos son obligatorios</p>";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="card">
        <h2>Bienvenido <?php echo $_SESSION['usuario'] ?? 'Usuario'; ?></h2>

        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <textarea name="descripcion" placeholder="Descripción" required></textarea>
            <button type="submit">Guardar</button>
        </form>

        <a href="logout.php">Cerrar sesión</a>
    </div>
</div>

<h3 style="text-align:center;">Datos registrados</h3>

<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Fecha</th>
</tr>

<?php
$sql = "SELECT * FROM registros ORDER BY fecha DESC";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nombre']}</td>
            <td>{$row['descripcion']}</td>
            <td>{$row['fecha']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay datos</td></tr>";
}
?>

</table>