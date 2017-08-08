<?php

/* #####################################################################
   #
   #   Project       : Index del sistema de administración Empren-T
   #   Author        : Ricardo Cruz Ambrosio
   #   Version       : 1.0
   #   Created       : 02/03/2017
   #   Last Change   : 06/08/2017
   #
   ##################################################################### */




    session_start();
    if(!isset($_SESSION["user_login"]) || $_SESSION["user_login"]==null){
        print "<script>alert(\"Acceso invalido, Por favor inicie sesion!!\");window.location='../index.php';</script>";
    }
            include "conn.php";
            $usuario=$_SESSION["user_login"];
            $consulta = "select * from admins where (admin_login='$usuario')";
                        $query = $con->query($consulta);
                        while ($res=$query->fetch_array()) {

                                $nombre=$res["admin_name"];
                                    break;
                                }
            //Consulta a la tabla ideas
            $consul = "select * from ideas";
                        if(!$resultados = $querys = $con->query($consul)){
                            exit();
                        }

                // Sí la consulta contiene datos, imprime lo siguiente
                        if(mysqli_num_rows($resultados) > 0){
                            $contador = 0;
                            while($row = $querys->fetch_array()){
                                $contador++;

                            }
                        }
            //Consulta a la tabla users
            $consultas = "select * from users";
                        if(!$result = $queryss = $con->query($consultas)){
                            exit();
                        }

                // Sí la consulta contiene datos, imprime lo siguiente
                        if(mysqli_num_rows($result) > 0){
                            $cont = 0;
                            while($r = $queryss->fetch_array()){
                                $cont++;

                            }
                        }

            //Consulta a la tabla logins
            $consu = "select * from logins WHERE token = '0'";
                        if(!$resul = $querysss = $con->query($consu)){
                            exit();
                        }

                // Sí la consulta contiene datos, imprime lo siguiente
                        if(mysqli_num_rows($resul) > 0){
                            $counts = 0;
                            while($r = $querysss->fetch_array()){
                                $counts++;

                            }
                        }
            //Consulta a la tabla test_results
            $cast = "select * from tests_results";
                        if(!$ans = $queri = $con->query($cast)){
                            exit();
                        }

                // Sí la consulta contiene datos, imprime lo siguiente
                        if(mysqli_num_rows($ans) > 0){
                            $contar = 0;
                            while($r = $queri->fetch_array()){
                                $contar++;

                            }
                        }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel de Administración | Emprend-T</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Emprend-T</span>Panel de Administración</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img class="img-responsive" src="img/user.png" alt="" width="400" height="400">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $nombre;
                    echo $usuario;?></div>
				
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Inicio</a></li>
			<li><a href="proyectos.php"><em class="fa fa-calendar">&nbsp;</em> Proyectos</a></li>
			<li><a href="usuarios.php"><em class="fa fa-users">&nbsp;</em> Usuarios</a></li>
			<li><a href="configuraciones.php"><em class="fa fa-cog">&nbsp;</em> Configuraciones</a></li>
			<li><a href="#"><em class="fa fa-pencil">&nbsp;</em> Cursos</a></li>
			<li><a href="php/logout.php"><em class="fa fa-power-off">&nbsp;</em> Salir</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Inicio</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bienvenido Al Panel De Administración:</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-pencil color-blue"></em>
							<div class="large"><?php echo $contar; ?></div>
							<div class="text">Examenes Contestados</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-paperclip color-orange"></em>
							<div class="large"><?php echo $contador; ?></div>
							<div class="text">Proyectos Registrados</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $cont; ?></div>
							<div class="text">Usuarios Activos</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-red"></em>
							<div class="large"><?php echo $counts; ?></div>
							<div class="text">Usuarios Sin Validar Cuenta</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Archivos Recien Subidos
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-pencil"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#" data-toggle="modal" data-target="#addAdvice">
												<em class="fa fa-pencil"></em> Agregar Nuevo Aviso
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="archivos_recibidos">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Avisos Publicados
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-pencil"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#" data-toggle="modal" data-target="#addAdvice">
												<em class="fa fa-pencil"></em> Agregar Nuevo Aviso
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="records_content">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Mensajes Recibidos
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-pencil"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#" data-toggle="modal" data-target="#addAdvice">
												<em class="fa fa-pencil"></em> Agregar Nuevo Aviso
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="mensajes_recibidos">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		

		
		<div class="row">
			
			
			<div class="col-sm-12">
				<p class="back-link">Emprend-T 2016 &copy; Developed by: <a href="">Imagine Software &reg;</a></p>
			</div>
		</div><!--/.row-->

		
      <!-- Modal - Agregar Nuevo Proyecto -->
<div class="modal fade" id="addAdvice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Agregar Nuevo Aviso</h4>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="advice">Aviso</label>
                    <textarea rows="10" required type="text" maxlength="499" id="advice" placeholder="Descripción" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
				    <label>Usuario Por Avisar</label>
				    <select for="user" id="user" class="form-control">
				        <option value="">Seleccione...</option>
				    <?php
                    $usuarios = "select * from users";
                    if(!$sas = $queryz = $con->query($usuarios)){
                        exit();
                    }
                    if(mysqli_num_rows($sas) > 0){
				    while($rows = $queryz->fetch_array()){
    		        ?>
					    <option value="<?php echo $rows['id_user']; ?>"> <?php echo utf8_encode($rows['user_name']); ?></option>
                    <?php
                    }
                    }
                    ?>
                    </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="agregarAviso()">Agregar Proyecto</button>
            </div>
        </div>
    </div>
</div>		
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
    <script src="php/script_index.js"></script>

		
</body>
</html>