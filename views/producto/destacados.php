
 <!--TEXTO PRODU</div>CTOS DESTACADOS-->
 <div class="texto-productos">
      <div class="mas-vendidos">
        <h2>🔝 Todos los productos 🔝</h2>

      </div>
    </div>
    <hr>
 <!--CONTENIDO CENTRAL-->
 <section class="productos">
     <div class="categorias-product sombra">
     <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Nombre del producto"  aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Buscar</button>
  </div>
</div>
<h4>Categorias</h4>
         <div class="categorias-items">
         <div class="btn-group-vertical cat-items" role="group" aria-label="Button group with nested dropdown">
         <?php
          $categorias = Utilities::showCategorias();
          while($cat = $categorias->fetch_object()): ?>
  <button type="button" class="btn btn-secondary"> <?=$cat->nombre;?></button>

  <?php endwhile; ?>
  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Accesorios<button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
</div>
         </div>
     </div>
     <div class="all-products">
     <div class="card">
         <div class="img">
             <img src="assets/img/pic01.jpg">
         </div>
         <div class="titulo">
             <h1>Gas refrigeranssssssssssssssssssssssstes</h1>
         </div>
         <div class="precio">
             <h2>Bs S. 1.000.000</h2>
         </div>
     </div>
     <div class="card">
         <div class="img">
             <img src="assets/img/pic01.jpg">
         </div>
         <div class="titulo">
             <h1>Gas refrigerante</h1>
         </div>
         <div class="precio">
             <h2>Bs S. 1.000.000</h2>
         </div>
     </div>
     <div class="card">
         <div class="img">
             <img src="assets/img/pic01.jpg">
         </div>
         <div class="titulo">
             <h1>Gas refrigerante</h1>
         </div>
         <div class="precio">
             <h2>Bs S. 1.000.000</h2>
         </div>
     </div>
     <div class="card">
         <div class="img">
             <img src="assets/img/pic01.jpg">
         </div>
         <div class="titulo">
             <h1>Gas refrigerante</h1>
         </div>
         <div class="precio">
             <h2>Bs S. 1.000.000</h2>
         </div>
     </div>
   
 
     
    </div>
 </section>
 </div>
 