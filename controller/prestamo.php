 <?php

require_once '../php/Connection.php';
$id = filter_input(INPUT_GET, 'id');
$id_co = filter_input(INPUT_GET, 'id_co');
if ($id === '') {
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.usuarios WHERE usuarios.carnet = '" . $id . "'");
    if (mysqli_num_rows($query) != o) {
        while ($row = mysqli_fetch_array($query)) {
            echo '<hr><h2 class="text-center">Préstamo</h2>';
            echo '<h2 class="text-center">Datos del usuario</h2>';
            echo '<div class="card container">';
            echo '<div class="card-block container">';
            echo '<input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="' . $row["num_usuario"] . '">';
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
            echo '<div class="text-center form-group bottom-right">';
            echo '<hr>';
            echo '<button id="btn-prestar" onclick="prestar(this.form)" type="button" class="btn btn-primary"><scan class="glyphicon glyphicon-save"></scan> Prestar</button>';
            echo '<button id="btn-devolver" onclick="devolver(this.form)" type="button" class="btn btn-info"><span class="glyphicon glyphicon-circle-arrow-left"></span> Devolver</button>';
            echo '<button id="btn-renovar" onclick="renovar(this.form)" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span> Renovar</button>';
            echo '<button id="btn-pagar" onclick="pagar(this.form)" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-credit-card"></span> Pagar Multa</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<div id="vacio" class="text-center">';
        echo '<img class="center-block" src="http://www.freeiconspng.com/uploads/warning-error-icon-png-33.png" width="350" height="350">';
        echo '<br>';
        echo '<h4>Usuario no encontrado</h4>';
        echo '</div>';
        echo '<script type="text/javascript">';
        echo '$(document).ready(function () {';
        echo '$("#prestamo").empty();';
        echo '$("#devolver").empty();';
        echo '$("#renovar").empty();';
        echo '$("#d_libro").empty();';
        echo '$("#c_prestamo").empty();';
        echo '});';
        echo '</script>';
    }
}

