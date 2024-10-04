<?php
function connection() {
    $host = "localhost";  // Servidor MySQL
    $user = "root";       // Usuario de la base de datos
    $pass = "root";           // Contraseña de MySQL (si tienes contraseña)
    $db = "portfolio_projects"; // Nombre de la base de datos

    // Crear la conexión
    $con = mysqli_connect($host, $user, $pass, $db);

    // Verificar la conexión
    if (!$con) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    return $con;
}
?>
