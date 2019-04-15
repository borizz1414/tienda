 <!-- BANNER -->
 
<!-- BANNER -->
<div class="banner-login">
<div class="login-register">
      <?php if(!isset($_SESSION['identity'])): ?>
    <div class="maps-form">
        <form action="<?=base_url?>usuario/login" method="POST">
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email-input" name="email" aria-describedby="emailHelp"
              placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password-input" name="password" required placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            <a href="" id="olvido_clave"><label class="form-check-label" for="exampleCheck1">¿Olvido su clave? /
                Recuperar usuario</label></a>
          </div>
          <button type="submit" class="btn btn-primary" id="btn-registrar" value="registrarse">Registrarse</button>

          <button type="submit" class="btn btn-primary" id="btn-login">Iniciar sesión</button>
        </form>
      </div>
<?php else: ?>
<h3><?= $_SESSION['identity']->nombre ?></h3>
<h3><?= $_SESSION['identity']->apellidos ?></h3>
<?php endif; ?>

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

      