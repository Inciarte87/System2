<?php
include("seguridad.php");

$id_alumno = $_GET['id'];

if(isset($_GET['id']))
{
	$conex = mysql_connect("localhost","root","")or die("No ha sido posible la Coneccion al Servidor local");

	$sdb = mysql_select_db("inscripcion",$conex)or die("No se encontro la Base de Datos inscripcion");

	$dataper = mysql_query("SELECT * FROM alumno, inscribir, representante WHERE alumno.id_alumno = '".$id_alumno."' AND inscribir.id_alumno = '".$id_alumno."' AND representante.id_alumno = '".$id_alumno."' ")or die ("Error al consultar Datos");

	$row = mysql_fetch_assoc($dataper);

	if($row['Enfermedad_Padecida'] == null)
	{
		$enfermedad = "No padece";
	}
	else
	{
		$enfermedad = $row['Enfermedad_Padecida'];
	}

	$fnac_alum = $row['Fecha_de_Nacimiento'];

	$fnac_alum = explode("-",$fnac_alum);
	list($ano,$mes,$dia)=$fnac_alum;
	$fnac_alum = $dia."-".$mes."-".$ano;

	$fnac_repre = $row['Fecha_nacimiento_repre'];

	$fnac_repre = explode("-",$fnac_repre);
	list($ano,$mes,$dia)=$fnac_repre;
	$fnac_repre = $dia."-".$mes."-".$ano;


// Tablas Alumno, inscribir, representante

?>

<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="UTF-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Reporte</title>
		<meta name="description" content="" />
		<link rel="stylesheet" media="screen" type="text/css" href="" />
		<link rel="shortcut icon"  href="" type="image/x-icon" />

		<style type="text/css">

		body{
			margin:0;
			padding:0;
		}

		.text {
			text-align:center;
			font-size: 23px;
		}

		h1 {
			padding-top:40px;
			text-align:center;
		}

		h2 {
			text-align:center;
			background-color:#B7B7B7;
			border:1px solid black;
			margin:0 0 0 10%;
			width:80%;
			border-radius: 5px;
		}

		.foto {
			border:1px solid black;
			width:50%;
			height:100px;
		}

		.foto p {
			vertical-align:middle;
			margin-top: 20%;
		}

		</style>

	</head>

<body>

	<header>
		<img style="float:left;margin:-1% -23% 0 23%;" src="Img/Escudo_venezuela.jpg" width="8%">
		<p class="text">Rep&uacute;blica Bolivariana de Venezuela<br/>
						Secretaria Bolivariana de Educaci&oacute;n<br/>
						E.B.R. Maestro "Tomas Rafael Jimenez"<br/>
								Maracaibo - Zulia</p>
		<img style="float:right;margin:-11% 17% 0 0;height:140px;" src="Img/gobernacion_zulia.jpg" width="9%">

		<h1>Planilla de Inscripcion</h1>
	</header>

	<section>
		
		<article>
			<h2>DATOS PERSONALES DEL ALUMNO</h2><br/>
			<table width="80%" border="0" align="center" cellspacing="10">
				<tr>	
					<td><b>APELLIDOS : <?php echo $row['Apellidos']; ?></b></td>
					<td><b>NOMBRES : <?php echo $row['Nombres']; ?></b></td>
					<td align="center"><div class="foto"><p>Foto</p></div></td>
				</tr>
				<tr>
					<td><b>CED.IDENTIDAD / COD.ESCOLAR : <?php echo $row['CI_CE']; ?></b></td>
					<td><b>SEXO : <?php echo $row['Sexo']; ?></b></td>
					<td><b>NACIONALIDAD : <?php echo $row['Nacionalidad']; ?></b></td>
				</tr>
				<tr>
					<td><b>LUGAR DE NACIMIENTO : <?php echo $row['Lugar_de_Nacimiento']; ?></b></td>
					<td><b>FECHA DE NACIMIENTO : <?php echo $fnac_alum; ?></b></td>
					<td><b>GRUPO SANGUINEO : <?php echo $row['Grupo_sanguineo']; ?></b></td>
				</tr>
				<tr>
					<td><b>ENFERMEDAD PADECIDA : <?php echo $enfermedad; ?></b></td>
				</tr>
			</table><br/>
		</article>

		<article>
			<h2>DATOS ACADEMICOS</h2><br/>
			<table width="75%" border="0" align="center" cellspacing="10">
				<tr>
					<td><b>GRADO : <?php echo $row['Grado_Cursante']; ?></b></td>
					<td><b>SECCION : <?php echo $row['Seccion']; ?></b></td>
					<td><b>TURNO : <?php echo $row['Turno']; ?></b></td>
					<td><b>A&Ntilde;O ESCOLAR : <?php echo $row['Ano_escolar']; ?></b></td>
				</tr>
			</table><br/>
		</article>

		<article>
			<h2>DATOS DEL REPRESENANTE</h2><br/>
			<table width="80%" border="0" align="center" cellspacing="10">
				<tr>
					<td><b>APELLIDOS : <?php echo $row['Apellidos_repre']; ?></b></td>
					<td><b>NOMBRES : <?php echo $row['Nombres_repre']; ?></b></td>
					<td ><div style="margin-left:50%;text-align:center;width:33%;" class="foto"><p>Foto</p></div></td>	
				</tr>
				<tr>
					<td><b>CED.IDENTIDAD : <?php echo $row['Cedula_repre']; ?></b></td>
					<td><b>SEXO : <?php echo $row['Sexo_repre']; ?></b></td>
					<td><b>EDAD : <?php echo $row['Edad_repre']; ?></b></td>
				</tr>
				<tr>
					<td><b>FECHA DE NACIMIENTO : <?php echo $fnac_repre; ?></b></td>
					<td><b>PARENTESCO : <?php echo $row['Parentesco_repre']; ?></b></td>
					<td colspan="2"><b>TELEFONOS : <?php echo $row['Codigo_Telefono_local_repre']."-".$row['Numero_Local_repre']." / ".$row['Codigo_Telefono_Celular_repre']."-".$row['Numero_Celular_repre']; ?></b></td>
				</tr>
				<tr>
					<td><b>PROFESION U OFICIO : <?php echo $row['Profesion_U_oficio_repre']; ?></b></td>
					<td><b>DIRECCION DEL HOGAR : <?php echo $row['Direccion_del_hogar_repre']; ?></b></td>
					<td><b>NACIONALIDAD : <?php echo $row['Nacionalidad_repre']; ?></b></td>
				</tr>
				<tr>
					<td colspan="2"><b>LUGAR DE NACIMIENTO : <?php echo $row['Lugar_nacimiento_repre']; ?></b></td>
				</tr>
			</table><br/>
		</article>

		<button style="margin:2% 0 0 50%;width:100px;background-color:#B7B7B7;font-size:20px;" onclick="javascript:window.print();">Imprimir</button>

	</section>

	<footer></footer>

</body>
</html>

<?php
}
else
{
	
}

 ?>