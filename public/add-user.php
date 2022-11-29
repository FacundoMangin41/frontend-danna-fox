<?php

use Models\User;

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();

if (isset($_POST['numerodocumento'])) {  #comprueba que el formulario se envio 
  
  $var = 'LdL';

  $user = new User(); #creacion del objeto user
 

  $existingDocument = $em->getRepository('Models\User')->findOneBy(['numerodocumento' => $_POST['numerodocumento']]); #busca el cliente asociado al numerodocumento del formulario
  $existingEmail = $em->getRepository('Models\User')->findOneBy(['email' => $_POST['email']]);
  $existingPhone = $em->getRepository('Models\User')->findOneBy(['telefono' => $_POST['telefono']]);


  if (isset($existingDocument)) {
    echo "Ya existe un cliente con ese DNI";
    return;
  } else {
    if (isset( $existingEmail)) {
      echo "Ya existe un cliente con ese Email";
      return;
    } else {
      if (isset($existingPhone)) {
        echo "Ya existe un cliente con ese Telefono";
        return;
      } else {

          $user->setNombre($_POST['nombre']);
          $user->setApellido($_POST['apellido']);
          $user->setTipoDocumento($_POST['tipodocumento']);
          $user->setNumeroDocumento($_POST['numerodocumento']);
          $user->setEmail($_POST['email']);
          $user->setNacimiento($_POST['nacimiento']);
          $user->setTelefono($_POST['telefono']);

         

        //Contraseña va a ser igual a VAR + Numerodecocumento
        $user->setContraseña($var.$_POST['numerodocumento']);



        $user->setNombreUsuario(strtolower(substr(($_POST['nombre']),0,1)).strtolower($_POST['apellido']));  
        //El substr ,0,1 lo que hace es agarrar solo la primer letra 
        //(strtolower($_POST['apellido'])) es para ponerlo en minusculas
        }
      }
    }
  




  //------------------------------------------------------------

  $em->persist($user); #guardar los datos en la base de datos
  $em->flush(); #ejecuta lo anterior

  header('Location: login.php'); #redireccion al inicio
} else {
  echo "El formulario no ha sido enviado correctamente...";
}
