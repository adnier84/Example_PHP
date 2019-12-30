<?php
//link to CSS
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
            
                $Registro_id=$_GET['variable'];
                
                $consulta='DELETE FROM datos_usuarios WHERE id='.$Registro_id;
                mysqli_query($conectar,$consulta);
                
                echo'<form class="Confirmacion" action="Mostrar.php" method="GET">'
                                .'Registro Eliminado'
				.'<input style="margin:10px auto" class="botones"  type="submit" value="Volver">'
			.'</form>';
	
	        
            
        
        
        
	
	
?>

