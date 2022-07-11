<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Redimensionador de imagem</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="shortcut icon" href="logo.svg" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<div class="container mt-3">

		


		<div class="card mt-3">
			<h5 class="card-header bg-primary bg-gradient text-white">Redimensionar imagem</h5>
			<div class="card-body">
				<form method="POST" action="redimensionar.php" enctype="multipart/form-data">
					<div class="input-group">
						<input type="file" name="arquivo" class="form-control" id="inputGroupFile04"
							aria-describedby="inputGroupFileAddon04" aria-label="Upload" required>
						<button class="btn btn-outline-primary" type="submit" id="inputGroupFileAddon04">Redimensionar</button>
					</div>
				</form>
			</div>
		</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>
	
</body>

</html>