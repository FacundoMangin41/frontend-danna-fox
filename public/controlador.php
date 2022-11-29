<?php

use Models\User;

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();
  

  $existingNombreUsuario = $em->getRepository('Models\User')->findOneBy(['nombreusuario' => $_POST['nombreusuario']]); #busca el cliente asociado al numerodocumento del formulario
  $existingPass = $em->getRepository('Models\User')->findOneBy(['contraseña' => $_POST['contraseña']]);


  if (isset($existingNombreUsuario) and isset($existingPass)) { //Verificacion de logueo
        header("Location:http://localhost/frontend-danna-fox/");
        
  } else {

    echo"<script>alert('Documento o Clave Incorrecto.');location='login.php';</script>";

    }
    