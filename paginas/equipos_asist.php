<?php
include("../includes/conexion.php");

/*jala datos de las cajas del formulario */

if (isset($_POST['btn'])) {
    $cod          = $_POST['txtcod'];



    /*codigo del crud de equipos */
    switch ($_POST['btn']) {
        case 'Mostrar': /*insertar */
            $linea = "SELECT *FROM equipos";
            break;
        case 'Buscar': /*buscar */
            $linea = "SELECT * FROM equipos WHERE id_equipo='$cod'";
            break;
    }

    /*para el boton buscar */
    if ($_POST['btn'] != 'Buscar') {
        mysqli_query($con, $linea);
    }

    if ($_POST['btn'] == 'Buscar') {
        $r = mysqli_query($con, $linea);
    } else {
        $r = mysqli_query($con, "SELECT * FROM equipos");
    }
} else {
    $r = mysqli_query($con, "SELECT * FROM equipos");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
   <style>
        .form{
              display: flex;
            flex-direction: row;
            gap: 5%;

        }
        .col-md-12{
            margin-top: 30px;
        }
   </style>
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/2.1.6/css/dataTables.bootstrap5.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link href="equipos.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- include footer -->
  <?php include("../includes/desple_asist.html"); ?> 

<div class="container mt-4">
    <center><h2 class="mb-4">Gestión de Equipos</h2></center>

    <!-- formulario -->
    <form method="post" class="row g-3 mb-4 justify-content-center">
        <!-- codigo -->
         <div class="form">
            <div class="col-md-2">
                <label class="form-label">Código</label>
                <input type="text" name="txtcod" class="form-control">
            </div>

            <!-- botones -->
            <div class="col-md-12">
                <button type="submit" name="btn" value="Buscar" class="btn btn-primary">Buscar</button>
                <button type="submit" name="btn" value="Mostrar" class="btn btn-dark">Mostrar</button>
            </div>
        </div>

    </form>



    <!-- tabla  con bootstrap-->
    <div class="table-responsive">
        <table class="table table-striped table-bordered"  id="example" >
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Código de Barras</th>
                    <th>Categoría</th>
                    <th>Estado</th>
                    <th>Ubicación</th>
                    <th>Fecha Registro</th>
                </tr>
            </thead>
            <tbody>
                <!-- bucle que recorre las filas -->
                <?php
                while ($a = mysqli_fetch_array($r)) {
                    echo "<tr>";
                    echo "<td>" . $a['id_equipo'] . "</td>";
                    echo "<td>" . $a['nombre'] . "</td>";
                    echo "<td>" . $a['codigo_equipo'] . "</td>";
                    echo "<td>" . $a['categoria'] . "</td>";
                    echo "<td>" . $a['estado'] . "</td>";
                    echo "<td>" . $a['ubicacion'] . "</td>";
                    echo "<td>" . $a['fecha_registro'] . "</td>";
                    echo "</tr>";
                }
                ?>

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
