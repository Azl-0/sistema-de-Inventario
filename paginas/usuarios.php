<?php
// Conexión a la base de datos
include("../includes/conexion.php");

// Verificar si se envió el formulario (si se presionó algún botón)
if (isset($_POST['btn'])) {
    // Capturar valores enviados desde el formulario
    $cod        = $_POST['txtcod'];
    $nombre     = $_POST['txtnombre'];
    $usuario    = $_POST['txtusuario'];
    $contrasena = $_POST['txtcontrasena'];
    $rol        = $_POST['txtrol'];

    // Dependiendo del botón presionado, armar la consulta SQL correspondiente
    switch ($_POST['btn']) {
        case 'Insertar': // Insertar un nuevo usuario
            $linea = "INSERT INTO usuarios (nombre, usuario, contrasena, rol) 
                      VALUES ('$nombre', '$usuario', '$contrasena', '$rol')";
            break;
        case 'Actualizar': // Modificar un usuario existente
            $linea = "UPDATE usuarios 
                      SET nombre='$nombre', usuario='$usuario', contrasena='$contrasena', rol='$rol' 
                      WHERE id_usuario='$cod'";
            break;
        case 'Eliminar': // Borrar un usuario
            $linea = "DELETE FROM usuarios WHERE id_usuario='$cod'";
            break;
        case 'Buscar': // Buscar un usuario por código
            $linea = "SELECT * FROM usuarios WHERE id_usuario='$cod'";
            break;
    }

    // Ejecutar la consulta (excepto en búsqueda)
    if ($_POST['btn'] != 'Buscar') {
        mysqli_query($con, $linea);
    }

    // Si es búsqueda, ejecutar solo esa consulta, si no, obtener todos los usuarios
    $r = ($_POST['btn'] == 'Buscar') 
        ? mysqli_query($con, $linea) 
        : mysqli_query($con, "SELECT * FROM usuarios");

} else {
    // Si no hay acción, mostrar todos los usuarios
    $r = mysqli_query($con, "SELECT * FROM usuarios");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Usuarios</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables con estilos para Bootstrap 5 -->
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="usuarios.css" rel="stylesheet">
</head>

<!-- Incluir menú o barra común -->
<?php include("../includes/desple.html"); ?> 

<body class="bg-light">

<div class="container mt-4">
    <center><h2 class="mb-4">Gestión de Usuarios</h2></center>

   <!-- Formulario CRUD -->
<form method="post" class="row g-3 mb-4 justify-content-center">
    <!-- Campo Código -->
    <div class="col-md-2">
        <label class="form-label">Código</label>
        <input type="text" name="txtcod" class="form-control" placeholder="ID">
    </div>
    <!-- Campo Nombre -->
    <div class="col-md-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="txtnombre" class="form-control" placeholder="Nombre completo">
    </div>
    <!-- Campo Usuario -->
    <div class="col-md-2">
        <label class="form-label">Usuario</label>
        <input type="text" name="txtusuario" class="form-control" placeholder="Nombre de usuario">
    </div>
    <!-- Campo Contraseña -->
    <div class="col-md-2">
        <label class="form-label">Contraseña</label>
        <input type="text" name="txtcontrasena" class="form-control" placeholder="••••••••">
    </div>
    <!-- Campo Rol -->
    <div class="col-md-2">
        <label class="form-label">Rol</label>
        <select name="txtrol" class="form-select">
            <option value="Administrador">Administrador</option>
            <option value="Asistente">Asistente</option>
        </select>
    </div>

    <!-- Botones CRUD centrados -->
    <div class="col-12 mt-4 d-flex justify-content-center">
        <button type="submit" name="btn" value="Insertar" class="btn btn-success me-2">
            <i class="bi bi-plus-circle"></i> Insertar
        </button>
        <button type="submit" name="btn" value="Actualizar" class="btn btn-warning me-2">
            <i class="bi bi-arrow-repeat"></i> Actualizar
        </button>
        <button type="submit" name="btn" value="Eliminar" class="btn btn-danger">
            <i class="bi bi-trash"></i> Eliminar
        </button>
    </div>
</form>


    <!-- Tabla de resultados con DataTables -->
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Mostrar cada usuario en una fila
                while ($a = mysqli_fetch_array($r)) { ?>
                    <tr>
                        <td><?= $a['id_usuario'] ?></td>
                        <td><?= $a['nombre'] ?></td>
                        <td><?= $a['usuario'] ?></td>
                        <td><?= $a['contrasena'] ?></td>
                        <td><?= $a['rol'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Librerías JS necesarias -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>

<!-- Inicializar DataTables -->
<script>
    new DataTable('#example'); // Activa paginación, búsqueda y orden automático
</script>

</body>
</html>
