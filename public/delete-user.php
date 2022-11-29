<?php

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();

if (isset($_GET['id'])) {
  $users = $em->find('Models\User', $_GET['id']);

  $em->remove($users);

  $em->flush();
  header('Location: ../');
} else {
  echo "No hay ningun id...";
}
