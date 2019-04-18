 <!-- BANNER -->
<!-- BANNER -->
<div class="banner-login">
<div class="login-register">
      
      <div class="dropdown-menuu">
  <form class="px-4 py-3" action="<?=base_url?>usuario/login" method="POST">
    <div class="form-group"><?php if(isset($_SESSION['identity'])): ?>
    <div class="perfil-content">
    <img src="<?=base_url?>assets/img/user.png" alt="" id="user_png"><br>
    <label  for="exampleDropdownFormEmail1">Bienvenido  <?=$_SESSION['identity']->nombre ?></label>
    <label for="exampleDropdownFormEmail1"> <?= $_SESSION['identity']->apellidos ?></label>
    <ul id="menu-perfil">
    <a href=""><li>🕴️  Mi perfil</li></a>
      <a href=""><li>📦 Mis pedidos</li></a>
      <?php if(isset($_SESSION['admin'])): ?>
      <a href="<?=base_url?>categoria/crear"><li>🖌️ Gestionar categorias</li></a>
      <a href=""><li>📝 Gestionar productos</li></a>
      <a href=""><li>📝 Gestionar pedidos</li></a>
    </ul>
<?php endif; ?>
    </div>
    <div class="cc">
      <a href="<?=base_url?>usuario/logout" id="cerrar-sesion">Cerrar sesion</a>
    </div>
    <?php else: ?>
      <label for="exampleDropdownFormEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" name="email" placeholder="email@example.com">
      <label for="exampleDropdownFormPassword1">Password</label>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" name="password" placeholder="Password">
      
      <label class="form-check-label" for="dropdownCheck">
      <button type="submit" class="btn btn-primary">Iniciar sesion</button>
        <a class="dropdown-item" href="<?=base_url?>usuario/registro">No estas registrado? Registrate</a>
  <a class="dropdown-item" href="#">Olvidastes tu contraseña?</a>
       
        </label>
    <?php endif; ?>
    </div>

</div>


      </div>
<section class="banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/pic09.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/pic08.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/pic09.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>

  </div>
  <hr>

      