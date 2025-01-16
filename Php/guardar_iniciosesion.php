<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conexion.php';

// Conectar a la base de datos
$servername = "127.0.0.1";
$username = "izeta3php";
$password = "Camello@33";
$dbname = "valoraciones_db";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Iniciar sesión
session_start();

// Verificamos si el gmail o correo y el usuario son correctos
$sql_check = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND correo = '$correo'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contraseña, $row['contraseña'])) {
        // Inicio de sesión correcto
        $_SESSION['username'] = $row['usuario']; // Guardar el nombre de usuario en la sesión
        echo "Inicio de sesión correcto.";
        header('Location: http://localhost/Proyecto/index.php'); // Redirige a la página de inicio
        exit(); // Asegúrate de detener la ejecución del script después de la redirección
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>

