<?php

use Doctrine\Common\Collections\ArrayCollection;

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();   

if (isset($_POST['edit-usuario'])) {

  $user = isset($_GET['id']) ? $em->getReference('Models\User', $_GET['id']) : null;

  if (isset($user)) {

    $user->setNombre($_POST['nombre']);
    $user->setApellido($_POST['apellido']);
    $user->setTipoDocumento($_POST['tipodocumento']);
    $user->setNumeroDocumento($_POST['numerodocumento']);
    $user->setEmail($_POST['email']);
    $user->setNacimiento($_POST['nacimiento']);
    $user->setTelefono($_POST['telefono']);


    $user->setNombreUsuario(strtolower(substr(($_POST['nombre']),0,1)).strtolower($_POST['apellido']));  
    //El substr ,0,1 lo que hace es agarrar solo la primer letra 
    //(strtolower($_POST['apellido'])) es para ponerlo en minusculas
    
    $em->flush(); #ejecuta lo anterior
    header('Location: ../?id=' . $_GET['id']);
    
  }
}
