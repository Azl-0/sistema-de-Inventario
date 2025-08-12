<?php
// Conexión a la base de datos
include("../includes/conexion.php");

// Verificar si se envió el formulario
if (isset($_POST['btn'])) {
    $cod           = $_POST['txtcod'];
    $nombre        = $_POST['txtnombre'];
    $codigo_equipo = $_POST['txtcodigo'];
    $categoria     = $_POST['txtcategoria'];
    $estado        = $_POST['txtestado'];
    $ubicacion     = $_POST['txtubicacion'];
    $fecha         = $_POST['txtfecha'];

    // CRUD según botón
    switch ($_POST['btn']) {
        case 'Insertar':
            $linea = "INSERT INTO equipos (nombre, codigo_equipo, categoria, estado, ubicacion, fecha_registro) 
                      VALUES ('$nombre', '$codigo_equipo', '$categoria', '$estado', '$ubicacion', '$fecha')";
            break;
        case 'Actualizar':
            $linea = "UPDATE equipos 
                      SET nombre='$nombre', codigo_equipo='$codigo_equipo', categoria='$categoria', estado='$estado', ubicacion='$ubicacion', fecha_registro='$fecha'
                      WHERE id_equipo='$cod'";
            break;
        case 'Eliminar':
            $linea = "DELETE FROM equipos WHERE id_equipo='$cod'";
            break;

    }

    // Ejecutar consultas
    if ($_POST['btn'] != 'Buscar') {
        mysqli_query($con, $linea);
    }

    $r = ($_POST['btn'] == 'Buscar') 
        ? mysqli_query($con, $linea) 
        : mysqli_query($con, "SELECT * FROM equipos");
} else {
    $r = mysqli_query($con, "SELECT * FROM equipos");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Equipos</title>

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

<!-- Menú -->
<?php include("../includes/desple.html"); ?>

<body class="bg-light">
<div class="container mt-4">
    <center><h2 class="mb-4">Gestión de Equipos</h2></center>
    <div class="texto">
        <p class="g_m">
            Esta página permite registrar, consultar, modificar y eliminar movimientos relacionados con los equipos almacenados en la base de datos.
            Un “movimiento” es cualquier cambio o acción que se realiza sobre un equipo, como ingresos, mantenimientos, bajas o traslados.
        </p>
    </div>

    <p class="separador">_________________________________________________________________________________________________________________________________________________________________________________________________</p>


    <form method="post" class="row g-3 mb-4" style="max-width: 1000px; margin: auto;">
    <div class="col-md-4">
        <label class="form-label">ID</label>
        <input type="text" name="txtcod" class="form-control" placeholder="Ingrese ID">
    </div>
    <div class="col-md-4">
        <label class="form-label">Nombre</label>
        <input type="text" name="txtnombre" class="form-control" placeholder="Nombre del equipo">
    </div>
    <div class="col-md-4">
        <label class="form-label">Código</label>
        <input type="text" name="txtcodigo" class="form-control" placeholder="Código de equipo">
    </div>

    <div class="col-md-4">
        <label class="form-label">Categoría</label>
        <select name="txtcategoria" class="form-select">
            <option value="">Seleccione</option>
            <option value="PC de Escritorio">PC de Escritorio</option>
            <option value="Laptop">Laptop</option>
            <option value="Proyector">Proyector</option>
            <option value="Impresora">Impresora</option>
            <option value="Mouse">Mouse</option>
            <option value="Teclado">Teclado</option>
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Estado</label>
        <select name="txtestado" class="form-select">
            <option value="">Seleccione</option>
            <option value="Operativo">Operativo</option>
            <option value="Mantenimiento">Mantenimiento</option>
            <option value="Baja">Baja</option>
        </select>
    </div>
    <div class="col-md-4">
        <label class="form-label">Ubicación</label>
        <select name="txtubicacion" class="form-select">
            <option value="">Seleccione</option>
            <option value="Laboratorio 1">Laboratorio 1</option>
            <option value="Laboratorio 2">Laboratorio 2</option>
            <option value="Laboratorio 5">Laboratorio 5</option>
            <option value="Oficina">Oficina</option>
            <option value="Almacén">Almacén</option>
        </select>
    </div>

    <!-- Fecha Registro en la misma alineación -->
    <div class="col-md-4">
        <label class="form-label">Fecha Registro</label>
        <input type="date" name="txtfecha" class="form-control">
    </div>

    <!-- Botones -->
    <div class="col-12 mt-4 justify-content-center">
        <button type="submit" name="btn" value="Insertar" class="btn btn-success me-2">
            <i class="bi bi-plus-circle"></i> Insertar
        </button>
        <button type="submit" name="btn" value="Actualizar" class="btn btn-warning me-2">
            <i class="bi bi-arrow-repeat"></i> Actualizar
        </button>
        <button type="submit" name="btn" value="Eliminar" class="btn btn-danger me-2">
            <i class="bi bi-trash"></i> Eliminar
        </button>
    </div>
</form>


    <!-- Tabla -->
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Ubicación</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($a = mysqli_fetch_array($r)) { ?>
                    <tr>
                        <td><?= $a['id_equipo'] ?></td>
                        <td><?= $a['nombre'] ?></td>
                        <td><?= $a['codigo_equipo'] ?></td>
                        <td><?= $a['categoria'] ?></td>
                        <td><?= $a['estado'] ?></td>
                        <td><?= $a['ubicacion'] ?></td>
                        <td><?= $a['fecha_registro'] ?></td>
                    </tr>
                <?php } ?>
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
