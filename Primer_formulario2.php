<html>

<head> 

	<style type="text/css">

	#boton_cerrar{
		box-shadow: 5px;
		background-color: red;
		border-radius: 0.7em;
		color:white;
		font-weight:bold;
	}

	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/validaciones.js"></script>

	

</head>

<div align="right"><a href="Menu2.php"> <input type="button" value="&nbsp;Atras&nbsp;" name="bot_button" id="boton_cerrar"> <input type="submit" name="cerrar sesion" value="Cerrar sesion" id="boton_cerrar"> </a></div>

   
    <head>
	
	<style>
	
	.casa{
	   background-color:red;
	   width:50%;
	   height:5%;
	   font-family:arial,times roman,verdana;
	   color:white;
	   text-align:center;
	   font-size:25;
	   border-radius: 0.7em 0.7em 0.7em 0.7em;
	   box-shadow: inset 3px 2px 9px 0px black;
	}


	.cajas_formulario{
		border-radius: 0.9em 0.9em 0.9em 0.9em;
		box-shadow: inset 0px 0px 12px 0px #C0C0C0;
		height: 25;
		background-color: white;
		border-color: ;
	}


	#legend_ses{
		font-family:arial,verdana;
		font-weight: bold;
		font-size: 20;
		color:red;
	}

	#fiel_ses{  
		border: 2px solid #C0C0C0;
		border-radius: 1.5em 1.5em 1.5em 1.5em;
	}

	#fuente_y_negrita{
		font-family:arial;
		font-weight:bold;
	}

	#Sin_negrita{
		font-weight:normal;
		font-family: arial;
	}


	.Body_Primer_Formulario{
		background-repeat:;
        background-size: 50px;
        background-position:center;
        background-attachment:fixed
	}

	#BotonSiguiente{
		font-family: arial;
		color: white;
		height: 4%;
		width:8%;
		background-color:red;
		font-weight: bold;
		border-radius: 0.8em;
	}



	
	</style>
	
		  
<table align="center" class="casa"> 
			       
	<tr> 
	    <td>   
			Planilla de inscripci&oacute;n
	    </td>			   
   </tr> 

</table>  <br>
        
<script>
        
  window.onload= function () {
     document.getElementById("BotonSiguiente").onclick=validar;
        }
        
        </script>
        
        
    </head>
    
