<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html><link rel="icon" href="../img/ico-apde.ico" type="image/x-icon">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Agregar - APDE Bibliotheca</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
        <style>
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 500px;
                top: 0;
                width: 50%; /* Full width */
                height: 50%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
            }

            /* Modal Content */
            .modal-content {
                background-color: #0b2e5c;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 50%;
            }

            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #0c2c5a">
            <div class="container-fluid">
                <img class="responsive" style="float: left;height:50px;margin :2px 1%" src="https://pbs.twimg.com/profile_images/769193451036352512/68WIEQyg.jpg"/>
                <div class="text-center navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bibliotheca</a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar" style="background: #0b2e5c">
                    <ul class="nav nav-sidebar">
                        <li><a href="../index.php" style="color:white"><span class="glyphicon glyphicon-search"></span> Catalogación</a></li>
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-plus"></span> Agregar Libro</a></li>
                        <!--<li><a href="#">Analytics</a></li>
                        <li><a href="#">Export</a></li>-->
                    </ul>
                    <ul class="nav nav-sidebar">
                        <!--<li><a href="">Nav item</a></li>
                        <li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>
                        <li><a href="">More navigation</a></li>-->
                    </ul>
                    <ul class="nav nav-sidebar">
                        <!--<li><a href="">Nav item again</a></li>
                        <li><a href="">One more nav</a></li>
                        <li><a href="">Another nav item</a></li>-->
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="google_translate_element">
                    <h1 class="page-header text-center"><b>Agregar Libro</b></h1>
                    <div class="form-horizontal text-center">
                        <button class="btn btn-default btn-success" type="submit" value="" onclick="addNew(this.form)"><span class="glyphicon glyphicon-ok-sign"></span> Grabar</button>
                        <button id="btn-add" class="btn btn-default btn-danger" type="button" onclick="ignorar(this.form)"><span class="glyphicon glyphicon-minus-sign"></span> Ignorar</button>
                        <hr>
                    </div>
                    <div class="form-horizontal">
                        <h2 class="page-header"><b>Catalogación e inventario</b></h2>
                        <div class="form-group text-center">
                            <label class="col-sm-2 control-label">Fecha de catalogación:</label>
                            <div class="col-sm-2">
                                <input disabled="" id="fecha" name="fecha" value="<?php echo date("Y-m-d"); ?>" type="date" class="form-control" placeholder="Fecha">
                            </div>
                            <label class="col-sm-2 control-label">Buscable:</label>
                            <div class="col-sm-1">
                                <input id="buscable" name="buscable" type="text" class="form-control" placeholder="S=Sí - N=No">
                            </div>
                            <label class="col-sm-2 control-label">Responsable:</label>
                            <div class="col-sm-2">
                                <input id="catalogador" name="catalogador" type="text" class="form-control" placeholder="Responsable">                           
                            </div>
                        </div>
                    </div>
                    <hr><hr>
                    <div class="form-horizontal">
                        <h2><b>Registro MARC</b></h2>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Leader:</label>
                            <div class="input-group col-sm-3">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Leader">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr><hr>
                    <div class="form-horizontal">
                        <h2><b>Añadir etiqueta</b></h2>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Etiqueta: </label>
                            <div class="input-group col-sm-3">
                                <input id="eti" type="text" class="form-control">
                                <div class="input-group-btn">
                                    <button id="btn-eti" class="btn btn-info" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <hr><hr>
                    <div class="row placeholders text-center"> 
                        <div class="card">
                            <div id="caja" class="container input-group indput-group-sm col-lg-10">
                                <div id="020" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>ISBN 020</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Número Internacional Normalizado para Libros" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input id="isbn" name="isbn" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-isbn" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>                                        
                                </div>
                                <div id="041" class=" input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Idioma 041</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código de idioma del texto-pista de sonido o título separado" class="btn btn-warning" type="button">$a</button>
                                        </span>
                                        <input id="idioma" name="idioma" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código de idiomay/o traducciones intermedias del texto original" class="btn btn-basic" type="button">$h</button>
                                        </span>
                                        <input name="b" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código del idioma del sumario o resumen/título o subtítulo sobreimpreso" class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="c" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código de idioma cantado o hablado" class="btn btn-basic" type="button">$d</button>
                                        </span>
                                        <input name="h" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código del idioma de la tabla de contenido" class="btn btn-basic" type="button">$f</button>
                                        </span>
                                        <input name="n" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código del idioma acompañado de otro tipo de material que no sea libreto" class="btn btn-basic" type="button">$g</button>
                                        </span>
                                        <input name="p" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Código del idioma de subtítulos" class="btn btn-basic" type="button">$j</button>
                                        </span>
                                        <input name="p" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-idioma" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="082" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color: #80d4ff"><strong>Dewey 082</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Número de clasificación decimal de Dewey" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="dewey" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="cutter" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$2</button>
                                        </span>
                                        <input name="cutter" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-dewey" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="094" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color: #80d4ff"><strong>Tesis 094</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Número de clasificación de Tesis" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input tesis name="tesis" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="b_tesis" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$2</button>
                                        </span>
                                        <input name="2_tesis" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-tesis" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="099" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color: #80d4ff"><strong>Clasificación 099</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Número de clasificación de la Biblioteca" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="clasificacion" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="clasific_b" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$2</button>
                                        </span>
                                        <input name="clasific_2" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-clasific" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="100" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Autor 100</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Nombre" class="btn btn-default btn-warning" type="button">$a</button>
                                        </span>
                                        <input id="autor" name="autor" type="text" class="form-control" value=""> 
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Fechas" class="btn btn-default btn-success" type="button">$d</button>
                                        </span>
                                        <input name="fechas" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toggle="tooltip" title="Relación" class="btn btn-default btn-warning" type="button">$e</button>
                                        </span>
                                        <input name="relacion" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-autor" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="245" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Título 245</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Tí-tulo" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="titulo" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Resto del tí-tulo" class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="b" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Mención de responsabiblidad, etc." class="btn btn-basic" type="button">$c</button>
                                        </span>
                                        <input name="c" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Medio" class="btn btn-basic" type="button">$h</button>
                                        </span>
                                        <input name="h" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Número de parte/sección de la obra" class="btn btn-basic" type="button">$n</button>
                                        </span>
                                        <input name="n" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Número de parte/sección de la obra" class="btn btn-basic" type="button">$p</button>
                                        </span>
                                        <input name="p" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-titulo" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="250" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Edición 250</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Mención de edición" class="btn btn-default btn-warning" type="button">$a</button>
                                        </span>
                                        <input name="edicion" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Resto de la mención de edición" class="btn btn-default btn-warning" type="button">$b</button>
                                        </span>
                                        <input name="b" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-edicion" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="260" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Editorial 260</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Lugar de publicación" class="btn btn-default btn-warning" type="button">$a</button>
                                        </span>
                                        <input name="ciudad" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Editorial" class="btn btn-default btn-warning" type="button">$b</button>
                                        </span>
                                        <input name="editorial" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Fecha" class="btn btn-basic" type="button">$c</button>
                                        </span>
                                        <input name="c" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Lugar de manufactura" class="btn btn-basic" type="button">$e</button>
                                        </span>
                                        <input name="e" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Manufacturador" class="btn btn-basic" type="button">$f</button>
                                        </span>
                                        <input name="f" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Fecha de manufactura" class="btn btn-basic" type="button">$g</button>
                                        </span>
                                        <input name="g" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-editorial" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="300" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Descripción 300</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Descripción" class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="extensión" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Dimensiones" class="btn btn-basic" type="button">$c</button>
                                        </span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Tipo de la unidad" class="btn btn-basic" type="button">$f</button>
                                        </span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Tamaño de la unidad" class="btn btn-basic" type="button">$g</button>
                                        </span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button id="btn-desc" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="440" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Serie 440</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Tí-tulo" class="btn btn-default btn-warning" type="button">$a</button>
                                        </span>
                                        <input name="nombre_serie" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Volume nomber/sequential designation" class="btn btn-basic" type="button">$v</button>
                                        </span>
                                        <input name="v" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Nombre de parte/sección de la obra" class="btn btn-basic" type="button">$p</button>
                                        </span>
                                        <input name="p" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Nombre de parte/sección de la obra" class="btn btn-basic" type="button">$n</button>
                                        </span>
                                        <input name="n" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="ISSN" class="btn btn-basic" type="button">$x</button>
                                        </span>
                                        <input name="x" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-serie" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="500" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Nota general 500</strong></span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-ng" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="502" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Nota de tesis 502</strong></span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-nt" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="504" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Nota de bibliografía 504</strong></span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="nota_bi" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-nb" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="505" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Nota de contenido 505</strong></span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="notas" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Información variada" class="btn btn-basic" type="button">$g</button>
                                        </span>
                                        <input name="notas_g" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Mensión de responsabilidad" class="btn btn-basic" type="button">$r</button>
                                        </span>
                                        <input name="notas_r" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Tí-tulo" class="btn btn-basic" type="button">$t</button>
                                        </span>
                                        <input name="notas_t" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-nc" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="520" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Resumen 520</strong></span>
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$a</button>
                                        </span>
                                        <input name="resumen" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$b</button>
                                        </span>
                                        <input name="resumen_b" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$c</button>
                                        </span>
                                        <input name="resumen_c" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-basic" type="button">$u</button>
                                        </span>
                                        <input name="resumen_u" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button id="btn-resumen" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="650" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Temas 650</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Epígrafe general" class="btn btn-default btn-warning" type="button">$a</button>
                                        </span>
                                        <input name="temas" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-success" type="button">$2</button>
                                        </span>
                                        <input name="temas_2" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button id="btn-temas" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                                <div id="700" class="input-group input-group-sm col-lg-10">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#80d4ff"><strong>Personal 700</strong></span>
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Nombre del autor" class="btn btn-warning" type="button">$a</button>
                                        </span>
                                        <input name="personal" type="text" class="form-control" value="">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Fechas" class="btn btn-basic" type="button">$d</button>
                                        </span>
                                        <input name="personal_d" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Relación" class="btn btn-warning" type="button">$e</button>
                                        </span>
                                        <input name="personal_e" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button data-toogle="tooltip" title="Pseudonimo" class="btn btn-success" type="button">$j</button>
                                        </span>
                                        <input name="personal_j" type="text" class="form-control">
                                        <span class="input-group-btn">
                                            <button id="btn-pers" class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="card">
                            <h3><b>Datos de portada</b></h3>
                            <div class="container">
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon">URL Documento:</span>
                                    <input name="url" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon">Thumb URL:</span>
                                    <input name="thumb" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon">Cover URL:</span>
                                    <input name="cover" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="card">
                            <h3 class="card-header"><b>Copia</b></h3>
                            <div class="container">
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Cod. barras:</strong></span>
                                    <input name="num_inventario" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>No. Inv:</strong></span>
                                    <input name="inventory_num" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Copia:</strong></span>
                                    <input name="copia" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Ubicación:</strong></span>
                                    <input name="ubicacion" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Prefijo:</strong></span>
                                    <input name="prefijo" type="text" class="form-control">
                                    <span class="input-group-addon"><strong>Clasificación:</strong></span>
                                    <input name="clasificacion" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Biblioteca:</strong></span>
                                    <input name="biblioteca" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Vol. / No.:</strong></span>
                                    <input name="volno" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Circulación:</strong></span>
                                    <input name="tipo_circ" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Status:</strong></span>
                                    <input name="status" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Fecha entrada:</strong></span>
                                    <input name="fecha_entrada" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Procedencia:</strong></span>
                                    <input name="proce" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Tipo:</strong></span>
                                    <input name="type" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Factura:</strong></span>
                                    <input name="fact" type="text" class="form-control" value="">
                                    <span class="input-group-addon"><strong>Precio:</strong></span>
                                    <input name="precio" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Hiperlink:</strong></span>
                                    <input name="hyperlink" type="text" class="form-control" value="">
                                </div>
                                <div class="input-group input-group-sm col-lg-10">
                                    <span class="input-group-addon"><strong>Notas:</strong></span>
                                    <input name="notas" type="text" class="form-control" value="">
                                </div>
                            </div>
                        </div>

                        <!--
                        <hr>                        
                <form id="myForm" action="../controller/addBook.php" method="post">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nombre:</label>
                                <div class="input-group">
                                    <input name="nombre" type="text" class="form-control" placeholder="Nombre" value="">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#myModal" class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Número de biblioteca:</label>
                                <div class="col-sm-8">
                                    <input name="numero" type="text" class="form-control" placeholder="No." value="">
                                </div>
                            </div> 
                        </div>                        
                </form>-->
                    </div>
                </div>
                <div id="contenedor">

                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script language="javascript">
                            function ignorar(form) {
                                window.location.replace("../index.php");
                            }
    </script>
    <script>
        // wait for the DOM to be loaded 
        //$(document).ready(function () {
        // bind 'myForm' and provide a simple callback function 
        //  $('#myForm').ajaxForm(function () {
        //    alert("Biblioteca agregada con exito!");
        //});
        //});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#btn-isbn").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#020").remove();
            });
            $("#btn-idioma").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#041").remove();
            });
            $("#btn-dewey").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#082").remove();
            });
            $("#btn-tesis").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#094").remove();
            });
            $("#btn-clasific").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#099").remove();
            });
            $("#btn-autor").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#100").remove();
            });
            $("#btn-titulo").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#245").remove();
            });
            $("#btn-edicion").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#250").remove();
            });
            $("#btn-editorial").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#260").remove();
            });
            $("#btn-desc").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#300").remove();
            });
            $("#btn-serie").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#440").remove();
            });
            $("#btn-ng").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#500").remove();
            });
            $("#btn-nt").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#502").remove();
            });
            $("#btn-nb").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#504").remove();
            });
            $("#btn-nc").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#505").remove();
            });
            $("#btn-resumen").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#520").remove();
            });
            $("#btn-temas").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#650").remove();
            });
            $("#btn-pers").on('click', function () {
                alert("¿Seguro que desea eliminar esta etiqueta?");
                $("#700").remove();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#btn-eti").click(function () {
                switch($('#eti').val()){
                    case '020':
                        $("#020").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>ISBN 020</strong></span><span class='input-group-btn'><button data-toggle='tooltip' title='Número Internacional Normalizado para Libros' class='btn btn-basic' type='button'>$a</button></span><input name='isbn' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-isbn' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '041':
                        $("#041").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Idioma 041</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Código de idioma del texto-pista de sonido o título separado' class='btn btn-warning' type='button'>$a</button></span><input name='titulo_disp' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código de idiomay/o traducciones intermedias del texto original' class='btn btn-basic' type='button'>$h</button></span><input name='b' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código del idioma del sumario o resumen/título o subtítulo sobreimpreso' class='btn btn-basic' type='button'>$b</button></span><input name='c' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código de idioma cantado o hablado' class='btn btn-basic' type='button'>$d</button></span><input name='h' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código del idioma de la tabla de contenido' class='btn btn-basic' type='button'>$f</button></span><input name='n' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código del idioma acompañado de otro tipo de material que no sea libreto' class='btn btn-basic' type='button'>$g</button></span><input name='p' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Código del idioma de subtítulos' class='btn btn-basic' type='button'>$j</button></span><input name='p' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-idioma' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '082':
                        $("#082").append("<div class='input-group'><span class='input-group-addon' style='background-color: #80d4ff'><strong>Dewey 082</strong></span><span class='input-group-btn'><button data-toggle='tooltip' title='Número de clasificación decimal de Dewey' class='btn btn-basic' type='button'>$a</button></span><input name='clasificacion' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$b</button></span><input name='cutter' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$2</button></span><input name='cutter' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-dewey' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '094':
                        $("#094").append("<div class='input-group'><span class='input-group-addon' style='background-color: #80d4ff'><strong>Tesis 094</strong></span><span class='input-group-btn'><button data-toggle='tooltip' title='Número de clasificación de Tesis' class='btn btn-basic' type='button'>$a</button></span><input name='tesis' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$b</button></span><input name='b_tesis' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$2</button></span><input name='2_tesis' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-tesis' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '099':
                        $("#099").append("<div class='input-group'><span class='input-group-addon' style='background-color: #80d4ff'><strong>Clasificación 099</strong></span><span class='input-group-btn'><button data-toggle='tooltip' title='Número de clasificación de la Biblioteca' class='btn btn-basic' type='button'>$a</button></span><input name='clasific' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$b</button></span><input name='b' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$2</button></span><input name='2' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-clasific' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '100':
                        $("#100").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Autor 100</strong></span><span class='input-group-btn'><button data-toggle='tooltip' title='Nombre' class='btn btn-default btn-warning' type='button'>$a</button></span><input name='nombre_autor_disp' type='text' class='form-control' value=''> <span class='input-group-btn'><button data-toggle='tooltip' title='Fechas' class='btn btn-default btn-success' type='button'>$d</button></span><input name='nombre_autor_disp' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toggle='tooltip' title='Relación' class='btn btn-default btn-warning' type='button'>$e</button></span><input name='nombre_autor_disp' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-autor' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button> </span></div>");
                        break;
                    case '245':
                        $("#245").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Título 245</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Tí-tulo' class='btn btn-basic' type='button'>$a</button></span><input name='titulo_disp' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Resto del tí-tulo' class='btn btn-basic' type='button'>$b</button></span><input name='b' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Mención de responsabiblidad, etc.' class='btn btn-basic' type='button'>$c</button></span><input name='c' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Medio' class='btn btn-basic' type='button'>$h</button></span><input name='h' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Número de parte/sección de la obra' class='btn btn-basic' type='button'>$n</button></span><input name='n' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Número de parte/sección de la obra' class='btn btn-basic' type='button'>$p</button></span><input name='p' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-titulo' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '250':
                        $("#250").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Edición 250</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Mención de edición' class='btn btn-default btn-warning' type='button'>$a</button></span><input name='edicion' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Resto de la mención de edición' class='btn btn-default btn-warning' type='button'>$b</button></span><input name='b' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-edicion' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '260':
                        $("#260").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Editorial 260</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Lugar de publicación' class='btn btn-default btn-warning' type='button'>$a</button></span><input name='ciudad' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Editorial' class='btn btn-default btn-warning' type='button'>$b</button></span><input name='editorial' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Fecha' class='btn btn-basic' type='button'>$c</button></span><input name='c' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Lugar de manufactura' class='btn btn-basic' type='button'>$e</button></span><input name='e' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Manufacturador' class='btn btn-basic' type='button'>$f</button></span><input name='f' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Fecha de manufactura' class='btn btn-basic' type='button'>$g</button></span><input name='g' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-editorial' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button> </span></div>");
                        break;
                    case '300':
                        $("#300").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Descripción 300</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Descripción' class='btn btn-basic' type='button'>$a</button></span><input name='extensión' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Dimensiones' class='btn btn-basic' type='button'>$c</button></span><input type='text' class='form-control'><span class='input-group-btn'><button data-toogle='tooltip' title='Tipo de la unidad' class='btn btn-basic' type='button'>$f</button></span><input type='text' class='form-control'><span class='input-group-btn'><button data-toogle='tooltip' title='Tamaño de la unidad' class='btn btn-basic' type='button'>$g</button></span><input type='text' class='form-control'><span class='input-group-btn'><button id='btn-desc' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '440':
                        $("#440").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Serie 440</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Tí-tulo' class='btn btn-default btn-warning' type='button'>$a</button></span><input name='nombre_serie' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Volume nomber/sequential designation' class='btn btn-basic' type='button'>$v</button></span><input name='v' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Nombre de parte/sección de la obra' class='btn btn-basic' type='button'>$p</button></span><input name='p' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Nombre de parte/sección de la obra' class='btn btn-basic' type='button'>$n</button></span><input name='n' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='ISSN' class='btn btn-basic' type='button'>$x</button></span><input name='x' type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-serie' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '500':
                        $("#500").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Nota general 500</strong></span><span class='input-group-btn'><button class='btn btn-basic' type='button'>$a</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-ng' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '502':
                        $("#502").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Nota de tesis 502</strong></span><span class='input-group-btn'><button class='btn btn-basic' type='button'>$a</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-nt' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '504':
                        $("#504").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Nota de bibliografía 504</strong></span><span class='input-group-btn'><button class='btn btn-basic' type='button'>$a</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-nb' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button> </span></div>");
                        break;
                    case '505':
                        $("#505").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Nota de contenido 505</strong></span><span class='input-group-btn'><button class='btn btn-basic' type='button'>$a</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Información variada' class='btn btn-basic' type='button'>$g</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Mensión de responsabilidad' class='btn btn-basic' type='button'>$r</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Tí-tulo' class='btn btn-basic' type='button'>$t</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-nc' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '520':
                        $("#520").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Resumen 520</strong></span><span class='input-group-btn'><button class='btn btn-basic' type='button'>$a</button></span><input name='extensión' type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-basic' type='button'>$b</button></span><input type='text' class='form-control'><span class='input-group-btn'><button class='btn btn-basic' type='button'>$c</button></span><input type='text' class='form-control'><span class='input-group-btn'><button class='btn btn-basic' type='button'>$u</button></span><input type='text' class='form-control'><span class='input-group-btn'><button id='btn-resumen' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '650':
                        $("#650").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Temas 650</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Epígrafe general' class='btn btn-default btn-warning' type='button'>$a</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button class='btn btn-default btn-success' type='button'>$2</button></span><input type='text' class='form-control' value=''><span class='input-group-btn'><button id='btn-temas' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    case '700':
                        $("#700").append("<div class='input-group'><span class='input-group-addon' style='background-color:#80d4ff'><strong>Personal 700</strong></span><span class='input-group-btn'><button data-toogle='tooltip' title='Nombre del autor' class='btn btn-warning' type='button'>$a</button></span><input name='extensión' type='text' class='form-control' value=''><span class='input-group-btn'><button data-toogle='tooltip' title='Fechas' class='btn btn-basic' type='button'>$d</button></span><input type='text' class='form-control'><span class='input-group-btn'><button data-toogle='tooltip' title='Relación' class='btn btn-warning' type='button'>$e</button></span><input type='text' class='form-control'><span class='input-group-btn'><button data-toogle='tooltip' title='Pseudonimo' class='btn btn-success' type='button'>$j</button></span><input type='text' class='form-control'><span class='input-group-btn'><button id='btn-pers' class='btn btn-danger' type='button'><i class='glyphicon glyphicon-trash'></i></button></span></div>");
                        break;
                    default:
                        if($('#eti').val().trim() === '') {
                            alert("ERROR: El campo está vacío, introduzca una etiqueta.")   
                        } else {
                            alert("ERROR: Etiqueta inválida, ingrese una correcta.")
                        }
                    }
            });
        });
    </script>
    <script type="text/javascript">
        function addBook() {
            var fecha = $('#fecha').val();
            var buscable = $('#buscable').val();
            var catalogador = $('#catalogador').val();
            $.ajax({
                url: '../controller/addBook.php',
                type: 'POST',
                dataType: 'JSON',
                data: {fecha: fecha, buscable: buscable, catalogador: catalogador},
                success: function (data) {
                    $('#nombre_biblioteca, #num_biblioteca').val('');
                    $('#newModal').modal('hide');
                    if (data == 0) {
                        alertify.error('Error! Duplicate Entry');
                    } else {
                        $('#list-table tbody').prepend('<tr><td class="_id hidden">' + data['_id']['$id'] + '</td><td class="nombre_biblioteca">' + data['nombre_biblioteca'] + '</td><td class="num_biblioteca">' + data['num_biblioteca'] + '</td><td class="text-center"><button type="button" class="edit btn btn-link btn-xs btn-block pull-right"><span class="text-primary"><i class="fa fa-pencil"></i> Edit</span></button></td><td class="text-center"><button type="button" class="delete btn btn-link btn-xs btn-block pull-right"><span class="text-danger"><i class="fa fa-trash"></i> Delete</span></button></td></tr>');
                        alertify.success('Saved Successfully');
                        $('#list-table tbody tr').first().addClass('alert alert-success');
                        removeActive($('#list-table tbody tr').first());
                    }
                }
            });
        }

    </script>
</body>
</html>
