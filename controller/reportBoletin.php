<?php
require_once '../php/Connection.php';
$fechaibo = filter_input(INPUT_GET, 'fechaibo');
$fechafbo = filter_input(INPUT_GET, 'fechafbo');

if($fechai === '' && $fechaf === ''){
    
}
else {
$query = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.inventario WHERE inventario.fecha_entrada BETWEEN '" . $fechaibo . "' AND '" . $fechafbo . "'");
echo '<div class="container">';
echo '<div class="text-center btn-group">';
echo '<button id="b_print" name="b_print" type="button" class="btn btn-info ipt"><scan class="glyphicon glyphicon-print"></scan> Print</button>';
echo '<button onclick="exportar(this.form)" type="button" class="btn btn-success"><scan class="glyphicon glyphicon-save"></scan> Save as PDF</button>';
echo '</div>';
echo '<hr>';
echo '</div>';
echo '<div id="div_exportar" class="container">';
echo '<h2 class="text-center">BOLETÍN BIBLIOGRÁFICO DEL ' . '<u>' . $fechaibo . '</u>' . ' AL ' . '<u>' . $fechafbo . '</u>' . '</h2>';
echo '</div>';
}