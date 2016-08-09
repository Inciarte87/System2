<?php
if (isset($_POST['usuario']) && isset($_POST['password']))
    {
    if (($_POST['usuario']=="admin")&&($_POST['password']=="1234") )
      
        {
        session_start();
        $_SESSION['usuario']='<html><font type="arial" size="5">Username</font></html>';
        $_SESSION['tiempo']=time();
        header("location:Menu.php");
        }
    else
        echo '<script> alert ("Usuario O Clave incorrectos, Verifiquelos") </script>';
        
 }
 ?>
<html>

<head>

      <title> </title>

   <style type="text/css">

       #Estilo1{
       	   font-family:arial;
       	   font-weight:bold;
       	   color:black;
           background-color:;
       }

       #Estilo2{
       	  font-family:arial;
       	  font-weight:bold;
       	  color:black;
       }

       #Estilo{
          font-family:arial;
          font-weight:bold;
          color:white;

       }

       #fie{
       	  border-radius: 1.4em 1.4em 1.4em 1.4em;
          box-shadow: 5px 4px 9px 1px #C0C0C0;
       }

       #CajaTextLogin{
          border-radius: 0.5em 0.5em 0.5em 0.5em;
          border-color:#C0C0C0;
          box-shadow: inset 1px 2px 11px 1px #C0C0C0;
       }

       #tablacentral{
         text-align: center;
         border-radius: 1.5em;
         height: 18%;
         box-shadow: 4px 0px 9px 4.5px #C0C0C0;
         width:97%;
      }

      #escudo_gobernacion{
         border-radius: 0.7em;
      }

      #republica{
         font-family: arial,times roman,verdana;
         color:black;
         font-weight:bold;
         text-align: center;
      }

      #Estilo_boton{
        background-color:red;
        border-color:black;
        border-radius: 0.5em 0.5em 0.5em 0.5em;
        width:25%;
        color: white;
        font-weight: bold;
        cursor:pointer;
      }

      #Border_SistemaInscripcion{
        width:38%;
        text-align:center;
        background-color:red;
        border-radius: 4em 0.5em 4em 0.5em;
      }

      .body{
        background-repeat:;
        background-size: 179px;
        background-position:center;
        background-attachment:fixed
      }

      #recordar_usuario{
        font-family: arial,times roman,verdana;
        font-size: 14;
      }



   </style>


   <script type="text/javascript">

   function validar () {
            
   var verificar= true;

   if (!document.formulario_login.usuario.value) {
         alert("El campo Usuario es requerido");
         document.formulario_login.usuario.focus();
         verificar=false;
         return false;
                
  }else if (!document.formulario_login.password.value) {
        alert("El campo Clave es requerido");
        document.formulario_login.password.focus();
        verificar=false;
        return false;

  }if (verificar) {
       document.formulario_login.submit();

            }
        }
        
  window.onload= function () {
     document.getElementById("Estilo_boton").onclick=validar;
        }



   </script>


<table id="tablacentral" align="center">
   
<tr>
      
      <td width="33%">
          <img src="Img/Escudo_venezuela.jpg" width="88" heigth="27" align="right" id="escudo_gobernacion">  
      </td>
      
      
      <td width="30%" id="republica" align="center">
          Rep&uacute;blica Bolivariana de Venezuela <br>
          Secretaria Bolivariana de Educaci&oacute;n <br>
          E.B.E. Maestro "Tomas Rafael Jimenez" <br>
          Maracaibo - Zulia  &nbsp;
      </td>
   
      
      <td width="33%">
        <img src="Img/gobernacion_zulia.jpg" width="21%" height="100" align="left" id="escudo_gobernacion">
      </td>
   
</tr>
   
</table> <br> <br>

</head>


<body background="Logo_escuela.jpg" class="body">  <br>  


<table align="center" id="Border_SistemaInscripcion">

  <tr>
    <td id="Estilo"> SISTEMA DE INSCRIPCI&Oacute;N </td>
  </tr>

</table>    <br> <br> <br> <br> <br> <br>

 
<table align="center" width="25%">

	<tr> 

	   <td>
     
    <fieldset style="width:100%" id="fie">  

        <legend id="Estilo1">&nbsp;INGRESAR AL SISTEMA&nbsp; </legend>     


    <form action="index.php" method="POST" name="formulario_login" style="text-align:center">  <br>

         <center>  <img src="Img/Login.png"> </center> <br>


      <label id="Estilo2"> Usuario: </label>  <input type="text" name="usuario" id="CajaTextLogin" maxlength="10" title="El campo usuario es obligatorio" placeholder="&nbsp;&nbsp;Usuario..."> <br> <br>

      <label id="Estilo2"> Clave: </label> &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="CajaTextLogin" maxlength="8" title="El campo clave es obligatorio" placeholder="&nbsp;&nbsp;Password...">  <br> <br>

      <input type="checkbox" name="check_recordar_Usuario"> <label id="recordar_usuario"> Recordarme el usuario </label> <br> <br>

      <input type="button" value="Entrar" name="boton_entrar" id="Estilo_boton">&nbsp;
      <input type="reset" value="Cancelar" name="boton_cancelar" id="Estilo_boton">&nbsp;

     <a style="text-decoration:none;" href="Menu2.php"><input type="button" value="Invitado" name="boton_invitado" id="Estilo_boton"> </a>


    </form>

    </fieldset>

      </td>

   </tr>

</table>


</body>

</html>