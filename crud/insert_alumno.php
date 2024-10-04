<?php
include("connection.php");
$con = connection();

if (isset($_POST['nombreAlumnos']) && isset($_POST['edad'])) {
    $nombre = $_POST['nombreAlumnos'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO alumnos (nombreAlumnos, edad) VALUES ('$nombre', '$edad')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Error al insertar datos";
    }
}
?>
