<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre el Sistema</title>
    <link rel="stylesheet" href="../css/about.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- include cabecera -->
  <?php include("../includes/cabecera.html"); ?>

    <!-- Sección Sobre el Sistema -->
    <section class="about-section">
        <div class="about-text">
            <h1>Sobre el sistema</h1>
            <p>
                Este sistema web fue diseñado para resolver la problemática del inventario en la jefatura de computación e informática, 
                mejorando la productividad y automatizando procesos.
            </p>
            <p>
                Permite llevar un control detallado de los equipos de cómputo en las aulas, registrando movimientos como altas, bajas, 
                mantenimientos y traslados, todo desde una plataforma intuitiva.
            </p>
        </div>
        <div class="about-image">
            <img src="../images/about.jpg" alt="Sistema Web">
        </div>
    </section>

    <!-- Sección Características -->
    <section class="features-section">
        <h2>Nuestras Características</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Información Dinámica</h3>
                <p>Estado general del sistema siempre actualizado.</p>
            </div>
            <div class="feature-card">
                <h3>Gestión de Equipos</h3>
                <p>Asignación por responsable o docente.</p>
            </div>
            <div class="feature-card">
                <h3>Reportes Rápidos</h3>
                <p>Reporte inmediato de fallas y necesidades.</p>
            </div>
            <div class="feature-card">
                <h3>Seguridad y Auditoría</h3>
                <p>Registro detallado de actividad y cambios.</p>
            </div>
        </div>
    </section>

    <!-- Sección de Recursos -->
    <section class="section-container">
        <h2>Recursos Disponibles</h2>
        <div class="card-grid">
        <div class="card">
            <img src="../images/computadoras.jpg" alt="Computadoras">
            <h3>Computadoras</h3>
            <p>Inventario detallado por equipo, número de serie y estado operativo.</p>
        </div>
        <div class="card">
            <img src="../images/proyectores.jpg" alt="Proyectores">
            <h3>Proyectores</h3>
            <p>Registro de proyectores disponibles, mantenimiento y ubicación.</p>
        </div>
        <div class="card">
            <img src="../images/perifericos.jpg" alt="Periféricos">
            <h3>Red y Periféricos</h3>
            <p>Seguimiento de switches, routers, teclados y otros dispositivos.</p>
        </div>
        </div>
    </section>

     <!-- include footer -->
  <?php include("../includes/footer.html"); ?>

  <!-- include login -->
  <?php include("../includes/login.html"); ?>
  
</body>
</html>
