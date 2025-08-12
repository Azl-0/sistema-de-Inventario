<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel - Asistente</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../css/panel.css" rel="stylesheet">
</head>
<body>

 <!-- include menu -->
   <!-- Topbar -->
  <nav class="navbar top-bar navbar-expand-lg">
    <div class="container-fluid">
      <button class="btn btn-outline-light me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
        <i class="bi bi-list"></i>
      </button>
<!-- cabecera -->
      <a class="navbar-brand text-white brand" href="#">
        <img src="../images/escudo.gif" width="36" alt="logo">
        ISTP ARGENTINA — ASISTENTE
      </a>

      <div class="ms-auto d-flex align-items-center gap-3">
        <span class="text-white small">Bienvenido, Asistente</span>
        <a href="../paginas/asistente.php" class="btn btn-sm btn-light">Inicio</a>
      </div>
    </div>
  </nav>

  <!-- Sidebar / menus-->
  <div class="offcanvas offcanvas-start" id="sidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menú</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column p-0">
      <nav class="nav flex-column p-3 gap-1">
        <a class="nav-link" href="equipos_asist.php"><i class="bi bi-laptop me-2"></i>Gestión de equipos</a>
        <a class="nav-link" href="movimientos_asist.php"><i class="bi bi-arrow-left-right me-2"></i>Movimientos</a>
        <a class="nav-link" href="reportes.php"><i class="bi bi-file-earmark-text me-2"></i>Generar reportes</a>
        <a class="nav-link" href="categorias.php"><i class="bi bi-tags-fill me-2"></i>Categorías</a>
        <a class="nav-link" href="busqueda.php"><i class="bi bi-upc-scan me-2"></i>Búsqueda por código</a>
      </nav>

      <div class="sidebar-footer mt-auto">
        <div class="px-3">
          <small>Usuario: <strong>asistente</strong></small><br>
          <a href="logout.php" class="small text-decoration-none">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <main class="container py-4">
    <div class="row g-4">
      <div class="col-12">
        <h2 class="mb-3">Panel de asistente</h2>
        <p class="text-muted">Accesos rápidos a las funciones disponibles.</p>
      </div>

      <div class="col-sm-6 col-md-4">
        <a href="equipos_asist.php" class="text-decoration-none">
          <div class="card card-action p-3 h-100">
            <div class="d-flex align-items-center gap-3">
              <i class="bi bi-laptop fs-2 text-primary"></i>
              <div>
                <h5 class="mb-1">Gestión de equipos</h5>
                <small class="text-muted">Agregar/editar/eliminar equipos</small>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4">
        <a href="movimientos_asist.php" class="text-decoration-none">
          <div class="card card-action p-3 h-100">
            <div class="d-flex align-items-center gap-3">
              <i class="bi bi-arrow-left-right fs-2 text-primary"></i>
              <div>
                <h5 class="mb-1">Movimientos</h5>
                <small class="text-muted">Altas, bajas y traslados</small>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </main>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
