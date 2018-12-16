<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>pregunta 3</title>
</head>
<body>
	<form action="" method="POST" >
			<div class="margin" >
				<label>usuario</label>
			</div>
			<div class="margin" >
				<input type="text" name="usuario">
			</div>
			<div class="margin" >
				<label>pasword</label>
			</div>		
			<div class="margin" >
				<input type="password"  name="password">		
			</div>
			<div class="margin" >
				<input type="submit" value="save"  name="save">
			</div>
	</form>
</body>
</html>
<?php 
	if(isset($_POST['save'])){
		if(isset($_POST['usuario']) &&  isset($_POST['password'])){
	if($_POST['usuario'] == 'ronald' && $_POST['password'] == '12345678'){
			$_SESSION["usuario"]=$_POST['usuario'];		
	   header("Location: pregunta3-B.php");
	
		}
		}	
	}

?>