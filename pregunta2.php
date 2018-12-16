<?php
$zodico = [
	"Acuario",
	"Piscis",
	"Aries",
		"Tauro",
	"Géminis",
	"Cáncer",
	"Leo",
	"Virgo",
	"Libra",
	"Escorpio",
	"Sagitario",
	"CAPRICORNIO"

];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>pregunta 2</title>
</head>
<body  style="background: #b7a7a7;">
	<h1>los 12 signo zodiacales</h1>
	<ul >		
		<?php foreach ($zodico as $key => $value) {?>
		<li style="color: rgba(<?php echo $key * 50?>, <?php echo $key * 100?>, 74, 0.68);;"><?php echo  $value?></li>
		<?php 	} ?>
	</ul>

</body>
</html>