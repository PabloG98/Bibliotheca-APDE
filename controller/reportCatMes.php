<?php
require_once '../php/Connection.php';
$fechai = filter_input(INPUT_GET, 'fechai');
$fechaf = filter_input(INPUT_GET, 'fechaf');

if ($fechai === '' && $fechaf === '') { 
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.inventario WHERE inventario.fecha_entrada BETWEEN '" . $fechai . "' AND '" . $fechaf . "'");
    if (mysqli_num_rows($query) != o) {
        while ($row = mysqli_fetch_array($query)) {
            echo '<div id="div_print" class="text-center">';
            echo '<h2>ESTADÍSTICAS DE CATALOGACIÓN POR MES DEL ' . $fechai . ' AL ' . $fechaf . '</h2>';
            echo '<div>';
            echo '<table>';
            echo '<tr>';
            echo '<th>Categoría';
            echo '<th>Enero';
            echo '<th>Febrero';
            echo '<th>Marzo';
            echo '<th>Abril';
            echo '<th>Mayo';
            echo '<th>Junio';
            echo '<th>Julio';
            echo '<th>Agosto';
            echo '<th>Septiembre';
            echo '<th>Octubre';
            echo '<th>Noviembre';
            echo '<th>Diciembre';
            echo '<th>TOTAL';
            echo '</tr>';
            echo '<tr>';
            echo '<td>' . $row;
            echo '</tr>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<div class="text-center">';
        echo '<img class="center-block" src="http://www.freeiconspng.com/uploads/warning-error-icon-png-33.png" width="350" height="350">';
        echo '<br>';
        echo '<h4>Rango de fecha no encontrado</h4>';
        echo '</div>';
    }
}