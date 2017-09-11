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
        <title>Reportes - APDE Bibliotheca</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
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
                    <h1 class="page-header text-center"><b>Reportes</b></h1>
                    <div class="container">
                        <select>
                            <option>Boletin</option>
                            <option>Control de multas</option>
                            <option>Estadísticas de catalogación por mes</option>
                            <option>Estadísticas de catalogación por mes_old_10-19-2016</option>
                            <option>Estadísticas por mes</option>
                            <option>Etiquetas</option>
                            <option>Etiquetas de tarjetas</option>
                            <option>Historial de modificación</option>
                            <option>Historial de un material</option>
                            <option>Historial de usuario</option>
                            <option>Lomos</option>
                            <option>Lomos SOLALTO</option>
                            <option>Lomos discontinuos</option>
                            <option>Lomos sencillos</option>
                            <option>Materiales consultados</option>
                            <option>Top 10 libros</option>
                        </select>
                    </div>
                    <hr>
                    <div class="panel panel-primary">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha inicial:</label>
                                    <div class="col-sm-2">
                                        <input id="id" type="text" class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha final:</label>
                                    <div class="col-sm-2">
                                        <input id="name" type="text" class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Fecha de reporte:</label>
                                    <div class="col-sm-2">
                                        <input disabled="" name="fecha" value="<?php echo date("Y-m-d"); ?>" type="date" class="form-control" placeholder="Fecha">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="btn-group">
                        <button id="btn-preview" type="button" class="btn btn-primary"><span class="glyphicon glyphicon-picture"></span> Preview</button>
                        <button id="btn-print" type="button" class="btn btn-info"><span class="glyphicon glyphicon-print"></span> Print</button>
                        <button id="btn-save" type="button" class="btn btn-success"><scan class="glyphicon glyphicon-save"></scan> Save</button>
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
            $("#btn-print").click(function () {
                alert("¿Desea imprimir este reporte?");
                }
            });
        });
    </script>
</body>
</html>
