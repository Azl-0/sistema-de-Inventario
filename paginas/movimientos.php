<?php
// Incluir archivo de conexión a la base de datos
include("../includes/conexion.php");

// Variable para mensajes
$mensaje = "";

// Verificar si se envió el formulario con algún botón
if (isset($_POST['btn'])) {
    // Capturar valores enviados por el formulario
    $cod           = trim($_POST['txtcod']);         // Código o ID del movimiento
    $nombre_equipo = trim($_POST['txtequipo']);      // Nombre del equipo
    $nombre_usuario= trim($_POST['txtusuario']);     // Nombre del usuario
    $tipo          = trim($_POST['txttipo']);        // Tipo de movimiento
    $descripcion   = trim($_POST['txtdesc']);        // Descripción del movimiento
    $fecha         = trim($_POST['txtfecha']);       // Fecha del movimiento

    // Validar según la acción
    switch ($_POST['btn']) {
        case 'Insertar':
            if (empty($nombre_equipo) || empty($nombre_usuario) || empty($tipo) || empty($fecha)) {
                $mensaje = "<div class='alert alert-danger'>⚠ Por favor, completa todos los campos obligatorios para insertar.</div>";
            } else {
                $linea = "INSERT INTO movimientos (nombre_equipo, nombre_usuario, tipo, descripcion, fecha) 
                          VALUES ('$nombre_equipo', '$nombre_usuario', '$tipo', '$descripcion', '$fecha')";
                mysqli_query($con, $linea);
                $mensaje = "<div class='alert alert-success'>✅ Registro insertado correctamente.</div>";
            }
            break;

        case 'Actualizar':
            if (empty($cod) || empty($nombre_equipo) || empty($nombre_usuario) || empty($tipo) || empty($fecha)) {
                $mensaje = "<div class='alert alert-danger'>⚠ Debes completar todos los campos para actualizar.</div>";
            } else {
                $linea = "UPDATE movimientos 
                          SET nombre_equipo='$nombre_equipo', nombre_usuario='$nombre_usuario', 
                              tipo='$tipo', descripcion='$descripcion', fecha='$fecha' 
                          WHERE id_movimiento='$cod'";
                mysqli_query($con, $linea);
                $mensaje = "<div class='alert alert-success'>✅ Registro actualizado correctamente.</div>";
            }
            break;

        case 'Eliminar':
            if (empty($cod)) {
                $mensaje = "<div class='alert alert-danger'>⚠ Debes ingresar el código para eliminar.</div>";
            } else {
                $linea = "DELETE FROM movimientos WHERE id_movimiento='$cod'";
                mysqli_query($con, $linea);
                $mensaje = "<div class='alert alert-success'>✅ Registro eliminado correctamente.</div>";
            }
            break;

        case 'Buscar':
            if (empty($cod)) {
                $mensaje = "<div class='alert alert-danger'>⚠ Debes ingresar el código para buscar.</div>";
                $r = mysqli_query($con, "SELECT * FROM movimientos");
            } else {
                $linea = "SELECT * FROM movimientos WHERE id_movimiento='$cod'";
                $r = mysqli_query($con, $linea);
            }
            break;
    }

    // Si no es búsqueda, mostrar todos los registros
    //
    //
    //
    if ($_POST['btn'] != 'Buscar') {
        $r = mysqli_query($con, "SELECT * FROM movimientos");
    }
} else {
    // Si no se envió formulario, mostrar todos los registros por defecto
    $r = mysqli_query($con, "SELECT * FROM movimientos");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Movimientos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="movimientos.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="equipos.css" rel="stylesheet">
    <style>
        .texto{
             text-align: center;
             font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
             font-size:17px;
        }
        .separador{
             text-align: center;
            border-radius: 2px;
            width: 100%;
            padding-bottom:3%;
        }

        
    </style>
</head>

  <!-- Mostrar menu -->
<?php include("../includes/desple.html"); ?> 
  
<body class="bg-light">

<div class="container mt-4">
    <center><h2 class="mb-4">Gestión de Movimientos</h2></center>
    <div class="texto">
        <p class="g_m">
            Esta página permite registrar, consultar, modificar y eliminar movimientos relacionados con los equipos almacenados en la base de datos.
            Un “movimiento” es cualquier cambio o acción que se realiza sobre un equipo, como ingresos, mantenimientos, bajas o traslados.
        </p>
    </div>

    <p class="separador">_________________________________________________________________________________________________________________________________________________________________________________________________</p>


    <!-- Mostrar mensajes -->
    <?php if (!empty($mensaje)) echo $mensaje; ?>


    <!-- Formulario -->
    <form method="post" class="row g-3 mb-4 justify-content-center" style="max-width: 1000px; margin: auto;">
        <div class="col-md-4">
            <label class="form-label">Código</label>
            <input type="text" name="txtcod" class="form-control" placeholder="Ingrese Cod">
        </div>
        <div class="col-md-4">
            <label class="form-label">Nombre del Equipo</label>
            <input type="text" name="txtequipo" class="form-control" placeholder="Ingrese Nombre">
        </div>
        <div class="col-md-4">
            <label class="form-label">Nombre de Usuario</label>
            <input type="text" name="txtusuario" class="form-control" placeholder="Ingrese Usuario">
        </div>
        <div class="col-md-4">
            <label class="form-label">Tipo</label>
            <input type="text" name="txttipo" class="form-control" placeholder="Ingrese Tipo">
        </div>
        <div class="col-md-4">
            <label class="form-label">Descripción</label>
            <input type="text" name="txtdesc" class="form-control" placeholder="Ingrese Descrip.">
        </div>
        <div class="col-md-4">
            <label class="form-label">Fecha</label>
            <input type="date" name="txtfecha" class="form-control">
        </div>

        <!-- Botones centrados -->
        <div class="col-12 mt-4 d-flex justify-content-center">
            <button type="submit" name="btn" value="Insertar" class="btn btn-success me-2">
                <i class="bi bi-plus-circle"></i> Insertar
            </button>
            <button type="submit" name="btn" value="Actualizar" class="btn btn-warning me-2">
                <i class="bi bi-arrow-repeat"></i> Actualizar
            </button>
            <button type="submit" name="btn" value="Eliminar" class="btn btn-danger me-2">
                <i class="bi bi-trash"></i> Eliminar
            </button>
            <button type="submit" name="btn" value="Buscar" class="btn btn-primary">
                <i class="bi bi-search"></i> Buscar
            </button>
        </div>
    </form>
   

    <!-- Tabla -->
        <div class="table-responsive">
            <table id="example" class= "table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Equipo</th>
                        <th>Nombre Usuario</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($a = mysqli_fetch_array($r)) {
                            echo "<tr>";
                            echo "<td>" . $a['id_movimiento'] . "</td>";
                            echo "<td>" . $a['nombre_equipo'] . "</td>";
                            echo "<td>" . $a['nombre_usuario'] . "</td>";
                            echo "<td>" . $a['tipo'] . "</td>";
                            echo "<td>" . $a['descripcion'] . "</td>";
                            echo "<td>" . $a['fecha'] . "</td>";
                            echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable('#example');
</script>
</body>
</html>