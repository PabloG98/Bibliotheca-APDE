<!DOCTYPE html>
<html lang="en">
    <head><link rel="icon" href="img/ico-apde.ico" type="image/x-icon">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Catalogación - APDE Bibliotheca</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.3s;
                width: 100%;
            }

            .card:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }
            /* Full-width input fields */
            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 10%;
                border-radius: 50%;
            }
            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                margin: 5% auto 50% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 60%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {-webkit-transform: scale(0)} 
                to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
                from {transform: scale(0)} 
                to {transform: scale(1)}
            }
            .fa {
                font-size: 50px;
                cursor: pointer;
                user-select: none;
            }

            .fa:hover {
                color: darkblue;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #002C5B">
            <div class="container-fluid">
                <img class="img-circle" style="float: left;height:50px;margin :2px 1%" src="https://pbs.twimg.com/profile_images/769193451036352512/68WIEQyg.jpg"/>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bibliotheca</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a onclick="document.getElementById('id01').style.display = 'block'"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-sm-3 col-md-2 sidebar" style="background: #002C5B">
                        <ul class="nav nav-sidebar">
                            <li class="active"><a href="#" style="color:white"><span class="glyphicon glyphicon-search"></span> Catalogación</a></li>
                            <li><a href="views/circulacion.php" style="color:white"><span class="glyphicon glyphicon-globe"></span> Circulación</a></li>
                            <li><a href="views/reportes.php" style="color:white"><span class="glyphicon glyphicon-list-alt"></span> Reportes</a></li>
                            <!--<li><a href="#">Export</a></li>-->
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
                </div>
                <div class="container">
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
                        <h1 class="page-header text-center">Consulta al catálogo</h1>
                        <div class="form-horizontal text-center">
                            <div>
                                <button class="btn btn-default btn-primary" type="button" onclick="addNew(this.form)"><span class="glyphicon glyphicon-plus-sign"></span> Agregar Libro</button>
                            </div>
                            <div class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Código de barras:</label>
                                    <div class="col-sm-2">
                                        <input id="buscarCoba" type="text" class="form-control" placeholder="Código de barras" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Título:</label>
                                    <div class="col-sm-8">
                                        <input id="buscarTitulo" type="search" class="form-control" placeholder="Título" value="" autofocus="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Autor (es):</label>
                                    <div class="col-sm-8">
                                        <input id="buscarAutor" type="text" class="form-control" placeholder="Autor" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Biblioteca:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="biblioteca" id="biblioteca">
                                            <option value="">Todas</option>
                                            <option value="sol">Solalto</option>
                                            <option value="rob">El Roble</option>
                                            <option value="ent">Entrevalles</option>
                                            <option value="cam">Campoalegre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipo de Material:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="select" id="select">
                                            <option value="">Todos</option>
                                            <option value="libr">Libro</option>
                                            <option value="folle">Folleto</option>
                                            <option value="6">Cuadernillo</option>
                                            <option value="revis">Revista</option>
                                            <option value="dvd">DVD</option>
                                            <option value="cd">CD</option>
                                            <option value="disque">Disquete</option>
                                            <option value="caset">Casete</option>
                                            <option value="laminas">Láminas de arte</option>
                                            <option value="mat">Otros Materiales</option>
                                            <option value="radiogra">Radiogragadora</option>
                                            <option value="cassetera">Video Cassetera</option>
                                            <option value="historieta">Historieta</option>
                                            <option value="biblia">Biblia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Ordenar por:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="orden" id="orden">
                                            <option value="titulos.titulo_disp">Ordenar por Título</option>
                                            <option value="autores.nombre_autor_disp">Ordenar por Autor</option>
                                            <option value="inventario.clasificacion">Ordenar por clasificación</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="text-center form-group bottom-right">
                                    <button id="btn-buscar" class="btn btn-default btn-success" type="submit"><span class="glyphicon glyphicon-search"></span> Buscar</button>
                                    <button onclick="window.location.reload()" class="btn btn-default btn-warning" type="button"><span class="glyphicon glyphicon-search"></span> Nueva busqueda</button>
                                </div>
                                <div id="mbt"></div>
                            </div>
                        </div>
                        <div id="contenedor"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--modal-->
        <div id="id01" class="modal">
            <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                    <img src="https://pbs.twimg.com/profile_images/769193451036352512/68WIEQyg.jpg" alt="Avatar" class="avatar">
                </div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><b>Usuario:</b></label>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" name="user" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><b>Contraseña:</b></label>
                        <div class="col-sm-2">
                            <input class="form-control" type="password" name="pass" required>
                        </div>
                    </div>
                    <div class="text-center form-group bottom-right">
                        <button class="btn btn-success" type="button">Login</button>
                        <!--<input type="checkbox" checked="checked"> Remember me-->
                        <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize-css/dist/js/materialize.min.js"></script> 
        <script>
                            $(document).ready(function () {
                                var mb = "<div class='text-center form-group bottom-right'><hr><i onclick='myFunction(this)' class='fa fa-thumbs-up'></i><button onclick='verMas(this)' id='btn-mas' type='button' class='btn btn-info'><span class='glyphicon glyphicon-plus'></span> Ver más</button><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-refresh'></span> Modificar</button><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span> Eliminar</button><button id='favorite' type='button' class='btn btn-primary'><span class='glyphicon glyphicon-star'></span> Agregar a favoritos</butotn></div>";
                                if ($('#contenedor') === '') {
                                    document.getElementById('mbt').innerHTML = mb;
                                }
                            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});

                $.ajax({
                    url: 'controller/searchCoba.php',
                    data: 'criterio=' + '',
                    type: "GET",
                    dataType: "text",
                    error: function () {
                        console.log("Error en llamada ajax.");
                    },
                    success: function (sucess) {
                        $('#contenedor').html(sucess);
                    }
                });
                $('#btn-recargar').on('click', function () {
                    $('#buscarCoba').val('');
                    $('#buscarCoba').focus();
                });

                $('#btn-buscar').on('click', function () {
                    if ($('#buscarCoba').val().trim() === '') {
                        $.ajax({
                            url: 'controller/searchCoba.php',
                            data: 'criterio=' + '',
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    } else {
                        $.ajax({
                            url: 'controller/searchCoba.php',
                            data: 'criterio=' + $('#buscarCoba').val().trim(),
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    }
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});

                $.ajax({
                    url: 'controller/searchTitulo.php',
                    data: {buscarTitulo: '', buscarAutor: '', biblioteca: '', select: '', orden: ''},
                    type: "GET",
                    dataType: "text",
                    error: function () {
                        console.log("Error en llamada ajax.");
                    },
                    success: function (sucess) {
                        $('#contenedor').html(sucess);
                    }
                });
                $('#btn-buscar').on('click', function () {
                    if (($('#buscarTitulo').val().trim() === '') && ($('#buscarAutor').val().trim() === '') && ($('#biblioteca').val().trim() === '') && ($('#select').val().trim() === '') && ($('#orden').val().trim() === '')) {
                        $.ajax({
                            url: 'controller/searchTitulo.php',
                            data: {buscarTitulo: '', buscarAutor: '', biblioteca: '', select: '', orden: ''},
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    } else {
                        $.ajax({
                            url: 'controller/searchTitulo.php',
                            data: {buscarTitulo: $('#buscarTitulo').val().trim(), buscarAutor: $('#buscarAutor').val().trim(), biblioteca: $('#biblioteca').val().trim(), select: $('#select').val().trim(), orden: $('#orden').val().trim()},
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    }
                });
            });
        </script>
        <script type="text/javascript">
            function verMas(x) {
                $(document).ready(function () {
                    $.ajaxSetup({scriptCharset: "utf-8", contentType: "application/json; charset=utf-8"});
                    $.ajax({
                        url: 'controller/searchMore.php',
                        data: 'codba=' + '',
                        type: "GET",
                        dataType: "text",
                        error: function () {
                            console.log("Error en llamada ajax.");
                        },
                        success: function (sucess) {
                            $('#contenedor').html(sucess);
                        }
                    });
                    if ($('#codba').val().trim() === '') {
                        $.ajax({
                            url: 'controller/searchMore.php',
                            data: 'codba=' + '',
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    } else {
                        $.ajax({
                            url: 'controller/searchMore.php',
                            data: 'codba=' + $('#codba').val().trim(),
                            type: "GET",
                            dataType: "text",
                            error: function () {
                                console.log("Error en llamada ajax.");
                            },
                            success: function (sucess) {
                                $('#contenedor').html(sucess);
                            }
                        });
                    }
                });
            }
        </script>
        <script language="javascript">
            function addNew(form) {
                window.location.replace("views/addbiblioteca.php");
            }
        </script>
        <script language="javascript">
            function login(form) {
                window.location.replace("views/login.php");
            }
        </script>
        <script>
            function myFunction(x) {
                x.classList.toggle("fa-thumbs-down");
            }
        </script>
    </body>
</html>