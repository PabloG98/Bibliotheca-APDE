<?php
require_once '../php/Connection.php';
$criterio = filter_input(INPUT_GET, 'criterio');
if ($criterio === '') {
    
} else {
    $query = mysqli_query(Connection::getInstance()->conectar(), "SELECT *, inventario.clasificacion AS 'inventario.clasificacion' FROM librarydb.inventario
                    INNER JOIN titulos
                    ON inventario.num_titulo = titulos.num_titulo
                    WHERE num_inventario = '" . $criterio . "';");
    echo '<h2 class="text-center">Resultado de la Búsqueda</h2>';
    echo '<hr>';
    $row_cnt = $query->num_rows;
    echo '<div class="text-center">';
    echo '<b>'.$row_cnt .' elementos encotrados.</b><hr>';
    echo '</div>';
    $numero = 1;
    if (mysqli_num_rows($query) != o) {
        while ($row = mysqli_fetch_array($query)) {
            echo '<div class="card container">';
            echo '<h1>' . $numero . '.' . '</h1>';
            $numero ++;
            echo '<div class="card-block container"';
            $query1 = mysqli_query(Connection::getInstance()->conectar(), "SELECT nombre_autor_disp FROM autores WHERE
                        num_autor IN (SELECT num_autor FROM librarydb.autor_titulo WHERE num_titulo = " . $row["num_titulo"] . ");");
            echo '<b><label>Titulo: </label></b>';
            echo ' ' . '<a id="inventario">' . $row["titulo_disp"] . '</a>' . '<br>';
            while ($row1 = mysqli_fetch_array($query1)) {
                echo '<b><label>Autor: </label></b>';
                echo ' ' . $row1["nombre_autor_disp"] . '<br>';
            }
            $query2 = mysqli_query(Connection::getInstance()->conectar(), "SELECT ciudad FROM ciudades
                        WHERE num_lugar = " . $row["num_lugar"] . ";");
            echo '<b><label>Editorial: </label></b>';
            while ($row2 = mysqli_fetch_array($query2)) {
                echo ' ' . $row2["ciudad"];
                echo ',';
            }
            $query3 = mysqli_query(Connection::getInstance()->conectar(), "SELECT nombre_editorial FROM editoriales
                        WHERE num_editorial = " . $row["num_editorial"] . ";");
            while ($row3 = mysqli_fetch_array($query3)) {
                echo ' ' . $row3["nombre_editorial"];
                echo ',';
            }
            echo ' ' . $row["fecha_copyright"] . '<br>';
            echo '<b><label>Descripción: </label></b>';
            echo $row["extension"] . '<br>';
            
            $query4 = mysqli_query(Connection::getInstance()->conectar(), "SELECT nombre_serie FROM librarydb.series
                        WHERE num_serie = " . $row["num_serie"] . ";");
            while ($row4 = mysqli_fetch_array($query4)) {
            }
            
            echo '<b><label>Temas: </label></b>';
            $query5 = mysqli_query(Connection::getInstance()->conectar(), "SELECT * FROM librarydb.encabezamientos WHERE num_encabezamiento IN (
                        SELECT num_encabezamiento FROM librarydb.titulo_encab WHERE num_titulo = " . $row["num_titulo"] . ");");
            while ($row5 = mysqli_fetch_array($query5)) {
                echo ' ' . $row5["descripcion_encab"] . ', ';
            }
            
            $query6 = mysqli_query(Connection::getInstance()->conectar(), "SELECT nombre_ubicacion FROM librarydb.ubicaciones
                        WHERE num_ubicacion = " . $row["num_ubicacion"] . ";");
            while ($row6 = mysqli_fetch_array($query6)) {
            }
            
            echo '<br>';
            echo '<b><label>Clasificación: </label></b>';
            echo ' ' . $row["clasificacion"];
            echo ' ' . $row["cutter"];
            
            $query7 = mysqli_query(Connection::getInstance()->conectar(), "SELECT nombre_biblioteca FROM librarydb.bibliotecas WHERE num_biblioteca = " . $row["num_biblioteca"] . ";");
            echo '<br>';
            echo '<label>Biblioteca: </label>';
            while ($row7 = mysqli_fetch_array($query7)) {
                echo ' ' . $row7["nombre_biblioteca"] . '<br>';
            }
            
            $query8 = mysqli_query(Connection::getInstance()->conectar(), "SELECT tipo_circ FROM librarydb.tipos_circulacion
                            WHERE num_tipo_circ = " . $row["num_tipo_circ"] . ";");
            echo '<b><label>Estado: </label></b>';
            while ($row8 = mysqli_fetch_array($query8)) {
                echo ' ' . $row["status"];
            }
            echo '</div>';
            echo '<div class="text-center form-group bottom-right">';
            echo '<hr>';
            echo '<button id="codba" type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Ver más</button>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<div class="text-center">';
        echo '<img class="center-block" src="http://www.freeiconspng.com/uploads/warning-error-icon-png-33.png" width="350" height="350">';
        echo '<br>';
        echo '<b><label>Título:</label></b>';
        echo ' '. $buscarTitulo . '<br>';
        echo '<b><label>Autor:</label></b>';
        echo ' '. $buscarAutor . '<br>';
        echo '<b><label>Tipo de Material:</label></b>';
        echo ' ' . $select . '<br>';
        echo '<b><label>Ordenado por:</label></b>';
        echo ' ' . $orden;
        echo '<h2 class="text-center">No encontrado</h2>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
