 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!--CSS-->
  <link href="<?=base_url?>assets/css/estilos.css" rel="stylesheet">
  <!--GOOGLE FONTS-->
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="contenedor">
    <!--CABECERA-->
    <header class="header">
      <div class="ofertas-header">
        <p id="ofertas">⚡20% de descuento de toda la web⚡</p>
      </div>
      <!--MENU-->
      <nav class="navbar">
        <div class="logo">
          <h3>Ferreteria San Arnaldo &copy;</h3>
        </div>
        <div class="menu-header">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" href="<?=base_url?>">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
              <div class="dropdown-menu">
              <a class="dropdown-item disabled" href="#">Categorias</a>
              <?php 
              $categorias = Utilities::showCategorias();
              while($cat = $categorias->fetch_object()): ?>
              <a class="dropdown-item" href="#"><?=$cat->nombre;?></a>
              <?php endwhile; ?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Accesorios</a>
              </div>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre nosotros</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
        </div>
        <div class="iconos">
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-search" id="nav-icon"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>

      </nav>

    </header>
    <div class="contenedor-section">
 
  