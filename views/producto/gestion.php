<h1>Gestionar productos</h1>
<a href="<?=base_url?>producto/crear"><button id="btn-agg-categoria" class="btn-primary btn-group">Agregar producto +</button></a>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Stock</th>
    </tr>
    </thead>
  <tbody>
    <tr>
<?php while($pro = $productos->fetch_object()): ?>
      <th scope="row"><?=$pro->id;?></th>
      <th><?=$pro->nombre;?></th>
      <td><?=$pro->precio;?></td>
      <td><?=$pro->stock;?></td>
  </tbody>
<?php endwhile; ?>
</table>