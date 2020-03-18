<?php

require 'rc4.php';

$data = '';
$key = '';
$encript = '';
if (isset($_POST['key']) && isset($_POST['encript'])) {
	$key = $_POST['key'];
	$encript = $_POST['encript'];
	$desencript = $_POST['desencript'];
	$data = decryptRC4($key, $encript);
}

if (isset($_POST['clean'])) {
	$data = '';
	$key = '';
	$encript = '';
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Desencriptar mensaje aqui!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="desencript.php" method="post">
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Llave</label>
					    <input type="text" class="form-control" id="exampleFormControlInput1" name="key" placeholder="..." required="" value="<?php echo $key; ?>">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje Encriptado</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" name="encript" required="" rows="3"><?php echo $encript; ?></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Desencriptar</button>
					  <button type="submit" class="btn btn-primary" name="clean" value="clean">Limpiar</button>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Mensaje Desencriptado</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" name="desencript" rows="3"><?php echo $data; ?></textarea>
					  </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>