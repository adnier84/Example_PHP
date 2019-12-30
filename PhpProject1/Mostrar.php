<?php   //link to CSS
	echo'<link rel="stylesheet" href="Estilos.css"/>'; 

	//Abrimos php
	//hacemos la conexion para la base de datos:
	$username="root";  
	$password="";  
	$hostname = "localhost";  
	$conectar= mysqli_connect($hostname,$username,$password);
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Encontro El Servidor";
	}else{
		//verificamos la base de datos
		$base=mysqli_select_db($conectar,"bd_formulario");
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//Se Hace la sentencia sql:
	$sql="SELECT * FROM datos_usuarios"; //->Donde * es igual a todos los campos entonces la sentencia seria esta-> seleccionamos todos los campos de la tabla datos
	//ejecutamos la sentencia de slq:
	$ejecutar=mysqli_query($conectar,$sql);
	//traenos todos los valores en un array:
	$datos=mysqli_fetch_array($ejecutar,MYSQLI_NUM);
	//imprimimos los datos de manera dinamica
        echo '<fieldset style="width: 800px" class="Marco">';
        echo '<legend style="font-size: 24px;color: maroon;text-shadow: 2px 2px 2px black">Informacion de Contactos</legend>';
	echo "<table border='1'>";
	echo"<tr>";
	echo "<th align='center'><b>Nombre</th>";
	echo "<th align='center'><b>Correo</th>";
	echo "<th align='center'><b>Mensaje</th>";
	echo"</tr>";
	for($i=0; $i<$datos; $i++){
		echo"<tr>";
                echo"<td>$datos[1]"                       
                       . "<a style='text-decoration: none;float: right' class='botones' href='Eliminar_Registro.php?variable=$datos[0]'>Eliminar</a>"		      
                   ."</td>";
		echo"<td>$datos[2]</td>";
		echo"<td>$datos[3]</td>";
                
		echo"</tr>";
		$datos=mysqli_fetch_array($ejecutar,MYSQLI_NUM);
	}
        
	echo "</table>";
        echo "<br><a style='text-decoration: none;padding: 5px 10px' class='botones' href='index.php'>Volver</a>";
        echo '</fieldset>';
?>

