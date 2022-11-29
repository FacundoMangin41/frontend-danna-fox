<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="styles/estilos.css">
	

</head>  
    <body>

        <form action= "controlador.php" method="post">   
            <section class="formulario">
                <img src="../resources/Danna Fox.png"  style="width: 200px; height:200px; margin-left:28% ;">
                <h1>Login</h1>
            
                <div class="contenedor">

                    <div class="input-contenedor">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Nombre Usuario" name="nombreusuario">
                    
                    </div>
                    
                    <div class="input-contenedor">
                        <i class="fas fa-envelope icon"></i>
                        <input type="password" placeholder="Contraseña" name="contraseña">                
                    </div>
                    
                    
                    <input name="ingresarpagina" type="submit" value="Login" class="button">
                    <p>¿No tienes una cuenta?<a class="link" href="./register.php"> Registrate </a></p>
                </div>
            </section>
        </form>
    </body>
</html>