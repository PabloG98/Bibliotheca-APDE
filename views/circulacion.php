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
        <title>Circulación - APDE Bibliotheca</title>
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
            .panel-primary > .panel-heading{
                background-color: #0c2c5a;
                border-color: #0c2c5a;
            }
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 100%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
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
                <img class="responsive" style="float: left;height:55px;width:65px;margin:2px 1%" src="https://pbs.twimg.com/profile_images/769193451036352512/68WIEQyg.jpg"/>
                <div class="text-center navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <p style="color:white" class="navbar-brand">Bibliotheca</p>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar" style="background: #0b2e5c">
                    <ul class="nav nav-sidebar">
                        <li><a href="../index.php" style="color:white"><span class="glyphicon glyphicon-search"></span> Catalogación</a></li>
                        <li class="active"><a href="" style="color:white"><span class="glyphicon glyphicon-globe"></span> Circulación</a></li>
                        <li><a href="reportes.php" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
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
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header text-center"><b>Estación de circulación</b></h1>
                    <div class="container">
                        <div class="form-group">
                            <div class='panel panel-primary'>
                                <div class='panel-heading'></div>
                                <div class='panel-body'>
                                    <div class='form-group'>
                                        <label> Solicitud de datos</label>
                                    </div>
                                    <div class='form-horizontal'>
                                        <div class='form-group'>
                                            <label class='col-sm-2 control-label'>Identificación:</label>
                                            <div class='col-sm-2'>
                                                <input id='id' type='text' class='form-control' value=''>
                                            </div>
                                            <div class='btn-group'>
                                                <button id='btn-buscar' type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span> Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="datos_u"></div>
                    <div class="container" id="prestamo"></div>
                    <div class="container" id="devolver"></div>
                    <div class="container" id="d_libro"></div>
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
    <script type="text/javascript">
        function show(bloq) {
            obj = document.getElementById(bloq);
            obj.style.display = (obj.style.display == 'none') ? 'block' : 'none';
        }
    </script>
    <script type="text/javascript">
        function prestar(form) {
            $(document).ready(function () {
                var empty_dos = $('#datos_u').is(':empty');
                var vacio = $('#vacio').is(':empty');
                var prestamo = "<h2 class='text-center'>Datos del libro</h2><div class='container'><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-group'><label>Datos del libro</label></div><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Co. Barras:</label><div class='col-sm-2'><input id='criterio' type='text' class='form-control' value=''></div><div class='btn-group'><button onclick='buscarco(this.form)' type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span> Buscar</button></div></div></div></div></div><div id='d_libro' class='container'></div></div>";
                if (empty_dos) {
                    alert("No hay datos, por favor rellenar los campos");
                } else if (vacio) {
                    alert("Los datos son incorrectos, ingrese un ID válido.");
                } else {
                    alert("Prestamo en proceso...");
                    document.getElementById('prestamo').innerHTML = prestamo;
                }
            });
        }
    </script>
    <script type="text/javascript">
        function devolver(form) {
            $(document).ready(function () {
                var datos_u = $('#datos_u').is(':empty');
                var devolver = "<h2 class='text-center'>Datos del prestamo</h2><div class='container'><div class='panel panel-primary'><div class='panel-heading'></div><div class='panel-body'><div class='form-horizontal'><div class='form-group'><label class='col-sm-2 control-label'>Código de préstamo</label><div class='col-sm-2'><input id='prestamo' type='text' class='form-control' value=''></div><div class='btn-group'><button onclick='buscarco(this.form)' type='button' class='btn btn-success'><span class='glyphicon glyphicon-search'></span> Buscar</button></div></div></div></div></div><div id='d_libro' class='container'></div></div>";
                if (datos_u) {
                    alert("No hay prestamo creado para devolver");
                } else {
                    document.getElementById('devolver').innerHTML = devolver;
                }
            });
        }
    </script>
    <script type="text/javascript">
        function renovar(form) {
            $(document).ready(function () {
                var empty_uno = $('#prestamo').is(':empty');
                var empty_dos = $('#datos_u').is(':empty');
                if (empty_dos || empty_uno) {
                    alert("No hay datos, por favor rellenar los campos");
                } else {
                    alert("Renovación en proceso...");
                    document.getElementById('').innerHTML = prestamo;
                }
            });
        }
    </script>
    <script type="text/javascript">
        function pagar(form) {
            $(document).ready(function () {
                var empty_uno = $('#prestamo').is(':empty');
                var empty_dos = $('#datos_u').is(':empty');
                if (empty_dos || empty_uno) {
                    alert("No hay datos, por favor rellenar los campos");
                } else {
                    alert("Pago en proceso...");
                    document.getElementById('').innerHTML = prestamo;
                }
            });
        }
    </script>
    <script type="text/javascript">
        $('#btn-buscar').on('click', function () {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                $.ajax({
                    url: '../controller/prestamo.php',
                    data: 'id=' + '',
                    type: "GET",
                    dataType: "text",
                    error: function () {
                        console.log("Error en llamada ajax.");
                    },
                    success: function (sucess) {
                        $('#datos_u').html(sucess);
                    }
                });
                if ($('#id').val().trim() === '') {
                    alert("No hay datos a buscar");
                } else {
                    $.ajax({
                        url: '../controller/prestamo.php',
                        data: 'id=' + $('#id').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#datos_u').html(sucess);
                        }
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        function buscarco(form) {
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                if ($('#criterio').val().trim() === '') {
                    $.ajax({
                        url: '../controller/searchCoba.php',
                        data: 'criterio=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#d_libro').html(sucess);
                        }
                    });
                } else {
                    $.ajax({
                        url: '../controller/searchCoba.php',
                        data: 'criterio=' + $('#criterio').val().trim(),
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#d_libro').html(sucess);
                        }
                    });
                }
            });
        }
    </script>
</body>
</html>
