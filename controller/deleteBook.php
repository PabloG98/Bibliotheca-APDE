<?php
$codiba = filter_input(INPUT_GET, 'codiba');

if($codba === ''){
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "DELETE FROM librarydb.inventario WHERE inventario.num_inventario = '" . $codiba . "';");
}