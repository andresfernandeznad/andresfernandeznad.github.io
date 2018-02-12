<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="estilosGenerales.css">
	<link rel="shortcut icon" href="imagenes\favicon.ico" >
</head>
<body id="bodybiblio">
	<div id="titulo2">
		Tabla de formulario
	</div>

	<table>
		<tr>
			<td colspan="3" rowspan="" headers="" id="titulo">DATOS PERSONALES</td>


		</tr>

		<tr id="impar">
			<td colspan="" rowspan="" headers="">Nombre</td>
			<td colspan="" rowspan="" headers="">Apellido</td>
			<td colspan="" rowspan="" headers="">Password</td>

		</tr>
		<tr>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['nombre'];
				?></td>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['apellido'];
				?></td>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['contra'];
				?></td>

		</tr>
		<tr id="impar">
			<td colspan="3" rowspan="" headers="">ENCUESTA</td>


		</tr>
		<tr>
			<td colspan="" rowspan="" headers="" >Aficiones</td>
			<td colspan="" rowspan="" headers="">Utilidad</td>
			<td colspan="" rowspan="" headers="" >Comentario</td>

		</tr>
		<tr id="impar">
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['gusto1'];
				?></td>
			<td colspan="" rowspan="" headers=""><?php
				echo $_GET['gusto'];
				?></td>
			<td colspan="" rowspan="" headers="" id="largo"><?php
				echo $_GET['comentarios'];
				?></td>

		</tr>


	</table>

	<div id="volver"><a href="index.html">Volver a la página principal</a></div>
</body>
</html>