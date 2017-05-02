<?php 
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$ciudad = $_POST['ciudad'];
	$foto = $_FILES['foto'];
	move_uploaded_file($_FILES['foto']['tmp_name'],"imagenes/".$_FILES['foto']['name']);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h1>Usuario</h1>
 	<?php echo $usuario; ?>
 	<h1>E-mail</h1>
 	<?php echo $email; ?>
 	<h1>Password</h1>
 	<?php echo $password; ?>
 	<h1>Ciudad</h1>
 	<?php echo $ciudad; ?>
 	<h1>Foto</h1>
 	<img src="imagenes/<?php echo $_FILES['foto']['name'] ?>" alt="">

 	<?php 
	var_dump($_POST);
	var_dump($_FILES);
 	 ?>
 </body>
 </html>
