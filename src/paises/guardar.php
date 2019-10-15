<?php 
$mysqli = new mysqli('mysql', 'root', 'password','itec_test', 3306);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



$pais = [
	'id' => $_POST['id'],
	'nombre' => $_POST['nombre'],
	'iso' => $_POST['iso'],
];

$query = "UPDATE paises set nombre = '".$pais['nombre']."', iso = '".$pais['iso']."' WHERE id = ".$pais['id'];

$result = $mysqli->query($query);

if($result) header('Location: index.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar Pais <?php if(isset($pais)) { echo ' | '.$pais['nombre']; } ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
    	<br>
		<br>
		<br>
    	<?php if(!$result) : ?>
			<div class="alert alert-danger" role="alert">
  				Hubo un error al guardar el Pais
			</div>
		<?php endif ?>
    </div>
  </div>
</div>

<!--JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>