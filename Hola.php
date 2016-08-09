<html>
<head>
   
   <style>
      
      #camion{
        width:45%;
     	height:5%;
     	background-color: #EA201F;
     	font-family:arial,times roman,verdana;
     	color:white;
     	border:2px solid black;
     	border-radius:0.8em 0.8em 0.8em 0.8em;
        text-align: center;
        font-weight:bold;
      }
      
      #escudo_gobernacion{
         border-radius: 0.7em;
      }
      
      #tablacentral{
         text-align: center;
         border: 2px solid black;
         background-color:#EA201F;
         border-radius: 1.9em;
         height: 18%;
         box-shadow: 0px 0px 4px 3px #C0C0C0;
      }
      
      #republica{
         font-family: arial,times roman,verdana;
	 color:black;
         font-weight:bold;
         text-align: center;
      }
      
      
      #tabla{
         border: 3px solid black;
         border-radius: 0.9em 0.9em 0.9em 0.9em;
         box-shadow: 2px 2px 4px 2px #C0C0C0;
      }
      
      #maquina{
	 font-family:arial,times roman,verdana;
	 color:black;
	 text-transform:blue;
	 font-weight:bold;
         background-color:#EA201F;
         border-radius: 0.8em 0.8em 0.0em 0.0em;
      }
      
      #carro{
         font-family:arial,times roman,verdana;
	 font-weight:bold;
         background-color:yellow;
         border-radius: 0.2em 0.2em 0.9em 0.9em;
      }
      
      #tres{
	 font-family:arial,times roman,verdana;
	 align:center;
      }
      
      .otra{
	 background-color:red;
	 color:white;
	 font-weight:bold;
	 border: solid 1px black;
	 border-radius: 0.3em;
      }
      
      #estilo{
	 background-color:#3366FF;
	 color:white;
         text-align: center;
         border-color:black;
      }
      
      .Caja{
         border-radius: 0.4em;
         border-color: #000000;
         box-shadow: 2px 1px 1px 2px #C0C0C0;
      }
      
   </style>
   
   
   <script>
      
        function validar (){
         
            var verificar=true;
            
            if(!document.formulario.usuario.value){
            alert("El campo Usuario es requerido");
            document.formulario.usuario.focus();
            verificar= false;
            return false;
            
            }else if (!document.formulario.password.value){
            alert ("El campo Contraseña es requerido");
            document.formulario.password.focus();
            verificar= false;
            return false;
         
            }if(verificar){
            document.formulario.submit();
          
          }
        }
        
        window.onload = function(){
            document.getElementById("boton_ingresar").onclick = validar;
        
       }
       
    </script>
   
</head>


<body background="">

<table id="tablacentral">
   
<tr>
      
      <td width="30%">
          <img src="Escudo_venezuela.jpg" width="88" heigth="27" align="right" id="escudo_gobernacion">  
      </td>
      
      
      <td width="25%" id="republica">
          Rep&uacute;blica Bolivariana de Venezuela <br>
          Secretaria Bolivariana de Educaci&oacute;n <br>
          E.B.E. Maestro "Tomas Rafael Jimenez" <br>
          Maracaibo - Zulia  &nbsp;
      </td>
   
      
      <td width="30%">
        <img src="gobernacion_zulia.jpg" width="21%" height="100" align="left" id="escudo_gobernacion">
      </td>
   
</tr>
   
</table> <br> <br>
   

<table id="camion" align="center">
      
   <tr>
         
      <td>            
         SISTEMA DE INSCRIPCI&Oacute;N
      </td>
         
         
   </tr>
   
</table> <br> <br> <br> <br> <br>
   
   
   
<form name="formulario" method="post" action="conexion.php">
   

<table align="center" width="25%" cellpadding="5" cellspacing="0" id="tabla">
      
   <tr>
         
      <td id="maquina">  
          &nbsp; Ingresar al sistema
      </td>
      
   </tr>
      
      
      
   <tr>
         
      <td id="carro"> <br> <center> <img src="Login.png"> </center> <br> &nbsp;
      
            Usuario: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
            <input type="text" name="usuario" id="usuario" size="17" class="Caja"> <br> <br> &nbsp;

            Contrase&ntilde;a: &nbsp;
	    
            <input type="password" name="password" id="password" size="17" class="Caja"> <br> <br>
            

            <center>
	       
                   <input type="submit" name="boton_ingresar" id="boton_ingresar" value="Ingresar" class="otra">  &nbsp;
                   <input type="reset"  name="boton_cancelar" id="boton_cancelar" value="Cancelar" class="otra">
		     
            </center>  <br>
	    
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    
           <a href="" style="text-decoration:none;"> <input type="button" value="Registrarse" id="estilo"> </a> <br> <br>
     
      </td>
      
   </tr>
 
</table>  <br>

</form> <br>

   
   <center id="tres">
           <a href=""> <font color="black"> Ayuda </a>&nbsp;
           <a href=""> <font color="black"> Politicas </a>&nbsp;
           <a href=""> <font color="black"> Copyrigth </a>
   </center>
         
         
</body>

</html>