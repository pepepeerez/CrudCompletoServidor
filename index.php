<?php
include("./CRUD/connection.php");
$con = connection();

// Obtener todos los alumnos
$sql = "SELECT * FROM alumnos";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Gestión de Alumnos</h1>
        
        <!-- Formulario para agregar un nuevo alumno -->
        <form action="./CRUD/insert_alumno.php" method="POST" class="mb-5">
            <div class="form-group mb-3">
                <input type="text" name="nombreAlumnos" class="form-control" placeholder="Nombre del Alumno" required>
            </div>
            <div class="form-group mb-3">
                <input type="number" name="edad" class="form-control" placeholder="Edad del Alumno">
            </div>
            <button type="submit" class="btn btn-primary">Agregar Alumno</button>
        </form>

        <!-- Lista de Alumnos -->
        <h2>Lista de Alumnos</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?= $row['idAlumnos'] ?></td>
                    <td><?= $row['nombreAlumnos'] ?></td>
                    <td><?= $row['edad'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-warning">Editar</a>
                        <a href="./CRUD/delete_alumno.php?id=<?= $row['idAlumnos'] ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
