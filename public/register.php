<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
   <script src="https://kit.fontawesome.com/092fed5d7c.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./styles/estilos.css">
	
</head>  
<body>
    <form action= "./add-user.php" method="post"> <!-- action es la ruta donde apunta  -->
      <section class="formulario">
         <img src="../resources/Danna Fox.png"  style="width: 200px; height:200px; margin-left:28% ;">
         <h1>Registrate</h1>
          <div class="contenedor">
          
              
              <div class="input-contenedor">
              <i class="fas fa-user icon"></i>
              <input type="text" placeholder="Nombre" required="" pattern="[a-zA-Z]+" name="nombre">        
              </div>
              
              <div class="input-contenedor">
                 <i class="fas fa-user icon"></i>
                 <input type="text" placeholder="Apellido" required="" pattern="[a-zA-Z]+" name="apellido">   
              </div>
              
              <div class="input-contenedor">
                 <i class="fas fa-id-card icon"></i>
                 <input type="text" placeholder="Tipo de documento" maxlength="3" minlength="3" required="" pattern="[a-zA-Z]+" name="tipodocumento">        
              </div>
     
              <div class="input-contenedor">
                 <i class="fas fa-id-card icon"></i>
                 <input type="integer" placeholder="Numero de documento" maxlength="8" minlength="6" required="" pattern="[0-9]+" name="numerodocumento">        
              </div>
              
              <div class="input-contenedor">
                 <i class="fas fa-calendar icon"></i>
                 <input type="date" placeholder="Fecha de nacimiento" required="" name="nacimiento">        
              </div>
     
              <div class="input-contenedor">
                 <i class="fas fa-envelope icon"></i>
                 <input type="email" placeholder="Correo Electronico" name="email" id="email" maxlength="255" required name="email">        
              </div>
              
              <div class="input-contenedor">
                 <i class="fas fa-phone icon"></i>
                 <input type="float" placeholder="Telefono" required="" name="telefono">        
              </div>
     
              <input type="submit" value="Registrarse" class="button">
              <p>Al registrarse, acepta nuestras Condiciones de uso y Politicas de privacidad.</p>
              <p>¿Ya tienes cuenta?<a class="link" href="./login.php"> Click Aqui </a></p>
          </div>
         </section>
   </form>
</body>
</html>