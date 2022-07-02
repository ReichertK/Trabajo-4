<?php
	
	//levanto con php los valores de las variables enviadas en la peticion:
	$colorPreferido = $_GET['color'];
	$fecha = $_GET['birthdate'];
	$nombre = $_GET['fullname'];
	$correo = $_GET['email'];

?>



<h1>Muestro los valores enviados</h1>

<div style="padding: 40px; text-align: center; font-size: 40px;background-color: <?php echo $colorPreferido ?>;">
<?php echo $colorPreferido ?>

</div>
<br>
<br>
<div style="padding: 40px; text-align: center; font-size: 40px;background-color: blue" >
<?php echo $fecha ?>

</div>
<br>
<br>
<div style="padding: 40px; text-align: center; font-size: 40px;background-color: yellow" >
<?php echo $nombre ?>

</div>
<br>
<br>
<div style="padding: 40px; text-align: center; font-size: 40px;background-color: red" >
<?php echo $correo ?>

</div>