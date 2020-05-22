
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Subir Archivo Excel a MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="description" content="Programa básico para subir archivos excel con extensión csv.">
  	<meta name="keywords" content="HTML, CSS, XML, JavaScript, PHP, BOOTSTRAP, AJAX, MYSQL">
  	<meta name="author" content="Ing. Aldair Morales Cuellar">
</head>
<body>
	<section>
		<div class="content">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<h3>Programación con PHP+Bootstrap+MySQL</h3>
					</div>
					<br>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<h4>Subir Archivo Excel a MySQL con PHP</h4>
				<form action="controller/subir.php" class="formulariocompleto" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="file" name="archivo" id="archivo" class="form-control" />
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-danger" name="enviar" id="enviar">Subir Archivo</button>
					</div>
				</form>
				<p>Desarrollado por: <strong><a href="http://www.ingmorales.com" target="_blank">Ing. Aldair Morales</a></strong></p>
			</div>
			<div class="col-3"></div>

		</div>
	</div>
	<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
	<script type="text/javascript" src="javascript/jquery.js"></script>
</body>
</html>
