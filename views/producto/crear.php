<h1>Crear nuevos productos</h1>
<form action="<?=base_url?>producto/save" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del producto">
  
  
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descipcion" class="form-control" id="exampleFormControlInput1" placeholder="Descripcion del producto">
  
 
    <label for="precio">Precio</label>
    <input type="text" name="precio" class="form-control" id="exampleFormControlInput1" placeholder="Precio del producto">
 
  
    <label for="stock">Stock</label>
    <input type="number" name="stock" class="form-control" id="exampleFormControlInput1" >

    
    <label for="categoria">Categoria</label>
    <?php $categorias = Utilities::showCategorias(); ?>
    <select name="categoria">
    <?php while($cat = $categorias->fetch_object()): ?>
      <option value="<?=$cat->id?>"><?=$cat->nombre;?>
      </option>
<?php endwhile; ?>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" class="form-control" id="exampleFormControlInput1">
    <input type="submit" value="Guardar">
  </div>

  </form>