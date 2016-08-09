	    
<html>

	<head> 

		<style type="text/css">

		.clas1{
			font-family: arial;
			font-weight: bold;
			text-align: center;
			background-color:red;
			color: white;
		}

		.clas2{
			font-family: arial;
		}


		</style>

	</head>


<body>

<?php

include ("Conexion.php");
$conex=mysql_connect($host,$user)
	or die("Problemas al conectar con el servidor");

mysql_select_db($bd,$conex)
	or die("Problemas al conectar con la Base de datos");

$result=mysql_query("SELECT * FROM alumno");

?>

<table align="center" border="2" width="90%">

<tr class="clas1">
	<td>Apellidos:</td>
	<td>Nombres:</td>
	<td width="20%">Ced. Identidad / C.E:</td>
	<td>Sexo:</td>
	<td>Edad:</td>
	<td>Nacionalidad:</td>
</tr>

<?php

while($row=mysql_fetch_assoc($result)) {

	printf("<tr class='clas2'>

            <td>&nbsp;%s</td>
            <td>&nbsp;%s</td>
            <td> <center>&nbsp;%s</center> </td>
            <td> <center>&nbsp;%s</center> </td>
            <td> <center>&nbsp;%s</center> </td>
            <td> <center>&nbsp;%s</center> </td>

		</tr>",$row["Apellidos"],$row["Nombres"],$row["CI_CE"],$row["Sexo"],$row["Edad"],$row["Nacionalidad"]);
}
mysql_free_result($result);
?>

<?php

include ("Conexion.php");

$conex=mysql_connect($host,$user)
	or die("Problemas al conectar con el servidor");

mysql_select_db($bd,$conex)
	or die("Problemas al conectar con la Base de datos");

$result=mysql_query("SELECT * FROM alumno");

?>

<tr class="clas1">
	<td>Lugar de nacimiento:</td>
	<td>Fecha de nacimiento:</td>
	<td>Grupo sanguineo:</td>
	<td>Padece alguna enfermedad:</td>

</tr>

<?php
while($row = mysql_fetch_assoc($result)) {
	printf("<tr class='clas2'> 

             <td>&nbsp;%s</td>
             <td>&nbsp;%s</td>
             <td>&nbsp;%s</td>
             <td>&nbsp;%s</td> 

		   </tr>",$row["Lugar_de_Nacimiento"],$row["Fecha_de_Nacimiento"],$row["Grupo_sanguineo"],$row["PAE"]);
}
mysql_free_result($result);
?>


</table>

</body>



</html>