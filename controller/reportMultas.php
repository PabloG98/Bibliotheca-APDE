<?php
require_once '../php/Connection.php';

$fechaicomu = filter_input(INPUT_GET, 'fechaicomu');

if($fechaicomu === '') {
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.multas WHERE fecha_deuda LIKE ' " . $fechaicomu ." '");
    echo '<hr><h2 class="text-center">CONTROL DE MULTAS ' . '<u>' . $fechaicomu . '</u>' . '</h2>';
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

