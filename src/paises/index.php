<?php 
$mysqli = new mysqli('mysql', 'root', 'password','itec_test', 3306);

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$query = "SELECT * FROM paises ORDER BY nombre DESC;";

$result = $mysqli->query($query);

function print_row(array $row){
	$name = utf8_decode($row['nombre']);
	$editLink = '<a href="editar.php?id='.$row['id'].'">Editar</a>';
	$deleteLink = '<a href="borrar.php?id='.$row['id'].'">Borrar</a>';
	
	echo "<tr>";
	echo '<td>'.$row['id'].'</td>';
	echo "<td>$name</td>";
	echo '<td>'.$row['iso'].'</td>';
	echo "<td>$editLink <br> $deleteLink</td>";
	echo "</tr>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Listado de Paises</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col">
      	<?php if(!$result) : ?>
			<h2>No hay resultados para mostrar</h2>
		<?php else : ?>
			<br>
			<br>
			<input type="text" class="form-control" name="" id="myInput" placeholder="Buscar">
			<br>
			<table id="myTable" class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Iso</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $result->fetch_assoc()) : ?>
						<?php print_row($row); ?>
					<?php endwhile; ?>
				</tbody>
			</table>
		<?php endif; ?>
    </div>
  </div>
</div>



<!--JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Script de Busqueda -->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>