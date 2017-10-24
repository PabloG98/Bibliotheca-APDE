<?php

require_once '../php/Connection.php';
$fechaiecpm = filter_input(INPUT_GET, 'fechaiecpm');
$fechafecpm = filter_input(INPUT_GET, 'fechafecpm');

if ($fechaiecpm === '' && $fechafecpm === '') {
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.inventario "
            . "INNER JOIN titulos
                    ON inventario.num_titulo = titulos.num_titulo"
            . "WHERE inventario.fecha_entrada BETWEEN '" . $fechaiecpm . "' AND '" . $fechafecpm . "'");
    $row_cnt = $query->num_rows;
    echo '<div class="text-center">';
    echo '<b>' . $row_cnt . ' elementos encotrados.</b><hr>';
    echo '</div>';
    echo '<div id="div_exportar" class="container">';
    echo '<h2 class="text-center">ESTADÍSTICAS DE CATALOGACIÓN POR MES DEL ' . '<u>' . $fechaiecpm . '</u>' . ' AL ' . '<u>' . $fechafecpm . '</u>' . '</h2>';
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
    $query2 = mysqli_query(Connection::getInstance()->conectar(), "SELECT catalogador FROM catalogadores
                        WHERE num_catalogador = " . $row["num_catalogador"] . ";");
    echo '<tr>';
    echo '<th>Editorial';
    while ($row2 = mysqli_fetch_array($query2)) {
        echo '<th> '. $row2["catalogador"];
    }
    echo '</tr>';
    echo '</table>';
    echo '</div>';
    if (mysqli_num_rows($query) != o) {
        while ($row = mysqli_fetch_array($query)) {
            echo '<div id="div_print" class="text-center">';
            echo '<div>';
            echo '<table>';
            echo '<tr>';
            echo '<tr>';
            echo '<td>' . $row["num_inventario"];
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