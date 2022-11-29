<?php

$users = $em->getRepository('Models\User')->findBy([], ['id' => 'DESC']);

  //users es la variable que voy a usar
  foreach ($users as $usuarios) {
    echo "
      <div class='user-box'>
        <div class='user-left'>
          <div class='icon -created'> 
            <i class='bx bxs-user'></i>
          </div>

          <div class='user-data'>
            <h3 class='title'>{$usuarios->getNombre()} {$usuarios->getApellido()}</h3>

            <div class='user-tags'>
              <span class='tag'>
                <i class='bx bxs-envelope'></i> {$usuarios->getEmail()} 
              </span>
              
              <span class='tag'>
                <i class='bx bxs-phone-call'></i> {$usuarios->getTelefono()} 
              </span>
            </div>
          </div>
        </div>

        <div class='user-right'>
          <span class='icon'>
            <i class='bx bx-dots-vertical-rounded'></i>
          </span>

          <div class='user-menu' data-user='{$usuarios->getId()}'>
            <a class='button' href='?id={$usuarios->getId()}' data-target='#list-user'>
              <i class='bx bx-show'></i> Ver
            </a>

            <a class='button' href='?id={$usuarios->getId()}' data-target='#edit-user'>
              <i class='bx bx-pencil'></i> Editar
            </a>

            <a class='button' href='./public/delete-user.php?id={$usuarios->getId()}' data-target='#home-user'>
              <i class='bx bx-x-circle'></i> Eliminar
            </a>
          </div>
        </div>
      </div>
    ";
  }
