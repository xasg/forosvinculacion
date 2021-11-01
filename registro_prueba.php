 <?php
   include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $entidad=view_entidad();
   $region=view_region();
   $foro=view_foro(); 
 ?> 
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
         

   <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <img src="img/Logo_b.png" class="img-fluid" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto" style="color:#fff">
              <li class="nav-item active">
                <a class="nav-link" href="./">INICIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">CALENDARIO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">MEMORIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">REGISTRO</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link"  href="#">CONTACTO</a>
              </li>
            </ul>
        </div>
   </nav> 



<!--
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <video class="video-fluid z-depth-1 d-block w-100" autoplay loop muted alt="First slide">
       <source src="img/Lobby 1080.mp4" type="video/mp4" />
      </video>-->
      <!--apate <img class="d-block w-100" src="img/Auditorios.png" alt="First slide">-->
      <!--<button type="button" class="btn btn-light texto-encima">Light</button>
      <button type="button" class="btn btn-light centrado">Light</button>
    </div>    
  </div>
</div>-->


         
               <div class="container">
                     <div class="row">
                            <form action="update_registro_prueba.php" method="POST">                                  
                                 <!--Datos personales-->
                                 <div class="row">

                                    <div class="col-xl-12">
                                       <br><br>
                                       <h4>Datos personales</h4> 
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Nombre(s):</label>
                                          <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-8">
                                       <div class="form-group"> 
                                          <label>Apellidos:</label>
                                          <input type="text" class="form-control" name="apellidos" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>                                   
                                 </div>

                                 <!-- Datos personales-->
                                 <div class="row">
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Correo electrónico:</label>
                                          <input type="email" class="form-control" name="email" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Teléfono institucional</label>
                                          <input type="text" class="form-control" name="tel_ins">
                                       </div>
                                    </div>
                                    <div class="col-xl-1">
                                       <div class="form-group"> 
                                          <label for="nombre">Ext.</label>
                                          <input type="text" class="form-control" name="ext">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Móvil</label>
                                          <input type="text" class="form-control" name="tel_movil" required="">
                                       </div>
                                    </div>
                                 </div> 
                                 <div class="row">
                                   <div class="col-md-12"><br>
                                       <h4>Datos institucionales</h4>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label for="control1">Región</label> 
                                          <select class="form-control" name="region" id="region" required="">
                                             <option value="">Seleccionar región</option>
                                             <?php while($row = $region->fetch_assoc()) { ?>
                                             <option value="<?php echo $row['id_cat_region']; ?>"><?php echo $row['dt_nombre_region']; ?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">                
                                          <label for="control">Entidad Federativa</label> 
                                          <select class="form-control" id="entidad" name="entidad" required="">
                                          </select>
                                       </div>
                                    </div>                               
                                
                                    <div class="col-xl-6">
                                       <label>Organización de procedencia</label><br>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_ies" value="ies" required="">
                                             <label class="form-check-label">IES</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="publico" required="">
                                             <label class="form-check-label">Sector público</label>
                                          </div>                                         
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="productivo" required="">
                                             <label class="form-check-label">Sector productivo</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="general" required="">
                                             <label class="form-check-label">Población en general</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>                                 
                                 <div class="row" id="org" style="display:none;">
                                    <div class="col-md-8" >
                                       <div class="form-group"> 
                                          <label>Organización a la que pertenece</label>
                                          <input type="text" class="form-control" name="nom_org2" onChange="conMayusculas(this)">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row" id="sel_ies" style="display:none;">
                                    <div class="col-md-8">
                                       <div class="form-group">                
                                          <label for="control">Seleccionar IES</label> 
                                          <select class="form-control" name="nom_org" id="ies">
                                          </select>Si no se encuentra su IES en el catálogo, solicitar que se agregue escribiendo el nombre de la entidad y IES al correo <strong>rmendez@fese.mx</strong>
                                       </div>
                                    </div>
                                   <div class="col-xl-4">
                                       <div class="form-group">
                                          <label for="control1">Tipo:</label> 
                                          <select class="form-control" name="cargo" onChange="mostrar(this.value);">
                                             <option value="">Selecciona tu cargo</option>
                                             <option value="Estudiante">Estudiante</option>
                                             <option value="Egresado">Egresado</option>
                                             <option value="Docente">Docente</option>
                                             <option value="Investigador">Investigador</option>
                                              <option value="Administrativo">Administrativo</option>
                                             <option value="Jefe de Unidad">Jefe de Unidad</option>
                                             <option value="Rector/Director de IES">Rector/Director de IES</option>
                                             <option value="otro">Otro:</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col-xl-4" id="otro" style="display:none;">
                                       <div class="form-group"> 
                                          <label>Otro cargo:</label>
                                          <input type="text" class="form-control" name="otro_cargo" onChange="conMayusculas(this)">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /Datos Institucionales-->
                                 <!-- Datos de participación-->
                                 <div class="row">
                                    <div class="col-xl-12 pad"><br>
                                       <h4>Confirma tu participación en mesas de trabajo</h4>
                                    </div>

                                     <div class="col-md-12">                                       
                                        <!--<div class="sec-title-btn">
                                              <a class="thm-btn2 lft-icon" href="docs/programa.pdf"><i class="flaticon-download"></i>Descargar Programa<span></span></a>
                                        </div>-->
                                       <p><strong>Elija el día y las mesas de trabajo que más le interesen</strong></p>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <!--<div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" value="no" required="">
                                             <label class="form-check-label">No participaré</label>
                                          </div>-->
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id1" value="dia1" required="">
                                             <label class="form-check-label">Día 1. Emprendimiento Asociativo y Educación Dual</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id2" value="dia2" required="">
                                             <label class="form-check-label">Día 2. Reorientación del servicio social</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id3" value="ambos" required="">
                                             <label class="form-check-label">Ambos días</label>
                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="row" id="divid1" style="display:none;">
                                          <h4>Dia 1. Emprendimiento Asociativo y Educación Dual<br></h4>
                                          <div class="col-md-12" style="background-color: #ffeeba;">
                                            <div id="Estudiante" style="display: none;"><br>
                                                 <p>* Para poder participar deben ser estudiantes o egresados de educación dual<br>* Estudiantes y egresados participantes en programas de emprendimiento asociativo</p>
                                             </div>
                                             <div id="Egresado" style="display: none;"><br>
                                                 <p>* Para poder participar deben ser estudiantes o egresados de educación dual<br>* Estudiantes y egresados participantes en programas de emprendimiento asociativo</p>
                                             </div>
                                             <div id="Docente" style="display: none;"><br>
                                                 <p>*Para poder participar debes ser una IES con experiencia en educación dual: titulares, responsables académicos, de vinculación y docentes<br>* IES con experiencia en emprendimiento: titulares, responsables académicos, de vinculación, docentes y operadores de programas de emprendimiento</p>
                                             </div>

                                             <div id="publico" style="display: none;"><br>
                                             <p>*Para poder participar debes ser un representantes de autoridad educativa estatal, CONACyT, SEDECO, STPS.<br>* Autoridades educativas y representantes estatales de CONACYT, SEDECO, IMJUVE, INAES,  INPI, IMPI, INMUJERES, o a fin, e instancias de vinculación y participación social.
                                             </p>  
                                             </div>
                                             <div id="productivo" style="display: none;"><br>
                                             <p>* Para poder participar debes ser un representantes de unidades económicas y de organizaciones sociales y empresariales.
                                             </div>
                                             <div id="general" style="display: none;"><br>
                                             <p>* padres de familia.</p>
                                             </div>
                                          </div>
                                           <table class="table table-striped table-bordered">
                                             <thead>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">
                                                      <p>10:00 – 12:00</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario1"  value="01">
                                                         <label class="form-check-label"><strong>Mesa de trabajo de Emprendimiento Asociativo</strong><br>Propósito:Analizar el documento “Marco General para el Emprendimiento Asociativo para la Educación Superior” con aportaciones comentarios y observaciones de los participantes..                             
                                                         </label>
                                                      </div>
                                                      <br>                                                          
                                                   </td> 
                                                </tr> 

                                                <tr>
                                                   <th scope="row">
                                                      <p>12:10 – 15:00</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario2" value="02">
                                                         <label class="form-check-label"><strong>Mesa de trabajo de Educación dual</strong><br> Propósito:Analizar el documento “Marco General para la Educación Dual del Tipo Superior” con aportaciones comentarios y observaciones de los participantes.</label>
                                                      </div>
                                                   </td>                                                    
                                                </tr>                                                
                                             </tbody>
                                          </table>

                                    <div class="col-md-12">
                                       <div class="form-check">
                                         <input class="form-check-input" type="checkbox" value="1" required >
                                         <label class="form-check-label" for="flexCheckDefault">
                                           He leido los requerimientos y cumplo con el perfil o tengo experiencia en Educación Dual y/o Emprendimiento asociativo
                                         </label>
                                       </div>
                                    </div>  
                                 </div>


                                 <div class="row" id="divid2" style="display:none;">
                                          <div class="col-md-12">
                                             <h4>Día 2. Reorientación del servicio social</h4>
                                          </div>

                                           <table class="table table-striped table-bordered">
                                             <thead>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <!--<th scope="row">
                                                      <p>10:00 – 12:00</p>
                                                   </th>-->
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1"  value="03">
                                                         <label class="form-check-label">
                                                            <strong>Mesa 1:</strong>Situación actual del servicio social. Diagnóstico y posibilidades de cambio
                                                         </label><br>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1" value="04" >
                                                         <label class="form-check-label">
                                                           <strong>Mesa 2:</strong> Principios fundamentos, definición, objetivos y características del servicio social con enfoque comunitario y participación social con perspectiva ética 
                                                         </label>
                                                      </div>
                                                   </td>
                                                   <td table-primary>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1" value="05" >
                                                         <label class="form-check-label">
                                                             <strong>Mesa  3:</strong> El servicio social más allá de un requisito previo a la titulación, aplicación desde el primer año de estudios para todo el estudiantado.
                                                             </label>
                                                      </div>
                                                   </td>
                                                   <td table-primary>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1" value="06" >
                                                         <label class="form-check-label">
                                                             <strong>Mesa  4:</strong> El marco normativo del servicio social, análisis y propuestas de modificación
                                                             </label>
                                                      </div>
                                                   </td>
                                                   <!--<td style="background-color: #9abfb7; color:#fff;">
                                                     <div id="dia2_hora" style="display:none;"> <br>
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_emp_horario1" value="Asistente general">
                                                         <label class="form-check-label"><strong>Asistente general</strong></label>
                                                      </div><br><br>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_emp_horario1" value="expositor">
                                                         <label class="form-check-label"><strong>Expositor</strong></label>
                                                      </div>
                                                      </div>
                                                   </td>-->
                                                </tr>          
                                             </tbody>
                                          </table>                                    
                                   
                                 </div>

                                 <div class="row" id="divid3" style="display:none;">
                                          <div class="col-md-12">
                                             <h4>Ambos<br></h4>
                                          </div>
                                 </div>

                                  <div class="row">
                                  <div class="col-xl-12">
                                    <br>
                                  </div>  
                                  <div class="col-xl-4">
                                  </div>  
                                  <div class="col-xl-4">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg">Guardar</button><br><br>
                                    <input type="hidden" name="id_usuario" value="valor1" />
                                  </div>
                                  </div>
                              </form>
                     </div>
                  </div>
         </section>



            <footer style="background-color: #205b4e;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <a href="index.html" title=""><br>
                                            <img src="img/Logo_b.png" class="img-fluid" alt="Responsive image">
                                        </a>
                                    </h1>
                                </div>
                                <p class="mb-0" style="color: #fff">Contacto:</p>
                                <p class="mb-0" style="color: #fff">forosdevinculacion@fese.mx</p>
                            </div>
                            <div class="footer-bottom d-flex flex-wrap justify-content-between w-100">                              
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- Footer -->
      <!-- Main Wrapper -->
      <script src="js/bootstrap.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="js/bootstrap-multiselect.js"></script>
      <script language="JavaScript"> 
         function conMayusculas(field) 
         { 
             field.value = field.value.toUpperCase() 
         }   
      </script>
      <script>
         document.getElementById('ies').addEventListener('change', function() { 
    var style = this.value == "OTRA" ? 'block' : 'none'; 
    document.getElementById('otra_ies').style.display = style; 
}); 
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#dia2').multiselect();
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function(){
           $("#region").change(function () {          
             $("#region option:selected").each(function () {
               id_cat_region = $(this).val();
               $.post("includes/getDia.php", { id_cat_region: id_cat_region }, function(data){
                 $("#dia").html(data);
               });            
             });
           })
         });      
      </script>
      <script language="javascript">
         $(document).ready(function(){
           $("#region").change(function () {          
             $("#region option:selected").each(function () {
               id_cat_region = $(this).val();
               $.post("includes/getRegion.php", { id_cat_region: id_cat_region }, function(data){
                 $("#entidad").html(data);
               });            
             });
           })
         });      
      </script>
      <script language="javascript">
         $(document).ready(function(){
           $("#entidad").change(function () {          
             $("#entidad option:selected").each(function () {
               id_cat_entidad = $(this).val();
               $.post("includes/getIes.php", { id_cat_entidad: id_cat_entidad }, function(data){
                 $("#ies").html(data);
               });            
             });
           })
         });      
      </script>
      <!--
         ies
         social
         internacional
         publico
         privado
         -->
      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="ies"){
                 $("#sel_ies").show();
                 $("#org").hide();
             } else if (valor == "publico") {
                 $("#sel_ies").hide();
                 $("#org").show();
             }  else if (valor == "internacional") {
                 $("#sel_ies").hide();
                 $("#org").show();
             }  else if (valor == "productivo") {
                 $("#sel_ies").hide();
                 $("#org").show();
             } else if (valor == "general") {
                 $("#sel_ies").hide();
                 $("#org").hide();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>

      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="publico"){
                 $("#publico").show();
                 $("#productivo").hide();
                 $("#general").hide();
             }  else if (valor == "productivo") {
                 $("#publico").hide();
                 $("#general").hide();
                 $("#productivo").show();
             } else if (valor == "ies") {
                 $("#publico").hide();
                 $("#general").hide();
                 $("#productivo").hide();
             } else if (valor == "general") {
                 $("#productivo").hide();
                 $("#publico").hide();
                 $("#general").show();
             }  else { 
                 // Otra cosa
             }
         });
         })
      </script>      
      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="dia1"){
                 $("#divid1").show();
                 $("#divid2").hide();
                 $("#divid3").hide();
             } else if (valor == "dia2") {                 
                 $("#divid2").show();
                 $("#divid1").hide();
                 $("#divid3").hide();
             } else if (valor == "ambos") {                 
                 $("#divid1").show();
                 $("#divid2").show();
                 $("#divid3").hide();
             } else if (valor == "no") {                 
                 $("#divid3").hide();
                 $("#divid1").hide();
                 $("#divid2").hide();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>
      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="01"){
                 $("#tipo_hora1").show();
             }  else { 
                 // Otra cosa
             }
         });
         })
      </script>

      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="02"){
                 $("#tipo_hora2").show();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>



      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="03"){
                 $("#dia2_hora").show();
             } else if (valor == "04") {
                 $("#dia2_hora").show();
             }  else if (valor == "05") {
                  $("#dia2_hora").show();
             }  else if (valor == "06") {
                  $("#dia2_hora").show();
             }  else { 
                 // Otra cosa
             }
         });
         })
      </script>

 <script type="text/javascript">
         function mostrar(id) {
             if (id == "otro") {
                 $("#otro").show();
             }
         }
      </script>

<script type="text/javascript">
function mostrar(id) {
    if (id == "Estudiante") {
        $("#Estudiante").show();
        $("#Egresado").hide();
        $("#Docente").hide();
    }
    if (id == "Egresado") {
        $("#Estudiante").hide();
        $("#Egresado").show();
        $("#Docente").hide();
    }
    if (id == "Docente") {
        $("#Estudiante").hide();
        $("#Egresado").hide();
        $("#Docente").show();
    }
    if (id == "Investigador") {
        $("#Estudiante").hide();
        $("#Egresado").hide();
        $("#Docente").show();
    }
    if (id == "Administrativo") {
        $("#Estudiante").hide();
        $("#Egresado").hide();
        $("#Docente").show();
    }
    if (id == "Jefe de Unidad") {
        $("#Estudiante").hide();
        $("#Egresado").hide();
        $("#Docente").show();
    }
    if (id == "Rector/Director de IES") {
        $("#Estudiante").hide();
        $("#Egresado").hide();
        $("#Docente").show();
    } if (id == "otro") {
                 $("#otro").show();
                 $("#Estudiante").hide();
                 $("#Egresado").hide();
                 $("#Docente").hide();
    }
}
</script>
**/
   </body>
</html>