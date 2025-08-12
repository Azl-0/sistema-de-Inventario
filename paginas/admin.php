<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Panel - Administrador</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <!-- CSS -->
  <link href="../css/panel.css" rel="stylesheet">
</head>
<body>


  <!-- include menu -->
  <?php include("../includes/desple.html"); ?> 

  <!-- Main content -->
  <main class="container py-4">
    <div class="row g-4">
      <div class="col-12">
        <h2 class="mb-3">Panel de administración</h2>
        <p class="text-muted">Accesos rápidos a las funciones principales.</p>
      </div>

      <div class="col-sm-6 col-md-4">
        <a href="usuarios.php" class="text-decoration-none">
          <div class="card card-action p-3 h-100">
            <div class="d-flex align-items-center gap-3">
              <i class="bi bi-people-fill fs-2 text-primary"></i>
              <div>
                <h5 class="mb-1">Gestión de usuarios</h5>
                <small class="text-muted">Crear, editar, eliminar y asignar roles</small>
              </div>
            </div>
          </div>
        </a>
      </div>

      <div class="col-sm-6 col-md-4">
        <a href="equipos.php" class="text-decoration-none">
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
        <a href="movimientos.php" class="text-decoration-none">
          <div class="card card-action p-3 h-100">
            <div class="d-flex align-items-center gap-3">
              <i class="bi bi-arrow-left-right fs-2 text-primary"></i>
              <div>
                <h5 class="mb-1">Movimientos</h5>
                <small class="text-muted">Altas, bajas, traslados y control por serie</small>
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
