<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
  <h1>Editar Productos <?=$pro->nombre?></h1>
  <?php $url_action= base_url."producto/save&id=".$pro->id;?>
  <?php else : ?>
<h1>Crear nuevos productos</h1>
<?php $url_action= base_url."producto/save";?>
<?php endif; ?>

<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>" id="exampleFormControlInput1" placeholder="Nombre del producto">
  
  
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?>" id="exampleFormControlInput1" placeholder="Descripcion del producto">
  
 
    <label for="precio">Precio</label>
    <input type="text" name="precio" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>" id="exampleFormControlInput1" placeholder="Precio del producto">
 
  
    <label for="stock">Stock</label>
    <input type="number" name="stock" class="form-control" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>" id="exampleFormControlInput1" >

    
    <label for="categoria">Categoria</label>
    <?php $categorias = Utilities::showCategorias(); ?>
    <select name="categoria">
    <?php while($cat = $categorias->fetch_object()): ?>
      <option value="<?=$cat->id?>"><?=$cat->nombre;?>
      </option>
<?php endwhile; ?>
</select>
    <label for="imagen">Imagen</label>
    <?php if(isset($pro) && is_object($pro) &&!empty($pro->imagen)) : ?>
    <img id="img-edit" src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="">
<?php endif; ?>
    <input type="file" name="imagen" class="form-control" id="exampleFormControlInput1">
    <input type="submit" value="Guardar">
  </div>

  </form>