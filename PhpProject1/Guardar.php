<?php   //link to CSS
	echo'<link rel="stylesheet" href="Estilos.css"/>';
        
        //conectamos Con el servidor
	$username="root";  
	$password="";  
	$hostname = "localhost";  
	$conectar=mysqli_connect($hostname,$username,$password);
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar,"bd_formulario");
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	//hacemos la sentencia de sql     
	$sql="INSERT INTO datos_usuarios (nombre,correo,mensaje) VALUES('$nombre','$correo','$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conectar,$sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"<div class='Confirmacion'>Datos Guardados Correctamente<br><br><a style='padding:5px 10px;text-decoration: none' class='botones' href='index.php'>Volver</a></div>";
	}

?>

