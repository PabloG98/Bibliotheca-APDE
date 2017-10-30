<?php
require_once '../php/Connection.php';
$id_usuario = filter_input(INPUT_GET, 'id_usuario');
if ($id_usuario === '') {
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.prestamos WHERE prestamos.id_usuario = '" . $id_usuario . "';");
    if (mysqli_num_rows($query) != o) {
        echo '<hr><h2 class="text-center"><b>Prestamos realizados por este usuario:</b></h2>';
        echo '<table>';
        echo '<tr>';
        echo '<th>No. Prestamo</th>';
        echo '<th>ID Ususario</th>';
        echo '<th>Código de barras</th>';
        echo '<th>Fecha del préstamo</th>';
        echo '<th>Fecha de devolución</th>';
        echo '<th>Catalogador</th>';
        echo '</tr>';
        while ($row = mysqli_fetch_array($query)) {
            echo '<tr class="text-center">';
            echo '<td>' . $row["id_prestamo"];
            echo '<td>' . $row["id_usuario"];
            echo '<td>' . $row["codba"];
            echo '<td>' . $row["fecha_prestamo"];
            echo '<td>' . $row["fecha_devolucion"];
            echo '<td>' . $row["id_catalogador"];
            echo '<td><button id="c_devolver" class="btn btn-info" type="button"><span class="glyphicon glyphicon-circle-arrow-left"></span> Devolver</button></td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<h2 class="text-center"><b>ERROR</b></h2>';
    }
}
