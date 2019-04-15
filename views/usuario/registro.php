
<?php 
if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
 <div class="alert alert-success" role="alert">
  ¡Registrado Exitosamente! 😃
</div>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
<div class="alert alert-danger" role="alert">
  ¡Haz introducido un campo incorrecto! ☹️
</div>
<?php endif; ?>
<?php Utilities::deleteSession('register'); ?>
<section class="mapa">
      <div class="maps-form">
        <form action="<?=base_url?>usuario/save" method="POST">
          <div class="form-group">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="nombre" placeholder="First name" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="apellidos" placeholder="Last name" required>
                </div>
              </div>
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
      <div class="maps-content">
        <div class="maps-text">
          <div class="titulo-maps">
            <h1>Contacto</h1>
          </div>
          <div class="phone-maps">
            <p>📞 Phone:041414141414</p>
            <p>📌 Ubicación: El trebol, edo Vargas, Venezuela.</p>
            <p>📫 Correo: ferreteria@gmail.com</p>
            <p>🗓️ Horario: Lunes a Viernes | 9am a 6pm</p>
          </div>
          <div class="titulo-maps">
            <h1>Social</h1>
          </div>
          <div class="social-maps">
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter-square"></i></a>
            <a href=""><i class="fab fa-facebook-square"></i></a>
          </div>
          <div class="horario-maps">

          </div>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7843.747983676099!2d-67.0021511!3d10.5890238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a5d6d8082c1b7%3A0x2b62be13df1d372a!2sDistribuidor+El+Tr%C3%A9bol%2C+Autopista+Caracas+-+La+Guaira%2C+Maiquet%C3%ADa+1162%2C+Vargas!5e0!3m2!1ses-419!2sve!4v1555183664870!5m2!1ses-419!2sve"
          width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    
