<!DOCTYPE html>
<html>
<head>
	<title>Enviar Email</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-6">
    	<br><br><br>
      	<form action="send_email.php" method="POST">
      	  	<div class="form-group">
		    	<label for="nombre">Nombre</label>
		    	<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="nombre" >
		  	</div>
		  	<div class="form-group">
		    	<label for="email">E-mail</label>
		    	<input type="text" class="form-control" id="email" placeholder="Ingrese Email" name="email">
		  	</div>
		  	<div class="form-group">
		    	<label for="content">Mensaje</label>
		    	<textarea class="form-control" id="content" placeholder="Ingrese el asunto" name="content"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
    </div>
  </div>
</div>



<!--JQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>