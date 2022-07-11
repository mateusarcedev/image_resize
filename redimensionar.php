<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.0.slim.js"
		integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Imagem Redimensionada</title>
</head>

<body>

	<?php
	$altura = "300";
	$largura = "300";
	echo "Altura pretendida: $altura - largura pretendida: $largura <br>";
	
	switch($_FILES['arquivo']['type']):
		case 'image/jpeg';
		case 'image/pjpeg';
			$imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			
			$altura_original = imagesy($imagem_temporaria);
			
			echo "largura original: $largura_original - Altura original: $altura_original <br>";
			
			$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
			
			$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			imagejpeg($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);
			
			echo "<img src='arquivo/".$_FILES['arquivo']['name']."'>";
			
			
		break;
		
		//Caso a imagem seja extensão PNG cai nesse CASE
		case 'image/png':
		case 'image/x-png';
			$imagem_temporaria = imagecreatefrompng($_FILES['arquivo']['tmp_name']);
			
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);
			echo "Largura original: $largura_original - Altura original: $altura_original <br> ";
			
			/* Configura a nova largura */
			$nova_largura = $largura ? $largura : floor(( $largura_original / $altura_original ) * $altura);

			/* Configura a nova altura */
			$nova_altura = $altura ? $altura : floor(( $altura_original / $largura_original ) * $largura);
			
			/* Retorna a nova imagem criada */
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			
			/* Copia a nova imagem da imagem antiga com o tamanho correto */
			//imagealphablending($imagem_redimensionada, false);
			//imagesavealpha($imagem_redimensionada, true);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			//função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
			imagepng($imagem_redimensionada, 'arquivo/' . $_FILES['arquivo']['name']);
			
			echo "<img src='arquivo/" .$_FILES['arquivo']['name']. "'>";

			echo  '<form action="download.php"><button type="submit" class="btn btn-primary">Salvar</button></form>'; 
			
			break;
	endswitch;
?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>
</body>

</html>