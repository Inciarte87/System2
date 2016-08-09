<html>
    <head>   
  
  <style>
  
  #estilo{
    font-family: Arial, Helvetica;
    text-align:center;
  }

  .Body_Segundo_Formulario{
    background-repeat:;
    background-size: 50px;
    background-position:center;
    background-attachment:fixed
  }
  
  #fuente_y_negrita{
    font-family:arial;
    font-weight:bold;
  }

  #fuente_sin_negrita{
    font-family:arial;
    font-size: 15;
  }

  .fuente_y_negrita_2{
    font-family:arial;
    font-weight:bold;
    text-align: center;
  }

  #fiel_ses{  
    border: 2px solid #C0C0C0;
    border-radius: 1.5em 1.5em 1.5em 1.5em;
  }

  #legend_ses{
    font-family:arial,verdana;
    font-weight: bold;
    font-size: 20;
    color:red;
  }


  .cajas_formulario{
    border-radius: 0.9em 0.9em 0.9em 0.9em;
    box-shadow: inset 0px 0px 12px 0px #C0C0C0;
    height: 25;
    background-color: white;
    border-color: ;
  }

  #Sin_negrita{
    font-weight:normal;
    font-family: arial;
  }


  .Boton_Guardar{
    font-family: arial;
    color: white;
    height: 4%;
    width:8%;
    background-color:red;
    font-weight: bold;
    border-radius: 0.8em;
  }

  .Bord_tab_D_present{
    border-radius: 0.9em;
  }

  .CV1{
    border-radius: 0.0em 0.9em 0.0em 0.0em;
  }

  .CV2{
    border-radius: 0.0em 0.0em 0.9em 0.0em;
  }

  .PD1{
    border-radius: 0.9em 0.0em 0.0em 0.0em;
  }

  .PD2{
    border-radius: 0.0em 0.0em 0.0em 0.9em;
  }


  </style>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>


  
  <script>
      
      window.onload=function () {
    document.getElementById("Guardar").onclick=validar2;
      }
  </script>
  
  
  
  </head> 
    
    <body background="Img/Logo_escuela.jpg" class="Body_Segundo_Formulario">

            <fieldset id="fiel_ses">

                <legend> <label id="legend_ses">  &nbsp;Datos relativos al aspecto familiar </label> <font color="#3CB371">* </font>&nbsp; </legend> <br>

                   <form method="post" action="Guardar2.php" name="SegundoFormulario">
                
                   <label id="fuente_y_negrita"> Apellidos y Nombres de la Madre: </label> <input type="text" name="Apellido_Y_Nombres_Madre" id="apenomad" size="65" class="cajas_formulario" autofocus="" maxlength="70">&nbsp;&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> C.I: </label> <input type="text" name="Cedula_Madre" class="cajas_formulario" id="cedma" maxlength="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> Nacionalidad: </label>&nbsp; <label id="Sin_negrita"> V<input type="radio" name="Nacionalidad_Madre" value="Venezolana"> </label> &nbsp; <label id="Sin_negrita"> E<input type="radio" name="Nacionalidad_Madre" value="Extranjero"> </label> <br> <br>
                   <label id="fuente_y_negrita"> Lugar de nacimiento: </label> <input type="text" name="Lugar_Nacimiento_Madre" size="30" class="cajas_formulario" id="lnma" maxlength="50">&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> Profesion u oficio: </label> <input type="text" name="Profesion_U_Oficio" size="35" class="cajas_formulario" id="poma" maxlength="50"> <br>

                   <font color="black">
                   _______________________________________________________________________________________________________________________________________________________
                   
                   </font>  <br> <br>

                   <label id="fuente_y_negrita"> Apellidos y Nombres del Padre: </label> <input type="text" name="Apellidos_Y_Nombres_Padre" size="65" class="cajas_formulario" 
                   id="apenompa" maxlength="70">&nbsp;&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> C.I: </label> <input type="text" name="Cedula_Padre" class="cajas_formulario" id="cepa" maxlength="10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> Nacionalidad: </label>&nbsp;  <label id="Sin_negrita"> V<input type="radio" name="Nacionalidad_Padre" value="Venezolana"> </label> &nbsp; <label id="Sin_negrita"> E<input type="radio" name="Nacionalidad_Padre" value="Extranjero"> </label> <br> <br>    
                   

                   <label id="fuente_y_negrita"> Lugar de nacimiento: </label> <input type="text" name="Lugar_Nacimiento_Padre" size="33" class="cajas_formulario" id="lnpa" maxlength="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <label id="fuente_y_negrita"> Numeros telefonicos: </label>&nbsp;&nbsp;&nbsp;&nbsp;
      
            
            <!--AQUI COMIENZA LA SELECCION DEL CODIGO DEL NUMERO TELEFONICO LOCAL-->
                   
                   <select name="Telefono_Padre_Local" class="cajas_formulario">
                   <option selected>&nbsp; Local &nbsp; </option>
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
                   
                   <input type="text" name="Telefono_Padre_Local_CampText" size="8" class="cajas_formulario" id="tlf1pa" maxlength="7"> &nbsp;&nbsp;&nbsp;&nbsp;
                   
    
            <!--AQUI COMIENZA LA SELECCION DEL CODIGO DEL NUMERO TELEFONICO CELULAR-->
                   
                   <select name="Telefono_Padre_Celular" class="cajas_formulario">
                   <option selected> &nbsp; Celular &nbsp;</option>
                   <option value="0416"> 0416 </option>
                   <option value="0426"> 0426 </option>
                   <option value="0414"> 0414 </option>
                   <option value="0424"> 0424 </option>
                   <option value="0412"> 0412 </option>
                   </select>
                   
                   <input type="text" name="Telefono_Padre_Celular_CampText" size="8" class="cajas_formulario" id="tlf2pa" maxlength="7">
                
        </fieldset>  <br>


        <fieldset id="fiel_ses">  <br>
            
            <legend> <label id="legend_ses"> &nbsp;Documentos Presentados </label> <font color="#3CB371">* </font> &nbsp;</legend>
      
            <table border="1" cellpadding="4" cellspacing="0" align="center" width="99%" class="Bord_tab_D_present">
                
                <tr class="fuente_y_negrita_2">
                    
                    <td class="PD1"> Pre-escolar:</td>
                    <td> 1er grado:</td>
                    <td> 2do grado:</td>
                    <td> 3er grado:</td>
                    <td> 4to grado:</td>
                    <td> 5to grado:</td>
                    <td class="CV1"> 6to grado:</td>
             
                </tr>

                <tr id="fuente_sin_negrita">

                  <td> <input type="checkbox" name="pdn_pres" value="Part. de nacimiento" >  Part. de nacimiento  </td>
                  <td> <input type="checkbox" name="pdn_1" value="Part. de nacimiento"> Part. de nacimiento </td>
                  <td> <input type="checkbox" name="pdn_2" value="Part. de nacimiento"> Part. de nacimiento </td>
                  <td> <input type="checkbox" name="pdn_3" value="Part. de nacimiento"> Part. de nacimiento </td>
                  <td> <input type="checkbox" name="pdn_4" value="Part. de nacimiento"> Part. de nacimiento </td>
                  <td> <input type="checkbox" name="pdn_5" value="Part. de nacimiento"> Part. de nacimiento </td>
                  <td> <input type="checkbox" name="pdn_6" value="Part. de nacimiento"> Part. de nacimiento </td>

                </tr>

                <tr id="fuente_sin_negrita">

                  <td> <input type="checkbox" name="fotcop_cedula_pres" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_1" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_2" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_3" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_4" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_5" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>
                  <td> <input type="checkbox" name="fotcop_cedula_6" value="Fotocopia de la C.I">  Fotocopia de la C.I  </td>

                </tr>

                <tr id="fuente_sin_negrita">

                  <td> <input type="checkbox" name="const_rtiro_pres" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_1" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_2" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_3" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_4" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_5" value="Constacia de retiro">  Constacia de retiro </td>
                  <td> <input type="checkbox" name="const_rtiro_6" value="Constacia de retiro">  Constacia de retiro </td>

                </tr>

                <tr id="fuente_sin_negrita">

                  <td> <input type="checkbox" name="cardio_vas_pres" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_1" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_2" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_3" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_4" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_5" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>
                  <td> <input type="checkbox" name="cardio_vas_6" value="Certfi. Cardivascular">  Certfi. Cardivascular </td>

                </tr>

                <tr id="fuente_sin_negrita">

                  <td> <input type="checkbox" name="cedu_repre_pres" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_1" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_2" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_3" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_4" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_5" value="C.I del representante">  C.I del representante </td>
                  <td> <input type="checkbox" name="cedu_repre_6" value="C.I del representante">  C.I del representante </td>

                </tr>

                <tr id="fuente_sin_negrita">

                  <td class="PD2"> <input type="checkbox" name="carton_vacunas_pres" value="Carton de vacunas">  Carton de vacunas </td>
                  <td> <input type="checkbox" name="carton_vacunas_1" value="Carton de vacunas">  Carton de vacunas </td>
                  <td> <input type="checkbox" name="carton_vacunas_2" value="Carton de vacunas">  Carton de vacunas </td>
                  <td> <input type="checkbox" name="carton_vacunas_3" value="Carton de vacunas">  Carton de vacunas </td>
                  <td> <input type="checkbox" name="carton_vacunas_4" value="Carton de vacunas">  Carton de vacunas </td>
                  <td> <input type="checkbox" name="carton_vacunas_5" value="Carton de vacunas">  Carton de vacunas </td>
                  <td class="CV2"> <input type="checkbox" name="carton_vacunas_6" value="Carton de vacunas">  Carton de vacunas </td>
                  <input type="hidden" name="id_alumno" value="<?php if(isset($id_alumno)) { echo $id_alumno; } ?>" />

                </tr>
    
            </table>   <br>
      
  </fieldset>  <br>
  
    
  <fieldset id="fiel_ses">
        
        <legend> <label id="legend_ses"> &nbsp;Inscripci&oacute;n </label> <font color="#3CB371">* </font> &nbsp;</legend>
       
      <table border="1" bordercolor="" cellpadding="5" cellspacing="0" align="center" width="95%" class="Bord_tab_D_present">   <br>

        <tr>
        
            <td style="border: solid 1px black" id="estilo" class="PD1">
             &nbsp;<b> Salas </b>   
            </td>

            <td style="border: solid 1px black" id="estilo">
             &nbsp;<b> Secci&oacute;n </b>   
            </td>

            <td style="border: solid 1px black" id="estilo">
             &nbsp;<b> Turno </b>   
            </td>
            
            <td style="border: solid 1px black" id="estilo">
                &nbsp;<b> A&ntilde;o escolar </b>
            </td>
            
            <td style="border: solid 1px black" id="estilo">
                &nbsp;<b> Evaluaci&oacute;n </b>
            </td>
            
            <td style="border: solid 1px black" id="estilo" class="CV1">
                &nbsp;&nbsp;&nbsp;<b> Fecha </b>
            </td>
            
        </tr>
        
        <tr id="estilo">
        
            <td style="border: solid 1px black" id="estilo" class="PD2">
              
              <select name="salas_select" class="cajas_formulario">

              <option selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seleccione </option>
              <option value="pre-escolar_3_anos"> Pre-escolar 3 a&nacute;os </option>
              <option value="pre-escolar_4_anos"> Pre-ecolar 4 a&nacute;os </option>
              <option value="pre-escolar_5_anos"> Pre-escolar 5 &nacute;os </option>
              <option value="primer_grado"> Primer grado </option>
              <option value="segundo_grado"> Segundo grado </option>
              <option value="tercer_grado"> Tercer grado </option>
              <option value="cuarto_grado"> Cuarto grado </option>
              <option value="quinto_grado"> Quinto grado </option>
              <option value="sexto_grado"> Sexto grado </option>
              <option value="rp"> RP </option>
              <option value="rp"> RP </option>

              </select>


            </td>


           <td style="border: solid 1px black" id="estilo">
               
           <select name="seccion" class="cajas_formulario">
         
           <option selected>&nbsp;Seleccione&nbsp;</option>
           <option value="A"> A </option>
           <option value="B"> B </option>
           <option value="C"> C </option>
           <option value="D"> D </option>
         
           </select>
         
            </td>


          <td style="border: solid 1px black" id="estilo">
               
           <select name="turno" class="cajas_formulario">
         
           <option selected>&nbsp;Seleccione&nbsp;</option>
           <option value="Matutino"> Matutino </option>
           <option value="Vespertino"> Vespertino </option>
         
           </select>
         
            </td>


            
            <td style="border: solid 1px black" id="estilo">
               
      
            <select name="ano_escolar" class="cajas_formulario">  

            <option selected>&nbsp;&nbsp;Seleccione&nbsp;&nbsp;</option>
            <option value="2013_2014">  2013 - 2014   </option>
            <option value="2014_2015">  2014 - 2015   </option>
            <option value="2015_2016">  2015 - 2016   </option>
            <option value="2016_2017">  2016 - 2017   </option>
            <option value="2017_2018">  2017 - 2018   </option>
            <option value="2018_2019">  2018 - 2019   </option>
            <option value="2019_2020">  2019 - 2020   </option>
            <option value="2020_2021">  2020 - 2021   </option>
            <option value="2021_2022">  2021 - 2022   </option>
            <option value="2022_2023">  2022 - 2023   </option>
            <option value="2023_2024">  2023 - 2024   </option>
            <option value="2024_2025">  2024 - 2025   </option>
            <option value="2025_2026">  2025 - 2026   </option>
            <option value="2026_2027">  2026 - 2027   </option>
            <option value="2027_2028">  2027 - 2028   </option>
            <option value="2028_2029">  2028 - 2029   </option>
            <option value="2029_2030">  2029 - 2030   </option>
            <option value="2030_2031">  2030 - 2031   </option>
            <option value="2031_2032">  2031 - 2032   </option>
            <option value="2032_2033">  2032 - 2033   </option>
            <option value="2033_2034">  2033 - 2034   </option>
            <option value="2034_2035">  2034 - 2035   </option>
            <option value="2035_2036">  2035 - 2036   </option>
            <option value="2036_2037">  2036 - 2037   </option>
            <option value="2037_2038">  2037 - 2038   </option>
            <option value="2038_2039">  2038 - 2039   </option>
            <option value="2039_2040">  2039 - 2040   </option>
            <option value="2040_2041">  2040 - 2041   </option>
            <option value="2041_2042">  2041 - 2042   </option>
            <option value="2042_2043">  2042 - 2043   </option>
            <option value="2043_2044">  2043 - 2044   </option>
            <option value="2044_2045">  2044 - 2045   </option>
            <option value="2045_2046">  2045 - 2046   </option>
            <option value="2046_2047">  2046 - 2047   </option>
            <option value="2047_2048">  2047 - 2048   </option>
            <option value="2048_2049">  2048 - 2049   </option>
            <option value="2049_2050">  2049 - 2050   </option>
            <option value="2050_2051">  2050 - 2051   </option>
            <option value="2051_2052">  2051 - 2052   </option>
            <option value="2052_2053">  2052 - 2053   </option>
            <option value="2053_2054">  2053 - 2054   </option>
            <option value="2054_2055">  2054 - 2055   </option>
            <option value="2055_2056">  2055 - 2056   </option>
            <option value="2056_2057">  2056 - 2057   </option>
            <option value="2057_2058">  2057 - 2058   </option>
            <option value="2058_2059">  2058 - 2059   </option>
            <option value="2059_2060">  2059 - 2060   </option>
            <option value="2060_2061">  2060 - 2061   </option>
            <option value="2061_2062">  2061 - 2062   </option>
            <option value="2062_2063">  2062 - 2063   </option>
            <option value="2063_2064">  2063 - 2064   </option>
            <option value="2064_2065">  2064 - 2065   </option>
            <option value="2065_2066">  2065 - 2066   </option>
            <option value="2066_2067">  2066 - 2067   </option>
            <option value="2068_2069">  2068 - 2069   </option>
            <option value="2069_2070">  2069 - 2070   </option>
            <option value="2071_2072">  2071 - 2072   </option>
            <option value="2072_2073">  2072 - 2073   </option>
            <option value="2073_2074">  2073 - 2074   </option>
            <option value="2074_2075">  2074 - 2075   </option>
            <option value="2075_2076">  2075 - 2076   </option>
            <option value="2076_2077">  2076 - 2077   </option>
            <option value="2077_2078">  2077 - 2078   </option>
            <option value="2078_2079">  2078 - 2079   </option>
            <option value="2079_2080">  2079 - 2080   </option>
            <option value="2080_2081">  2080 - 2081   </option>
            <option value="2081_2082">  2081 - 2082   </option>
            <option value="2082_2083">  2082 - 2083   </option>
            <option value="2083_2084">  2083 - 2084   </option>
            <option value="2084_2085">  2084 - 2085   </option>
            <option value="2085_2086">  2085 - 2086   </option>
            <option value="2086_2087">  2086 - 2087   </option>
            <option value="2087_2088">  2087 - 2088   </option>
            <option value="2088_2089">  2088 - 2089   </option>
            <option value="2089_2090">  2089 - 2090   </option>
            <option value="2090_2091">  2090 - 2091   </option>
            <option value="2091_2092">  2091 - 2092   </option>
            <option value="2092_2093">  2092 - 2093   </option>
            <option value="2093_2094">  2093 - 2094   </option>
            <option value="2094_2095">  2094 - 2095   </option>
            <option value="2095_2096">  2095 - 2096   </option>
            <option value="2096_2097">  2096 - 2097   </option>
            <option value="2097_2098">  2097 - 2098   </option>
            <option value="2098_2099">  2098 - 2099   </option>
            <option value="2100_2101">  2100 - 2101   </option>
            <option value="2101_2102">  2101 - 2102   </option>
            <option value="2102_2103">  2102 - 2103   </option>
            <option value="2103_2104">  2103 - 2104   </option>
            <option value="2104_2105">  2104 - 2105   </option>
            <option value="2105_2106">  2105 - 2106   </option>
            <option value="2106_2107">  2106 - 2107   </option>
            <option value="2107_2108">  2107 - 2108   </option>
            <option value="2108_2109">  2108 - 2109   </option>
            <option value="2109_2110">  2109 - 2110   </option>
            <option value="2110_2111">  2110 - 2111   </option>
            <option value="2111_2112">  2111 - 2112   </option>
            <option value="2112_2113">  2112 - 2113   </option>
            <option value="2113_2114">  2113 - 2114   </option>  
            </select >
      
            </td >

             
            <td style="border: solid 1px black" id="estilo">
               
           <select name="evaluacion" class="cajas_formulario">
         
           <option selected>&nbsp;Seleccione&nbsp;</option>
           <option value="A"> A </option>
           <option value="B"> B </option>
           <option value="C"> C </option>
           <option value="D"> D </option>
           <option value="E"> E </option>
         
           </select>
         
            </td>
            
            <td style="border: solid 1px black" id="estilo" class="CV2">
                <select style="width: 75px; margin-left: 0px;" class="cajas_formulario" name="dia_in" required>
                  <option selected>&nbsp;&nbsp;Dia</option>
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

            <select style="width: 120px;" class="cajas_formulario" name="mes_in" required>
              <option selected>&nbsp;&nbsp;Mes</option>
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

            <select style="width: 80px;" class="cajas_formulario" name="año_in" required>
              <option selected>&nbsp;&nbsp;A&ntilde;o</option>
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
            </td>
           
        </tr>
        
       </table>

       <br>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
    <input type="submit" value="Guardar" id="Guardar" class="Boton_Guardar"> <br>
    
     </form>
    
    </fieldset>
        
    </body>
</html>