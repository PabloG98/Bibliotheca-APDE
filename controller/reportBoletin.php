<?php
require_once '../php/Connection.php';
$fechaibo = filter_input(INPUT_GET, 'fechaibo');
$fechafbo = filter_input(INPUT_GET, 'fechafbo');

if($fechai === '' && $fechaf === ''){
    
}
else {
$query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.inventario WHERE inventario.fecha_entrada BETWEEN '" . $fechaibo . "' AND '" . $fechafbo . "'");
echo '<div id="div_exportar" class="container">';
echo '<h2 class="text-center">BOLETÍN BIBLIOGRÁFICO DEL ' . '<u>' . $fechaibo . '</u>' . ' AL ' . '<u>' . $fechafbo . '</u>' . '</h2>';
echo '</div>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

