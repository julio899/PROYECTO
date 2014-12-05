<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Proyecto</title>
	<link rel="stylesheet" href="<?php echo base_url()."/css/bootstrap.css";?>">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.slides.min.js"></script>
<style>
div.espacio{
	height: 1em;
}
.izq{
	text-align: left;
	float: left;
	margin-top: 10px;
	padding-left: 10px;
	margin-bottom: 5px;
	font-size: 1.5em;
}
.btn-ingreso{
	margin-top: 5px;
	margin-bottom: 15px;
	font-size: 1.5em;
	height: 50px;
}
button.ico{
	height: 56px;
}

div.login-marco{
	padding: 5px;
}
.bs-header {
color: #FFF;
text-align: center;
background-color: #5fb0e4;
background-image: url("<?php echo base_url()."/img/triangles.jpg";?>");
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
padding: 10px 15px;
font-size: 16px;
text-shadow: 0 1px 0 rgba(0,0,0,.15);
padding: 5px 15px 10px;
font-size: 21px;
text-align: center;
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
.campos{
height: 57px;
width: 222px;
}
body{
background-color: transparent;
background-image: url('img/bg2.jpg');

}
div#content{
	box-shadow: 1px 1px 5px #354859;
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
      background-image: url("img/pagination.png");
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

div.jumbotron{
	padding-top: 5px;
}
h1.titulo{
	font-size: 1.5em;
}
h1.titulo>strong{
	font-size: 0.7em;
	font-style:oblique;
}
strong.txt-white{
	color: white;
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
<div class="bs-header" id="content">
	<div class="container">
		<h2>APLICACIÓN WEB PARA GESTIONAR LOS PROCESOS DE LOS ESTUDIANTES </h2>
		<p class="alert alert-info"> Diseñado y Desarrollado bajo plataformas <small  class="label label-success"> Libres</small> HTML/CSS/JS CodeIgniterframework PHP</p>
	</div>
</div>
<div class="container espacio">
	
</div>
	<div class="container">
		<div class="row-fluid">
			<div class="col-md-8">
				<div class="jumbotron">
					<h1 class="titulo">Bienvenidos al instituto de educación especial nacional bolivariano <strong>“RÓMULO GALLEGOS"</strong></h1>
						<p><pre>Aplicaci&oacute;n Tecnologica</pre> 
								<div id="slides">
								    <img src="<?php echo base_url();?>img/especial/0.jpg">
								    <img src="<?php echo base_url();?>img/especial/1.jpg">
								    <img src="<?php echo base_url();?>img/especial/2.jpg">
								    <img src="<?php echo base_url();?>img/especial/3.jpg">
								    <img src="<?php echo base_url();?>img/especial/3.png">
								</div>
						</p>
					<p><a href="#" class="btn btn-primary">Leer noticias en el portal</a></p>

				</div>

			</div>
			
			<div class="col-md-4">

				<!-- Identificacion -->
				<div class="thumbnail login-marco">


					<div class="list-group">
						<a href="#" class="list-group-item active">IDENTIFICACION</a>
						<?php if( $this->session->flashdata('error') ){echo '<p class="alert alert-danger">'.$this->session->flashdata('error').'</p>';}?>
					</div>
					<form action="<?php echo base_url().index_page()."/inicio/validacion";?>" method="post">
					

					<div class="btn-group btn-group-lg">
				        <button type="button" class="btn btn-default ico"><span class="glyphicon glyphicon-user"></span></button>
				        <input id="usuario" name="usuario" type="text" class="campos" placeholder="usuario" required>
      				</div>

					<div class="btn-group btn-group-lg">
				        <button type="button" class="btn btn-default ico"><span class="glyphicon glyphicon-asterisk"></span></button>
				        <input name="clave" type="password" class="campos" placeholder="clave" required>
      				</div>
				<button type="submit" class="btn-ingreso form-control btn btn-success">Ingresar</button>
					
					</form>
				</div>
				<!-- Fin de identificacion-->
				<div class="row-fluid">
					<pre>Desarrolladores</pre>
						<div class="col-md-12"><strong class="txt-white">Kelvin Navas CI: 16.690.872</strong></div>
						<div class="col-md-12"><strong class="txt-white">Miguel Díaz CI: 19.472.360</strong></div>
						<div class="col-md-12"><strong class="txt-white">Rainny González CI: 20.452.749</strong></div>
				</div>

			</div>
		</div>


	</div>




<div class="container espacio">
</div> 

		<footer id="footer">
      <div class="container" role="contentinfo">
        <div class="row">
          <div class="col-sm-12">
          	<div class="row">
              <div class="col-md-12">
                <a href="" rel="nofollow" target="ext" class="upta">UPTA-Maracay</a>
                <ul class="list-inline">
              			<li><a href="" title="BootstrapZero on Google Plus" target="ext" rel="nofollow">Google+</a></li>
              			<li><a href="" title="@BootstrapZero on Twitter" target="ext" rel="nofollow">Twitter</a></li>
              	</ul>
              </div>
           	</div>
            <div class="row">
              <div class="col-md-12">
              	<!--
              	<ul class="list-inline">
                  <li><a href="http://getbootstrap.com" title="Official Bootstrap Site" rel="nofollow">Bootstrap</a></li>
                  <li><a href="http://expo.getbootstrap.com" title="Showcase of Bootstrap excellence" rel="nofollow">Expo</a></li>
                  <li><a href="http://www.bootbundle.com" title="Download free Bootstrap themes, templates and snippets" rel="nofollow" target="ext">BootBundle</a></li>
                  <li><a href="http://bootstrapbay.com/?ref=skelly" rel="nofollow" target="ext">BootstrapBay</a></li>
                  <li><a href="http://www.bootply.com" title="Bootstrap Editor and playground" rel="nofollow" target="ext">Bootply</a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div><!--/row-->

        <div class="row">
        	<div class="col-md-12">
              	<p class="text-right">
              	Patrocinado y producido por Desarrolladores <a href="" >Kelvin Navas , Miguel Díaz y Rainny González</a>.
                </p>
          	</div>
        </div><!--/row-->
      </div>
    </footer>

</body>
</html>