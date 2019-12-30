<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">
        <title>Example php</title>
        <link rel="stylesheet" href="Estilos.css"/>
    </head>
    
    <body>
        
                    <fieldset class="Marco">
                        <legend style="font-size: 24px;color: maroon;text-shadow: 2px 2px 2px black">Contacto</legend>
			<form action="Guardar.php" method="POST">                            
                                <p class="id_p">Nombre</p>
				<label for="nombre"></label>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<p class="id_p">Correo</p>
				<label for="correo"></label>
				<br>
				<input type="email" name="correo" placeholder="alguien@algo.com" required>
				<p class="id_p">Mensaje</p>
				<label for="mensaje"></label>
				<br>
				<textarea name="mensaje" placeholder="Mensaje" required></textarea>
				<br>
				<br>
				<input class="botones" type="submit" value="Enviar">
				<br>
				<br>
			</form>
			<form action="Mostrar.php" method="GET">
				<input  class="botones" type="submit" value="Mostrar datos">
			</form>
                    </fieldset>
		
    </body>
</html>
