<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        ISTP ARGENTINA — CATEGORIAS
      </a>

      <div class="ms-auto d-flex align-items-center gap-3">
        <span class="text-white small">Bienvenido, usuario</span>
        <a href="../paginas/index.php" class="btn btn-sm btn-light">Inicio</a>
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



    <div class="contenedor">
        <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Categorias</h1>
                    <p>
                        Los tipos de multimedia se clasifican según los medios que 
                        combinan para comunicar información. Aquí te presento los principales 
                        tipos de multimedia:
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="../images/monitorr.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>

                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Monitor 🖥️</a>
                            <p class="card-text">
                               Representación visual de información. Puede ser una foto, dibujo o gráfico que ayuda a reforzar el mensaje.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="../images/mouse.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>

                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Mouse 🖱️</a>
                            <p class="card-text">
                                Sonido grabado, como música, voz o efectos, que complementa o enriquece otros medios.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="../images/teclado.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Teclado ⌨️</a>
                            <p class="card-text">
                               Secuencia de imágenes en movimiento con sonido. Ideal para contar historias o explicar procesos.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Separador-->
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="../images/pc.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>

                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">PC 🖲️</a>
                            <p class="card-text">
                               Imágenes en movimiento creadas digitalmente. Se usa para mostrar acciones o ideas de forma visual y creativa.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="../images/proyector.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>

                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Proyector 📽️</a>
                            <p class="card-text">
                               Es la forma escrita de la información. Se usa para comunicar ideas, dar instrucciones o complementar otros medios.
                            </p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>