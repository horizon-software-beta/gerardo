<?php
// Conectarse a la base de datos
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "registro";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

$nombre = $_POST["nombre"] ;
$apellido = $_POST["apellido"] ;
$usuario = $_POST["usuario"] ;
$contraseña = $_POST["contraseña"] ;

// Agregar datos a la tabla
$sql = "INSERT INTO users (nombre, apellido, usuario, contraseña)
VALUES ('$nombre', '$apellido', '$usuario', '$contraseña')";

if (mysqli_query($conn, $sql)) {
    echo "Datos agregados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>