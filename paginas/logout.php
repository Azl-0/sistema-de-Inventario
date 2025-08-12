<?php

/*
En PHP no puedes evitar que el navegador muestre la copia que ya tiene en caché si el usuario no recarga ni interactúa.

Lo que sí puedes garantizar es que en cuanto intente interactuar, el servidor detecte que no hay sesión y no le permita continuar.

Esto es el comportamiento correcto de cualquier sistema web que dependa solo de PHP y cabeceras HTTP. */


session_start();

// Vacía la sesión
$_SESSION = array();

// Destruye la sesión
session_destroy();

// Redirige al login
header("Location: index.php");
exit();
?>
