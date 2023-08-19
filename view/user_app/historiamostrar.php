<?php
session_start();
if (!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2) {
    header('location: ../../login.php');
}
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Historia clinica</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/logo.png" type="image/x-icon"/>

	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>WebFont.load({google: {"families":["Lato:300,400,700,900"]}, custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']}, active: function() {sessionStorage.fonts = true;}});</script>

	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="blue">
				<a href="admin.php" class="logo"><img src="../../assets/img/logoYAVIRAC.png" width="180px" height="70px"></a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon-menu"></i></span></button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar"><i class="icon-menu"></i></button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1"><i class="fa fa-search search-icon"></i></button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav"><i class="fa fa-search"></i></a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">0</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li><div class="dropdown-title">Usted tiene 0 notificaciones</div></li>
								<li></li>
								<li><a class="see-all" href="javascript:void(0);">Ver notificaciones<i class="fa fa-angle-right"></i></a></li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm"><img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle"></div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../../assets/img/mujer.png" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo ucfirst($_SESSION['nombre']); ?></h4>
												<p class="text-muted">Paciente</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li><div class="dropdown-divider"></div><a class="dropdown-item" href="#">Mi Perfil</a><div class="dropdown-divider"></div><a class="dropdown-item" href="../../cerrarSesion.php">Cerrar sesion</a></li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/mujer.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true"><span><?php echo ucfirst($_SESSION['nombre']); ?><span class="user-level">Paciente</span><span class="caret"></span></span></a>
							<div class="clearfix"></div>
							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li><a href="#profile"><span class="link-collapse">Mi Perfil</span></a></li>
									<li><a href="../../cerrarSesion.php"><span class="link-collapse">Cerrar sesion</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item"><a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false"><i class="fas fa-home"></i><p>Home</p><span class="caret"></span></a></li>
						<li class="nav-item active">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i><p>Historial de Citas</p><span class="caret"></span>
							</a>
							<div class="collapse" id="base">
									<ul class="nav nav-collapse">
									<li><a href="mostrar.php"><span class="sub-item">Mostrar</span></a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-male"></i><p>Historia clinica</p><span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li><a href="../user_app/historiamostrar.php"><span class="sub-item">Mostrar</span></a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div><h2 class="text-white pb-2 fw-bold">Historia clinica</h2></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="card-title fw-mediumbold">Motivo</div>
							<p>Fecha: 25 de Julio 2023</p>
							<div class="item-list"><div class="info-user ml-3"><p>Anciedad y decaimiento</p></div></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="card-title fw-mediumbold">Diagnostico</div>
							<div class="item-list"><div class="info-user ml-3"><p>Paciente, sexo femenino, 22 años de edad, con antecedentes de ansiedad, ingresa a consulta para ser valorada y se concluye que atraviesa etapa de ansiedad leve se investiga motivos de la causa y refiere estres motivo por el cual baja calificaciones en el ambito educativo y presenta varios estados de animo concurrentemente</p></div></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<div class="card-title fw-mediumbold">Tratamiento</div>
							<div class="item-list"><div class="info-user ml-3"><p>Se recomienda asistir a una consulta semanal para dar seguimiento a la ansiedad y tomar complejo B cada 12 horas para controlar estres</p></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>
	<script src="../../assets/js/atlantis.min.js"></script>
	<script src="../../assets/js/setting-demo.js"></script>
	<script src="../../assets/js/demo.js"></script>
</body>
</html>
