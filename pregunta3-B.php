<?php 
session_start();
if(!isset($_SESSION["usuario"])){
	        header("Location: pregunta3-A.php");
	    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>pregunta 3</title>
</head>
<body>
	usuario  : <?php echo $_SESSION["usuario"];?>
</body>
</html>