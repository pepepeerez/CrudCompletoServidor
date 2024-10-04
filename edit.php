<?php
include("./CRUD/connection.php");
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM alumnos WHERE idAlumnos='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Editar Alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar Alumno</h1>
        <form action="./CRUD/edit_alumno.php" method="POST">
            <input type="hidden" name="idAlumnos" value="<?= $row['idAlumnos'] ?>">
            <div class="form-group mb-3">
                <label for="nombreAlumnos">Nombre</label>
                <input type="text" name="nombreAlumnos" class="form-control" value="<?= $row['nombreAlumnos'] ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="edad">Edad</label>
                <input type="number" name="edad" class="form-control" value="<?= $row['edad'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
