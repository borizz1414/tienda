<h1>Crear categoria</h1>
<form action="<?=base_url?>categoria/save" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Nombre</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nombre" placeholder="Nombre de la nueva categoria" required>
  </div>
  <div class="form-group">
    <input type="submit" value="Guardar" class="btn-success">
  </div>
</form>