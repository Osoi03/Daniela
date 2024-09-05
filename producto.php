<?php
// Conexión a la base de datos
$host = "localhost";
$dbname  = "daniela";
$username = "root";
$password = "";



$conn = new mysqli('localhost', 'root', '', 'daniela');

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Continuar con las operaciones de base de datos


                // 
// Obtener el ID del producto de la URL
$id = intval($_GET['id']);

// Consultar la base de datos
$sql = "SELECT * FROM productos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los datos del producto
    $row = $result->fetch_assoc();
} else {
    echo "Producto no encontrado.";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['nombre']; ?> - Niela Milo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $row['nombre']; ?></h1>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="sobre-nosotros.html">Sobre Nosotros</a>
        </nav>
    </header>

    <main>
        <div class="product-detail">
            <img src="images/<?php echo $row['imagen']; ?>" alt="<?php echo $row['nombre']; ?>">
            <p><?php echo $row['descripcion']; ?></p>
            <span><?php echo $row['precio']; ?> USD</span>
            <button class="buy-button" onclick="window.location.href='https://www.amazon.com/s?k=<?php echo urlencode($row['nombre']); ?>'">Comprar en Amazon</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Niela Milo. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
