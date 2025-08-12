<?php
session_start();
include("../includes/conexion.php"); //  conexión a basse de datos (tabla usuarios)

$usuario    = $_POST['usuario'];
$contrasena = $_POST['contraseña'];

// Consulta simple
$sql = "SELECT * FROM usuarios 
        WHERE usuario='$usuario' 
        AND contrasena='$contrasena' 
        LIMIT 1";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $user['usuario'];
    $_SESSION['rol']     = $user['rol'];

    if ($user['rol'] === 'Administrador') {
        header("Location: ../paginas/admin.php");
    } elseif ($user['rol'] === 'Asistente') {
        header("Location: ../paginas/asistente.php");
    }
    exit();
} else {
    echo "<script>
            alert('Usuario o contraseña incorrectos');
            window.location.href='index.php';
          </script>";
}
?>
