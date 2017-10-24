<?php

require_once '../php/Connection.php';

$fechaicomu = filter_input(INPUT_GET, 'fechaicomu');
$fechafcomu = filter_input(INPUT_GET, 'fechafcomu');

if ($fechaicomu === '' && $fechafcomu === '') {
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.multas WHERE fecha_deuda BETWEEN '" . $fechaicomu . "' AND '". $fechafcomu ."'");
    $row_cnt = $query->num_rows;
    echo '<div class="text-center">';
    echo '<b>' . $row_cnt . ' elementos encotrados.</b><hr>';
    echo '</div>';
    if (mysqli_num_rows($query) != o) {
        echo '<div id="div_exportar" class="container">';
        echo '<h2 class="text-center">CONTROL DE MULTAS DEL ' . '<u>' . $fechaicomu . '</u>' . ' AL <u>' . $fechafcomu . '</u>' . '</h2>';
        echo '<table>';
        echo '<tr>';
        echo '<th>Fecha y Hora';
        echo '<th>ID';
        echo '<th>Multa';
        echo '</tr>';
        while ($row = mysqli_fetch_array($query)) {
            echo '<tr>';
            echo '<th>' . $row["fecha_deuda"];
            echo '<th>' . $row["num_usuario"];
            echo '<th>'. $row["a_pagar"];
            echo '</tr>';
        }
        echo '<tr>';
        echo '<th>';
        echo '<th><b>Total</b>';
        echo '<th>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';
    } else {
        echo '<div class="text-center">';
        echo '<img class="center-block" src="http://www.freeiconspng.com/uploads/warning-error-icon-png-33.png" width="350" height="350">';
        echo '<br>';
        echo '<h4>Rango de fecha no encontrado</h4>';
        echo '</div>';
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

