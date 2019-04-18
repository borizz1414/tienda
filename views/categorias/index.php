<h1>Gestionar Categorias</h1>
<a href="<?=base_url?>categoria/crear"><button id="btn-agg-categoria" class="btn-primary btn-group">Agregar categoria +</button></a>
<table class="table table-striped">
<thead class="thead-dark">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
    </tr>
    </thead>
  <tbody>
    <tr>
<?php while($cat = $categorias->fetch_object()): ?>
      <th scope="row"><?=$cat->id;?></th>
      <td><?=$cat->nombre;?></td>
  </tbody>
<?php endwhile; ?>
</table>