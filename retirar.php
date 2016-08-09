<?php
include("Conexion.php");
$CI_CE=$_POST['CI_CE'];
if(isset($_POST['CI_CE']))
{

 $con=mysql_connect($host,$user,"") or die("problemas al conectar con la base de datos");
 mysql_select_db($db,$con) or die("problemas al conectar con la tabla");

mysql_query("INSERT INTO retirados (Apellidos,Nombres,CI_CE,Sexo,Edad) values ('$_POST[Apellidos]','$_POST[Nombres]','$_POST[CI_CE]','$_POST[Sexo]','$_POST[Edad]')");

mysql_query("DELETE FROM alumno WHERE CI_CE='$CI_CE'")
    or die("Problemas al realizar la consulta:".mysql_error());

    echo "<script type='text/javascript' language='javascript'>

    alert('El Alumno ha sido Retirado Satisfactoriamente');

    window.location='Menu.php';

    </script>";

    header("Location:Menu.php");

}else
{
	echo "no me cumplo";
}

?>



