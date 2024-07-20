<?php
//tomamos la sesión con su nombre y perfil
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid text-light">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon border border-light"> </span>
    </button>
    <?php if (session()->perfil_id == 1) : ?>
      <div class="btn btn-secondary active btnUser btn-sm bg-light mx-3">
        <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>

      <!-- OPCIONES ADMINISTRADOR LOGEADO (Y SI) -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">
              <img src="<?php echo base_url('assets/img/icono_camara.jfif'); ?>" alt="Logo" width="30" height="30" class="d-inline-block rounded-circle border border-light">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light fw-bold" aria-current="page" href="<?php echo base_url('principal'); ?>">BEVIMAX</a>
          </li>
          <li>
            <a class="nav-link text-light" href='<?php echo base_url('registro'); ?>'>Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('crud_usuarios'); ?>'>Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('/logout'); ?>'>Cerrar sesión</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="z-index: 1500;">
              Consultas
            </a>
            <ul class="dropdown-menu text-light ">
              <li><a class="dropdown-item" href="#">Métodos de trabajo</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>

    <?php elseif (session()->perfil_id == 2) : ?>
      <div class="btn btn-secondary active btnUser btn-sm bg-light mx-3 ">
        <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
      </div>

      <!-- OPCIONES CLIENTES LOGEADOS -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <a class="navbar-brand" href="principal">
              <img src="assets/img/icono_camara.jfif" alt="Logo" width="30" height="30" class="d-inline-block rounded-circle border border-light">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light fw-bold" aria-current="page" href="<?php echo base_url('principal'); ?>">BEVIMAX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('acerca_de'); ?>'>Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('quienes_somos'); ?>'>Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('galeria'); ?>'>Mis eventos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('/logout'); ?>' aria-disabled="true">Cerrar sesión</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consultas
            </a>
            <ul class="dropdown-menu text-light ">
              <li><a class="dropdown-item" href="#">Métodos de trabajo</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php else : ?>
      <!-- OPCIONES PARA NO LOGEADOS -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li>
            <a class="navbar-brand" href="principal">
              <img src="assets/img/icono_camara.jfif" alt="Logo" width="30" height="30" class="d-inline-block rounded-circle border border-light">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light fw-bold" aria-current="page" href="<?php echo base_url('principal'); ?>">BEVIMAX</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('acerca_de'); ?>'>Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('quienes_somos'); ?>'>Quienes somos</a>
          </li>
          <li>
            <a class="nav-link text-light" href='<?php echo base_url('registro'); ?>'>Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href='<?php echo base_url('login'); ?>'>Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Consultas
            </a>
            <ul class="dropdown-menu text-light ">
              <li><a class="dropdown-item" href="#">Métodos de trabajo</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    <?php endif; ?>
  </div>
</nav>