<body background="Img/Logo_escuela.jpg" class="Body_Primer_Formulario">


    <fieldset id="fiel_ses">   
        
		<legend> <label id="legend_ses"> &nbsp; Datos del alumno (a) </label> <font color="#3CB371">* </font> &nbsp;</legend> <br>


		<form method="post" action="Guardar2.php" name="PrimerFormulario">
     

            <label id="fuente_y_negrita"> Apellidos: </label> <input type="text" name="Apellidos" id="apellidos" size="25" class="cajas_formulario" autofocus="" maxlength="30"> &nbsp;
            <label id="fuente_y_negrita"> Nombres: </label> <input type="text" name="Nombres" id="nombres" size="25" class="cajas_formulario" maxlength="30"> &nbsp; &nbsp;
            <label id="fuente_y_negrita"> Ced. Identidad / Cod. Escolar: </label> <input type="text" name="CI_CE" id="cedula" size="15" class="cajas_formulario" maxlength="12"> &nbsp; &nbsp;
            <label id="fuente_y_negrita"> Sexo:  </label> &nbsp; <label id="Sin_negrita"> M<input type="radio" name="Sexo" value="Masculino" title="Masculino"> </label>&nbsp; <label id="Sin_negrita"> F<input type="radio" name="Sexo" value="Femenino" title="Femenino"> </label> <br> <br>
            
                
            <label id="fuente_y_negrita"> Edad: </label>
             
             <!--AQUI COMIENZA LA SELECCION DE LA EDAD-->
             
             <select name="Edad" class="cajas_formulario">
             <option selected>&nbsp;Seleccione </option>
             <option value="3"> 3 </option>
             <option value="4"> 4 </option>
             <option value="5"> 5 </option>
             <option value="6"> 6 </option>
             <option value="7"> 7 </option>
             <option value="8"> 8 </option>
             <option value="9"> 9 </option>
             <option value="10"> 10 </option>
             <option value="11"> 11 </option>
             <option value="12"> 12 </option>
             <option value="13"> 13 </option>
             <option value="14"> 14 </option>
             <option value="15"> 15 </option>
             </select>
             
             &nbsp;&nbsp;&nbsp;
              
             <label id="fuente_y_negrita"> Nacionalidad: </label> &nbsp; <label id="Sin_negrita"> V<input type="radio" name="Nacionalidad" value="Venezolana"> </label> &nbsp; <label id="Sin_negrita"> E<input type="radio" name="Nacionalidad" value="Extranjero"> </label> &nbsp;&nbsp;
			 
			 <label id="fuente_y_negrita"> Lugar de Nacimiento: </label> <input type="text" name="Lugar_de_Nacimiento" id="ln" size="30" class="cajas_formulario" maxlength="50" placeholder="&nbsp;&nbsp;Municipio, Estado">&nbsp;&nbsp;&nbsp;
             
             <label id="fuente_y_negrita"> Fecha de nacimiento: </label>
	     
	         <select style="width: 75px; margin-left: 0px;" class="cajas_formulario" name="dia_alum" required>
	         				<option value="">Dia</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option></select>

						<select style="width: 120px;" class="cajas_formulario" name="mes_alum" required><option value="0" >Mes</option>
							<option value="1">Enero</option>
							<option value="2">Febrero</option>
							<option value="3">Marzo</option>
							<option value="4">Abril</option>
							<option value="5">Mayo</option>
							<option value="6">Junio</option>
							<option value="7">Julio</option>
							<option value="8">Agosto</option>
							<option value="9">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option></select>

						<select style="width: 80px;" class="cajas_formulario" name="año_alum" required>
							<option value="">A&ntilde;o</option>
							<option value="2012" >2012</option>
							<option value="2011" >2011</option>
							<option value="2010" >2010</option>
							<option value="2009" >2009</option>
							<option value="2008" >2008</option>
							<option value="2007" >2007</option>
							<option value="2006" >2006</option>
							<option value="2005" >2005</option>
							<option value="2004" >2004</option>
							<option value="2003" >2003</option>
							<option value="2002" >2002</option>
							<option value="2001" >2001</option>
							<option value="2000" >2000</option>
							<option value="1999" >1999</option>
							<option value="1998" >1998</option>
							<option value="1997" >1997</option>
							<option value="1996" >1996</option>
							<option value="1995" >1995</option>
							<option value="1994" >1994</option>
							<option value="1993" >1993</option>
							<option value="1992" >1992</option>
							<option value="1991" >1991</option>
							<option value="1990" >1990</option>
							<option value="1989" >1989</option>
							<option value="1988" >1988</option>
							<option value="1987" >1987</option>
							<option value="1986" >1986</option>
							<option value="1985" >1985</option>
							<option value="1984" >1984</option>
							<option value="1983" >1983</option>
							<option value="1982" >1982</option>
							<option value="1981" >1981</option>
							<option value="1980" >1980</option>
							<option value="1979" >1979</option>
							<option value="1978" >1978</option>
							<option value="1977" >1977</option>
							<option value="1976" >1976</option>
							<option value="1975" >1975</option>
							<option value="1974" >1974</option>
							<option value="1973" >1973</option>
							<option value="1972" >1972</option>
							<option value="1971" >1971</option>
							<option value="1970" >1970</option>
							<option value="1969" >1969</option>
							<option value="1968" >1968</option>
							<option value="1967" >1967</option>
							<option value="1966" >1966</option>
							<option value="1965" >1965</option>
							<option value="1964" >1964</option>
							<option value="1963" >1963</option>
							<option value="1962" >1962</option>
							<option value="1961" >1961</option>
							<option value="1960" >1960</option>
							<option value="1959" >1959</option>
							<option value="1958" >1958</option>
							<option value="1957" >1957</option>
							<option value="1956" >1956</option>
							<option value="1955" >1955</option>
							<option value="1954" >1954</option>
							<option value="1953" >1953</option>
							<option value="1952" >1952</option>
							<option value="1951" >1951</option>
							<option value="1950" >1950</option>
							<option value="1949" >1949</option>
							<option value="1948" >1948</option>
							<option value="1947" >1947</option>
							<option value="1946" >1946</option>
							<option value="1945" >1945</option>
							<option value="1944" >1944</option>
							<option value="1943" >1943</option>
							<option value="1942" >1942</option>
							<option value="1941" >1941</option>
							<option value="1940" >1940</option>
							<option value="1939" >1939</option>
							<option value="1938" >1938</option>
							<option value="1937" >1937</option>
							<option value="1936" >1936</option>
							<option value="1935" >1935</option>
							<option value="1934" >1934</option>
							<option value="1933" >1933</option>
							<option value="1932" >1932</option>
							<option value="1931" >1931</option>
							<option value="1930" >1930</option>
							<option value="1929" >1929</option>
							<option value="1928" >1928</option>
							<option value="1927" >1927</option>
							<option value="1926" >1926</option>
							<option value="1925" >1925</option>
							<option value="1924" >1924</option>
							<option value="1923" >1923</option>
							<option value="1922" >1922</option>
							<option value="1921" >1921</option>
							<option value="1920" >1920</option>
							<option value="1919" >1919</option>
							<option value="1918" >1918</option>
							<option value="1917" >1917</option>
							<option value="1916" >1916</option>
							<option value="1915" >1915</option>
							<option value="1914" >1914</option>
							<option value="1913" >1913</option>
							<option value="1912" >1912</option>
							<option value="1911" >1911</option>
							<option value="1910" >1910</option></select> <br> <br>
    
             <label id="fuente_y_negrita"> Grupo sanguineo: </label> <input type="text" name="Grupo_sanguineo" id="gs" class="cajas_formulario"  maxlength="10">&nbsp;&nbsp;&nbsp;
             <label id="fuente_y_negrita"> Padece alguna enfermedad? </label> &nbsp; <label id="Sin_negrita"> Si<input type="radio" name="PAE" value="Si" onclick="PrimerFormulario.enfermedad_padecida.disabled = false;"> </label> &nbsp; <label id="Sin_negrita"> No<input type="radio" name="PAE" value="No" onclick="PrimerFormulario.enfermedad_padecida.disabled = true;" checked> </label> &nbsp;&nbsp;&nbsp;
             <label id="fuente_y_negrita"> Favor indiquela: </label>&nbsp;

             <input type="text" name="enfermedad_padecida" id="ep" class="cajas_formulario" size="45" placeholder="&nbsp;&nbsp;Escriba aqui..." disabled required>


     </fieldset>  <br>


    <fieldset id="fiel_ses">

       <legend> <label id="legend_ses">  &nbsp; Datos de aprobaci&oacute;n </label> <font color="#3CB371">* </font> &nbsp; </legend> <br> 


             <label id="fuente_y_negrita"> Escuela de procedencia: </label> <input type="text" name="Escuela_de_procedencia" id="escpro" size="65" class="cajas_formulario" placeholder="&nbsp;&nbsp;Si es nuevo-nuevo ingreso, colocar: ''Sin procedencia''" maxlength="70">&nbsp;&nbsp;&nbsp;
             <label id="fuente_y_negrita"> Calificacion obtenida: </label> <input type="text" name="Calificacion_obtenida" id="cob" size="2" class="cajas_formulario" title="Ej: A" maxlength="2">&nbsp;&nbsp;&nbsp;
            
            
             <label id="fuente_y_negrita"> Grado cursante: </label>
            
            <!--AQUI COMIENZA LA SELECCION DEL GRADO CURSANTE-->
             
             <select name="GradoCursante" class="cajas_formulario">
             <option selected>&nbsp;Seleccione </option>
             <option value="Primero"> Primero </option>
             <option value="Segundo"> Segundo </option>
             <option value="Tercero"> Tercero </option>
             <option value="Cuarto"> Cuarto </option>
             <option value="Quinto"> Quinto </option>
             <option value="Sexto"> Sexto </option>
             </select>  <br> <br>
            
            <label id="fuente_y_negrita"> Otros hermanos: </label> &nbsp;&nbsp; <label id="Sin_negrita"> Si<input type="radio" name="Otros_hermanos" size="1" value="Si"> </label> &nbsp; <label id="Sin_negrita"> No<input type="radio" name="Otros_hermanos" size="1" value="No"> </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label id="fuente_y_negrita"> <b> Grados: </b> </label>&nbsp;&nbsp;<label id="Sin_negrita">1ero<input type="checkbox" name="Primero" value="Primero" size="20"> </label> &nbsp; <label id="Sin_negrita"> 2do<input type="checkbox" name="Segundo" value="Segundo" size="20"> </label> &nbsp; <label id="Sin_negrita"> 3ero<input type="checkbox" name="Tercero" value="Tercero" size="20"> </label> &nbsp; <label id="Sin_negrita"> 4to<input type="checkbox" name="Cuarto" value="Cuarto" size="20"> </label> &nbsp; <label id="Sin_negrita"> 5to<input type="checkbox" name="Quinto" value="Quinto" size="20"> </label> &nbsp; <label id="Sin_negrita"> 6to<input type="checkbox" name="Sexto" value="Sexto" size="20"> </label>
           
    	
    </fieldset>  <br>

    <fieldset id="fiel_ses">

      <legend> <label id="legend_ses"> &nbsp; Representante Legal </label> <font color="#3CB371">* </font> &nbsp;</legend> <br> 

            <label id="fuente_y_negrita"> Apellidos: </label> <input type="text" name="Apellidos_Repre" class="cajas_formulario" id="apere" maxlength="30">&nbsp;&nbsp;&nbsp;
            <label id="fuente_y_negrita"> Nombres: </label> <input type="text" name="Nombres_Repre" class="cajas_formulario" id="nomre" maxlength="30">&nbsp;&nbsp;&nbsp;&nbsp;
            <label id="fuente_y_negrita"> C.I: </label> <input type="text" name="C_I" class="cajas_formulario" id="cere" maxlength="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <label id="fuente_y_negrita"> Sexo: </label> &nbsp; <label id="Sin_negrita"> M<input type="radio" name="sexo_repre" value="Masculino"> </label> &nbsp; <label id="Sin_negrita"> F<input type="radio" name="sexo_repre" value="Femenino"> </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label id="fuente_y_negrita"> Nacionalidad: </label> &nbsp;&nbsp; <label id="Sin_negrita"> V<input type="radio" name="Nacionalidad_Repre" value="Venezolana"> </label> &nbsp;&nbsp; <label id="Sin_negrita"> E<input type="radio" name="Nacionalidad_Repre" value="Extranjero"> </label> <br> <br>
            <label id="fuente_y_negrita"> Lugar de nacimiento: </label> <input type="text" name="Lugar_de_nacimiento_Repre" size="59" class="cajas_formulario" id="lnre" maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <label id="fuente_y_negrita"> Fecha de nacimiento: </label> &nbsp;
            
            <select style="width: 75px; margin-left: 0px;" class="cajas_formulario" name="dia_rp" required>
	         				<option value="">Dia</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option></select>

						<select style="width: 120px;" class="cajas_formulario" name="mes_rp" required><option value="0" >Mes</option>
							<option value="1">Enero</option>
							<option value="2">Febrero</option>
							<option value="3">Marzo</option>
							<option value="4">Abril</option>
							<option value="5">Mayo</option>
							<option value="6">Junio</option>
							<option value="7">Julio</option>
							<option value="8">Agosto</option>
							<option value="9">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option></select>

						<select style="width: 80px;" class="cajas_formulario" name="año_rp" required>
							<option value="">A&ntilde;o</option>
							<option value="2012" >2012</option>
							<option value="2011" >2011</option>
							<option value="2010" >2010</option>
							<option value="2009" >2009</option>
							<option value="2008" >2008</option>
							<option value="2007" >2007</option>
							<option value="2006" >2006</option>
							<option value="2005" >2005</option>
							<option value="2004" >2004</option>
							<option value="2003" >2003</option>
							<option value="2002" >2002</option>
							<option value="2001" >2001</option>
							<option value="2000" >2000</option>
							<option value="1999" >1999</option>
							<option value="1998" >1998</option>
							<option value="1997" >1997</option>
							<option value="1996" >1996</option>
							<option value="1995" >1995</option>
							<option value="1994" >1994</option>
							<option value="1993" >1993</option>
							<option value="1992" >1992</option>
							<option value="1991" >1991</option>
							<option value="1990" >1990</option>
							<option value="1989" >1989</option>
							<option value="1988" >1988</option>
							<option value="1987" >1987</option>
							<option value="1986" >1986</option>
							<option value="1985" >1985</option>
							<option value="1984" >1984</option>
							<option value="1983" >1983</option>
							<option value="1982" >1982</option>
							<option value="1981" >1981</option>
							<option value="1980" >1980</option>
							<option value="1979" >1979</option>
							<option value="1978" >1978</option>
							<option value="1977" >1977</option>
							<option value="1976" >1976</option>
							<option value="1975" >1975</option>
							<option value="1974" >1974</option>
							<option value="1973" >1973</option>
							<option value="1972" >1972</option>
							<option value="1971" >1971</option>
							<option value="1970" >1970</option>
							<option value="1969" >1969</option>
							<option value="1968" >1968</option>
							<option value="1967" >1967</option>
							<option value="1966" >1966</option>
							<option value="1965" >1965</option>
							<option value="1964" >1964</option>
							<option value="1963" >1963</option>
							<option value="1962" >1962</option>
							<option value="1961" >1961</option>
							<option value="1960" >1960</option>
							<option value="1959" >1959</option>
							<option value="1958" >1958</option>
							<option value="1957" >1957</option>
							<option value="1956" >1956</option>
							<option value="1955" >1955</option>
							<option value="1954" >1954</option>
							<option value="1953" >1953</option>
							<option value="1952" >1952</option>
							<option value="1951" >1951</option>
							<option value="1950" >1950</option>
							<option value="1949" >1949</option>
							<option value="1948" >1948</option>
							<option value="1947" >1947</option>
							<option value="1946" >1946</option>
							<option value="1945" >1945</option>
							<option value="1944" >1944</option>
							<option value="1943" >1943</option>
							<option value="1942" >1942</option>
							<option value="1941" >1941</option>
							<option value="1940" >1940</option>
							<option value="1939" >1939</option>
							<option value="1938" >1938</option>
							<option value="1937" >1937</option>
							<option value="1936" >1936</option>
							<option value="1935" >1935</option>
							<option value="1934" >1934</option>
							<option value="1933" >1933</option>
							<option value="1932" >1932</option>
							<option value="1931" >1931</option>
							<option value="1930" >1930</option>
							<option value="1929" >1929</option>
							<option value="1928" >1928</option>
							<option value="1927" >1927</option>
							<option value="1926" >1926</option>
							<option value="1925" >1925</option>
							<option value="1924" >1924</option>
							<option value="1923" >1923</option>
							<option value="1922" >1922</option>
							<option value="1921" >1921</option>
							<option value="1920" >1920</option>
							<option value="1919" >1919</option>
							<option value="1918" >1918</option>
							<option value="1917" >1917</option>
							<option value="1916" >1916</option>
							<option value="1915" >1915</option>
							<option value="1914" >1914</option>
							<option value="1913" >1913</option>
							<option value="1912" >1912</option>
							<option value="1911" >1911</option>
							<option value="1910" >1910</option></select>

            <!--AQUI COMIENZA LA SELECCION DEL DIA-->
             
             &nbsp;&nbsp;
             
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
			    
          <label id="fuente_y_negrita"> Edad: </label>
             
             <!--AQUI COMIENZA LA SELECCION DE LA EDAD-->
             
             <select name="Edad_Repre" class="cajas_formulario">
             <option selected>&nbsp;Seleccione </option>
             <option value="18"> 18 </option>
             <option value="19"> 19 </option>
             <option value="20"> 20 </option>
             <option value="21"> 21 </option>
             <option value="22"> 22 </option>
             <option value="23"> 23 </option>
             <option value="24"> 24 </option>
             <option value="25"> 25 </option>
             <option value="26"> 26 </option>
             <option value="27"> 27 </option>
             <option value="28"> 28 </option>
             <option value="29"> 29 </option>
             <option value="30"> 30 </option>
             <option value="31"> 31 </option>
             <option value="32"> 32 </option>
             <option value="33"> 33 </option>
             <option value="34"> 34 </option>
             <option value="35"> 35 </option>
             <option value="36"> 36 </option>
             <option value="37"> 37 </option>
             <option value="38"> 38 </option>
             <option value="39"> 39 </option>
             <option value="40"> 40 </option>
             <option value="41"> 41 </option>
             <option value="42"> 42 </option>
             <option value="43"> 43 </option>
             <option value="44"> 44 </option>
             <option value="45"> 45 </option>
             <option value="46"> 46 </option>
             <option value="47"> 47 </option>
             <option value="48"> 48 </option>
             <option value="49"> 49 </option>
             <option value="50"> 50 </option>
             <option value="51"> 51 </option>
             <option value="52"> 52 </option>
             <option value="53"> 53 </option>
             <option value="54"> 54 </option>
             <option value="55"> 55 </option>
             <option value="56"> 56 </option>
             <option value="57"> 57 </option>
             <option value="58"> 58 </option>
             <option value="59"> 59 </option>
             <option value="60"> 60 </option>
             <option value="61"> 61 </option>
             <option value="62"> 62 </option>
             <option value="63"> 63 </option>
             <option value="64"> 64 </option>
             <option value="65"> 65 </option>
             <option value="66"> 66 </option>
             <option value="67"> 67 </option>
             <option value="68"> 68 </option>
             <option value="69"> 69 </option>
             <option value="70"> 70 </option>
             <option value="71"> 71 </option>
             <option value="72"> 72 </option>
             <option value="73"> 73 </option>
             <option value="74"> 74 </option>
             <option value="75"> 75 </option>
             <option value="76"> 76 </option>
             <option value="77"> 77 </option>
             <option value="78"> 78 </option>
             <option value="79"> 79 </option>
             <option value="80"> 80 </option>
             <option value="81"> 81 </option>
             <option value="82"> 82 </option>
             <option value="83"> 83 </option>
             <option value="84"> 84 </option>
             <option value="85"> 85 </option>
             <option value="86"> 86 </option>
             <option value="87"> 87 </option>
             <option value="88"> 88 </option>
             <option value="89"> 89 </option>
             <option value="90"> 90 </option>
             <option value="91"> 91 </option>
             <option value="92"> 92 </option>
             <option value="93"> 93 </option>
             <option value="94"> 94 </option>
             <option value="95"> 95 </option>
             <option value="96"> 96 </option>
             <option value="97"> 97 </option>
             <option value="98"> 98 </option>
             <option value="99"> 99 </option>
             <option value="100"> 100 </option>
             </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> <br>
			 
	     <label id="fuente_y_negrita"> Parentesco: </label>
             
             <!--AQUI COMIENZA LA SELECCION DEL PARENTESCO-->
             
             <select name="Parentesco" class="cajas_formulario">
             <option selected>&nbsp;&nbsp;Seleccione </option>
             <option value="Madre"> Madre </option>
             <option value="Padre"> Padre </option>
             <option value="AbueloPa"> Abuelo(a) Paterno  </option>
             <option value="AbueloMa"> Abuelo(a) Materno  </option>
             <option value="TioPa"> T&iacute;o(a) Paterno </option>
             <option value="TioMa"> T&iacute;o(a) Materno </option>
             <option value="Padrino"> Padrino </option>
             <option value="Madrina"> Madrina </option>
             </select>&nbsp;&nbsp;&nbsp;&nbsp;
             
            <label id="fuente_y_negrita"> Profesion u oficio: </label> <input type="text" name="Profesion_u_oficio" class="cajas_formulario" size="30" id="profre" maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;
            <label id="fuente_y_negrita"> Telefonos: </label>&nbsp;&nbsp;&nbsp;
            
            <!--AQUI COMIENZA LA SELECCION DEL CODIGO DEL NUMERO TELEFONICO LOCAL-->
                   
                   <select name="TelefonoRepreLocal" class="cajas_formulario">
                   <option selected> &nbsp; Local &nbsp;</option>
                   <option value="0261"> 0261 </option>
                   <option value="0262"> 0262 </option>
                   <option value="0263"> 0263 </option>
                   <option value="0264"> 0264 </option>
                   <option value="0265"> 0265 </option>
                   <option value="0266"> 0266 </option>
                   <option value="0267"> 0267 </option>
                   <option value="0271"> 0271 </option>
                   <option value="0275"> 0275 </option>
                   </select>
                   
                   <input type="text" name="Telefono_Repre_Local_CampText" size="8" class="cajas_formulario" id="telefono1" maxlength="7"> &nbsp;&nbsp;&nbsp;&nbsp;
    
            <!--AQUI COMIENZA LA SELECCION DEL CODIGO DEL NUMERO TELEFONICO CELULAR-->
                   
                   <select name="TelefonoRepreCelular" class="cajas_formulario">
                   <option selected> &nbsp; Celular &nbsp; </option>
                   <option value="0416"> 0416 </option>
                   <option value="0426"> 0426 </option>
                   <option value="0414"> 0414 </option>
                   <option value="0424"> 0424 </option>
                   <option value="0412"> 0412 </option>
                   </select>
                   
                   <input type="text" name="Telefono_Repre_Celular_CampText" size="8" class="cajas_formulario" id="telefono2" maxlength="7"> <br> <br>
                   
            <label id="fuente_y_negrita"> Direcci&oacute;n del hogar o habitacion:  </label> <input type="text" name="Direccion_del_hogar" size="95" class="cajas_formulario" id="direccion" maxlength="150">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        &nbsp;&nbsp;
	       

            <input type="submit" value="Continuar" id="BotonSiguiente"> 

   	    </form>

    </fieldset>

</body>

</html>