<?php if(isset($categoria)) : ?>
<h1><?=$categoria->nombre?></h1>
<?php if($productos->num_rows == 0) : ?>
<p>No hay productos para mostrar</p>

<?php else: ?>

<h1>La categoria no existe</h1>
<?php endif; ?>
<?php endif; ?>