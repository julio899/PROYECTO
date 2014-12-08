<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Proyecto</title>
	<link rel="stylesheet" href="<?php echo base_url()."/css/bootstrap.css";?>">
	<!-- Archivos JS -->
	<script src="<?php echo base_url()."js/jquery-1.11.1.min.js";?>"></script>
	<script src="<?php echo base_url()."js/bootstrap.js";?>"></script>
	<script src="<?php echo base_url()."js/jquery.slides.min.js";?>"></script>
<style>
div.espacio{
	height: 10em;
}
.izq{
	text-align: left;
	float: left;
	margin-top: 10px;
	margin-bottom: 5px;
	font-size: 1.5em;
}
.btn-ingreso{
	margin-top: 5px;
	margin-bottom: 15px;
	font-size: 1.5em;
	height: 50px;
}
header{
	margin-bottom: 30px;
	background-color: #362C57;
	background-image: radial-gradient(at 50% top, rgba(123, 84, 182, .6) 0, rgba(123, 84, 182, 0) 75%), radial-gradient(at right top, rgba(127, 74, 162, .5) 0, rgba(127, 74, 162, 0) 57%);
	background-image: -webkit-radial-gradient(50% top, rgba(123, 84, 182, .6) 0, rgba(123, 84, 182, 0) 75%), -webkit-radial-gradient(right top, rgba(127, 74, 162, .5) 0, rgba(127, 74, 162, 0) 57%);
	background-repeat: no-repeat;
	background-size: 100% 1000px;
	color: #E7E4F1;
}
form.form-mod-docente{
	padding:50px;
}
span.lbl{
	min-width: 200px;
}
p.contenedor-btn{
	padding-top: 10px;
}
a.navbar-brand{
	color: white;
}
a.texto-menu{
	color:white;
}
a.texto-menu:hover{

}
li:hover>a.texto-menu:hover{
	/*background-color: #428bca;Azul*/
	background-color: orange;
}
ul.navbar-nav>li{

	padding-top: 5px;
}
/*Estlo del ancho del contenido*/
div#contenido{
	min-height: 400px;
}
/*Estilos Pie de pagina*/
div#contenedor_centar{
	min-height: 400px;
	
}
footer{

padding-top: 30px;
padding-bottom: 30px;
background-color: #2fa4e7;
border-color: #1995dc;
margin-top: 50px;
color: #efefef;
height: 180px;
}
p.text-right>a{
	color:black;
}
.upta{
	color: white;
	font-style: oblique;
	font-size: 1em;
}
.bs-callout {
padding: 20px;
margin: 20px 0;
border: 1px solid #eee;
border-left-width: 5px;
border-radius: 3px;
}
.bs-callout-warning {
border-left-color: #f0ad4e;
}
.bs-callout-danger{
border-left-color: #d43f3a;	
}
   /* Prevents slides from flashing */
    #slides {
      display:none;
    }


    #slides .slidesjs-navigation {
      margin-top:3px;
    }

    #slides .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    #slides .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url("../img/pagination.png");
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }
div.baner{
	margin-top: 10px;
	padding-top: 10px;
	width:263px;
	height: 540px;
	background-image: url("<?php echo base_url();?>img/especial/baner.jpg");
}
div.baner>p{
	color: white;
	font-family: impact;
	margin-left: 10px;
	margin-right: 5px;
	text-align: center;
	font-size: 1.5em; 
}
div.maquina{
	color:#fff;
	background: url("<?php echo base_url();?>img/bg3.jpg") no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	opacity: 1;
	padding-bottom: 10px;
}
div.av-modal{
	padding: 30px;
}
</style>

  <script>
	    $(function(){
	      $("#slides").slidesjs({
	        width: 470,
	        height: 264
	      });
	    });
  </script>
</head>
<body>

<?php 
$datos_session=$this->session->userdata('datos_usuarios');
if($datos_session['tipo']=='A'):
?>

<header>
<!-- Inicio de cabecera -->
	<div class="navbar navbar-static-top">
		<div class="container">

			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
					<span class="sr-only">Equipo #x upta Maracay</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a href="<?php echo base_url().index_page().'/administrador'; ?>" class="navbar-brand">PROYECTO</a>

			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url().index_page().'/administrador'; ?>" class="texto-menu">Inicio</a></li>
					<li><a href="#" class="texto-menu">Reportes</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/historial'; ?>" class="texto-menu">Historial</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/soporte'; ?>" class="texto-menu">Soporte</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right"><li><p class="contenedor-btn"><a href="<?php echo base_url().index_page()."/administrador/cerrar_session";?>" class="btn btn-danger">Cerrar Seci&oacute;n</a></p></li>
				<li><p class="contenedor-btn"><a href="" id="btnCrearCuenta" class="btn btn-primary" >Creacion de Cuentas</a></p></li>
				</ul>
			</div>

		</div>
	</div> 
<!--Fin de la Div de la CABECERA -->
</header>
<?php endif; // Fin de Cabecera si es TIPO A ( Admonistrador )


// ------------------------------
# En caso que sea Consultor
// ------------------------------
if($datos_session['tipo']=='D'):
?>
<header>
<!-- Inicio de cabecera -->
	<div class="navbar navbar-static-top">
		<div class="container">

			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
					<span class="sr-only">Equipo #x upta Maracay</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a href="<?php echo base_url().index_page().'/docente'; ?>" class="navbar-brand">PROYECTO</a>

			</div>

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url().index_page().'/docente'; ?>" class="texto-menu">Inicio</a></li>
					<li><a href="<?php echo base_url().index_page().'/administrador/soporte'; ?>" class="texto-menu">Soporte</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><p class="contenedor-btn"><a href="<?php echo base_url().index_page()."/docente/cerrar_session";?>" class="btn btn-danger">Cerrar Seci&oacute;n</a></p></li>
					<?php if($datos_session['tipo']=='A'):?>
					<li><p class="contenedor-btn"><a href="" id="btnCrearCuenta" class="btn btn-primary" >Creacion de Cuentas</a></p></li>
					<?php endif;?>
				</ul>
			</div>

		</div>
	</div> 
<!--Fin de la Div de la CABECERA -->
</header>

<?php endif; //fin de cabecera consultor?>

