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
$apellidoP = $_POST["apellidoP"] ;
$apellidoM = $_POST["apellidoM"] ;
$usuario = $_POST["usuario"] ;
$contrasena = $_POST["contraseña"] ;
$telefono = $_POST["telefono"] ;

$contrasena = hash('sha512', $contrasena);

// Agregar datos a la tabla
$sql = "INSERT INTO users (nombre, apellidoP, apellidoM, usuario, contraseña, telefono )
VALUES ('$nombre', '$apellidoP', '$apellidoM', '$usuario', '$contrasena', '$telefono')";

if (mysqli_query($conn, $sql)) {
    echo "Datos agregados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>