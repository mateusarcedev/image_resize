<?php
header("Content-disposition: attachment; filename=imagem.png");
header ('Content-Type: image/png');
readfile("imagem.png");
?>