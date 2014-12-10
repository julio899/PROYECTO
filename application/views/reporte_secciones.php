<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reporte COMPLETO</title>
	<!-- <link rel="stylesheet" href=""> --> 


	<!-- Archivos JS -->
	<script src="../../js/jquery-1.11.1.min.js"></script>
<style>
	pre#impresion{
	margin-left: 70px;
	margin-right: 70px;
	}	
	table>tbody>tr>td{
	padding:10px;
	}
	h1{
	font-size: 1.5em;
	text-align: center;
	margin: 0px;
	padding: 0px;
	}
	div.cuerpo{
		margin-left: 25px;
	}
	div.contenido{
		margin-left: 50px;
		margin-top: 50px;
	}

</style>


</head>
<body>

	<pre id="impresion">
	<a class="imprimir" href="#"><button>Imprimir</button></a>
	<h1> <<  REPORTE DE SECCIONES DOCENTES Y ALUMNOS >>  </h1>

			<div class="cuerpo">
									<?php
					if(isset($datos)){
							
						for($r=0;$r<count($datos);$r++){
							echo "\n===================================================== [ ".$datos[$r]['grado']." - ".$datos[$r]['seccion']." ] =================================================\n";
							//echo "\n================================================================================================================\n";
						
							echo "<div class=\"contenido\">SECCION : ".$datos[$r]['seccion']." GRADO: ".$datos[$r]['grado']."  DOCENTE: ".$datos[$r]['docente']."\n";
							echo "TURNO: ".$datos[$r]['turno']." CANTIDAD DE ALUMNOS: ".count($datos[$r]['alumnos_inscritos'])." \n";
							echo " - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n";
								if(count($datos[$r]['alumnos_inscritos'])==0){
									echo "\n\n\n*** AUN NO POSEE ALUMNOS ASIGNADOS ***\n\n\n";
								}else{
									echo "<table>
										<caption>ALUMNOS REGISTRADOS</caption>
										<thead>
											<tr>
												<th>#</th>
												<th>NOMBRE</th>
												<th>EDAD</th>
												<th>CEDULA ALUMNO</th>
												<th>REPRESENTANTE</th>
											</tr>
										</thead>
										<tbody>
											";
									for($l=0;$l<count($datos[$r]['alumnos_inscritos']);$l++){
										//echo "\n  ) \t\tCEDULA: " );
										echo "<tr>
												<td>".($l+1)."</td>
												<td>".strtoupper( $datos[$r]['alumnos_inscritos'][$l]['nombres']." ".$datos[$r]['alumnos_inscritos'][$l]['apellidos']) ."</td>
												<td>".$datos[$r]['alumnos_inscritos'][$l]['edad']."</td>
												<td>".$datos[$r]['alumnos_inscritos'][$l]['cedula']."</td>
												<td>".strtoupper( $datos[$r]['alumnos_inscritos'][$l]['representante'] )."</td>
											</tr>";
									}//fin del for de recorer los alumnos
									
									echo"</tbody></table>";
								}

						echo "</div>";
						}//fin del for
					
					}else{
						echo "No se puede imprimir el reposte  ya que no se recibieron los datos necesarios...";
					}

					?>				
			</div>
	</pre>


<script>
	$('.imprimir').click(function(){
    window.print();
    return false;
});
</script>
</body>
</html>