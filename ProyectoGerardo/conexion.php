<?php
// Conectarse a la base de datos
// El servername es el  nombre del servidor que estamos usando
$servername = "localhost:3306";
// Username es el nombre del usuario
$username = "root";
// El password es la contraseña a nuestro servidor la cual nosotros no tenemos
$password = "";
// El dbname es el nombre de nuestra base de datos 
$dbname = "registro";

// Aqui hacemos la coneccion con mysql , damos validados los datos anteriormente
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verifica la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

// Aqui validamos nuestras variables que se registraron en el codigo de html
$nombre = $_POST["nombre"] ;
$apellido = $_POST["apellido"] ;
$usuario = $_POST["usuario"] ;
$contraseña = $_POST["contraseña"] ;

// Agregar datos a la tabla
$sql = "INSERT INTO users (nombre, apellido, usuario, contraseña)
VALUES ('$nombre', '$apellido', '$usuario', '$contraseña')";
// Aqui nos da el comentario de datos agrgados correctamente para decirnos
// que los datos fueron agregados correctamente
if (mysqli_query($conn, $sql)) {
    echo "Datos agregados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>