<h1>Gestionar productos</h1>
<a href="<?=base_url?>producto/crear"><button id="btn-agg-categoria" class="btn-primary btn-group">Agregar producto +</button></a>
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == "complete"): ?>
<strong> El producto se ha añadido correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] != "complete"): ?>
<strong> El producto no se ha añadido correctamente</strong>
<?php endif; ?>
<?php Utilities::deleteSession('producto'); ?>

<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] != "complete"): ?>
<strong> El producto se ha borrado correctamente</strong>
<?php endif; ?>
<?php Utilities::deleteSession('delete'); ?>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
      <th scope="col">Acciones</th>

    </tr>
    </thead>
  <tbody>
    <tr>
<?php while($pro = $productos->fetch_object()): ?>
      <th scope="row"><?=$pro->id;?></th>
      <th><?=$pro->nombre;?></th>
      <td><?=$pro->precio;?></td>
      <td><?=$pro->stock;?></td>
      <th><a href="<?=base_url?>producto/editar&id=<?=$pro->id?>"><button class="btn btn-success">Editar</button></a>
      <a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>"><button class="btn btn-danger">Eliminar</button></a></th>
  </tbody>
<?php endwhile; ?>
</table>