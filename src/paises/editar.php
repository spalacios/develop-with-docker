<?php 
$mysqli = new mysqli('172.21.0.1', 'root', 'password','itec_test', 3306);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$paisId = $_GET['id'];

$query = "SELECT * FROM paises WHERE id = $paisId";

$result = $mysqli->query($query);

$pais = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Pais <?php if(isset($pais)) { echo ' | '.$pais['nombre']; } ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
    	<br>
		<br>
		<br>
    	<?php if(!$pais) : ?>
			<div class="alert alert-danger" role="alert">
  				El pais que desea editar no existe
			</div>
		<?php else : ?>
	      	<form action="guardar.php" method="POST">
	      		<input type="hidden" name="id" value="<?php echo $pais['id'] ?>">
			  	<div class="form-group">
			    	<label for="nombre">Nombre</label>
			    	<input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre del Pais" name="nombre" value="<?php echo $pais['nombre']?>">
			  	</div>
			  	<div class="form-group">
			    	<label for="iso">Password</label>
			    	<input type="text" class="form-control" id="iso" placeholder="ISO"
			    	name="iso" value="<?php echo $pais['iso']?>" maxlength="2">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		<?php endif; ?>
    </div>
  </div>
</div>

<!--JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>