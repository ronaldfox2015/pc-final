<!DOCTYPE html>
<html>
<head>
	<title>pregunta 4</title>
</head>
<body>
		<h1>Registro de usuarios</h1>
	<form action="" method="POST">
		<TABLE border="1">
		<tr><td>usuario<td><input type="text" name="usuario">
		<tr><td>password<td><input type="text" name="password">

		<tr><td><input type="submit" value="Enviar" name="btnEnv"><td><input type="reset" value="Limpiar" name="btnLim">	
		</TABLE>
	</form>	
</body>
</html>
<?php
	if(isset($_POST['btnEnv'])){
        $con = mysqli_connect('localhost','root','','mibase') or die('Error al conectar al servidor MySQL.');
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $cadCon = "SELECT * FROM usuario WHERE usuario = '{$usuario}' AND password = '{$password}' ";
        mysqli_query($con, $cadCon) or die('Error al buscar en la base de datos.');
        $setFil = mysqli_query($con, $cadCon);
        $fil = mysqli_fetch_array($setFil);
        if (empty($fil)) {
            $cadCon = "SELECT count(*) FROM usuario";
            mysqli_query($con, $cadCon) or die('Error al buscar en la base de datos.');
            $setFil = mysqli_query($con, $cadCon);
            $fil2 = mysqli_fetch_array($setFil);
            if(!empty($fil2[0]) && $fil2[0]<5){
                #INSTRUCCION SQL INSERT
                 $insSql="INSERT INTO usuario (usuario, password) VALUES('{$usuario}','{$password}')";
                    mysqli_query($con,$insSql);
                     mysqli_close($con);
                 echo "Se guardo con exito";
            } else {
                             echo "ya existen 5 usuarios";

        }
               
        } else {
            echo "el usuario existe";
        }

    }  
?>
