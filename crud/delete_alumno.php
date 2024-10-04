<?php
include("connection.php");
$con = connection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM alumnos WHERE idAlumnos='$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Error al eliminar alumno";
    }
}
?>
