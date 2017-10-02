<?php
require_once '../php/Connection.php';
$id = filter_input(INPUT_GET, 'id');
 if($id === ''){
 } else {
     $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.usuarios WHERE usuarios.carnet = '" . $id . "'");
     echo '<hr><h2 class="text-center">Datos del alumno</h2>';
     if (mysqli_num_rows($query) != o) {
        while ($row = mysqli_fetch_array($query)) {
            echo '<div class="card container">';
            echo '<div class="card-block container"';
            echo '<b><label>Carné: </label></b>';
            echo ' ' . $row["carnet"] . '<br>';
            echo '<b><label>Nombre: </label></b>';
            echo ' ' . $row["nombre_usuario"] . '<br>';
            echo '<b><label>Correo: </label></b>';
            echo ' ' . $row["email"] . '<br>';
            echo '<b><label>Colegio: </label></b>';
            echo ' ' . $row["num_institucion"] . '<br>';
            echo '<b><label>Teléfono: </label></b>';
            echo ' ' . $row["telefono"] . '<br>';
            echo '<b><label>Dirección: </label></b>';
            echo ' ' . $row["direccion1"] . '<br>';
            echo '</div>';
            echo '</div>';
        }
     } else {
         
     }
}

