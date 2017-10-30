<?php
require_once '../php/Connection.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario');
if ($id_usuario === '') {
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.multas WHERE prestamos.num_usuario = '" . $id_usuario . "';");
    if (mysqli_num_rows($query) != 0) {
        echo '<hr><h2 class="text-center"><b>Registro de multas para este usuario:</b></h2>';
        echo '<table>';
        echo '<tr>';
        echo '<th>ID usuario</th>';
        echo '<th>Código de barras</th>';
        echo '<th>Fecha de la deuda</th>';
        echo '<th>Total a pagar</th>';
        echo '</tr>';
        while ($row = mysqli_fetch_array($query)) {
            echo '<tr class="text-center">';
            echo '<td>' . $row["num_usuario"];
            echo '<td>' . $row["num_inventario"];
            echo '<td>' . $row["fecha_deuda"];
            echo '<td>' . $row["a_pagar"];
            echo '<td><button id="c_devolver" class="btn btn-info" type="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Devolver</button></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<h2 class="text-center"><b>No hay datos para mostrar</b></h2>';
    }
}