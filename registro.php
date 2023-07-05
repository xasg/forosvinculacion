<?php   
  include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $entidad=view_entidad();
   $region=view_region();
   // $foro=view_foro();
   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro</title>
      <link rel="stylesheet" href="assets/css/all.min.css">
      <link rel="stylesheet" href="assets/css/flaticon.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZVPVQSG3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZVPVQSG3M');
</script>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".content").fadeOut(2500);
    },3000);
 
    setTimeout(function() {
        $(".content2").fadeIn(1500);
    },6000);
});
</script>
   </head>
   <body>
      <main>
      <div class="container-fluid mx-0 px-0" style="background-color: #8D203D;">
    	<div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <img alt="Responsive image" class="img-fluid" src="img/logo.png" width="150">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">   </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto" style="width:0px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">
                                INICIO
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                REGISTRO
                            </a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">AÑO</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">2021</a>
                              <a class="dropdown-item" href="dual/">2020</a>
                            </div>
                          </li> -->

                          <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">REGIÓN</a>
                            <div class="dropdown-menu">
                                        <a class="dropdown-item" href="sur_sureste.html">SUR SURESTE</a>
                                        <a class="dropdown-item" href="cdmx.html">CDMX Y ZONA METROPOLITANA</a>
                                        <a class="dropdown-item" href="bajio.html">BAJIO OCCIDENTE</a>
                                        <a class="dropdown-item" href="frontera.html">FRONTERA NORTE</a>
                                        <a class="dropdown-item" href="noroeste.html">NOROESTE</a> 
                            </div>
                          </li>                                                 -->
                    </ul>
                </div>
         </nav>
		</div>
    </div>
    <div class="w-100 pt-121  opc1 position-relative" >
        <img class="img-fluid" src="img/cintillo_header.png" width="100%" style="margin-top: 2%;">
    </div>


         <section>
               <div class="container">
                     <div class="row marg">
                             <form action="update_registro.php" method="POST">                                
                                 <!--Datos personales-->
                                 <div class="row">
                                    <div class="col-xl-12"><br><br>
                                       <!-- <div class="alert alert-warning content">
                                          <a href="#" class="alert-link">El correo que ingresaste no se encuentra registrado. Llena el siguiente formulario</a>
                                       </div> -->
                                       <h4 class="mb-0">
                                          Perfil del participante:
                                       </h4>
                                       <div class="alert alert-secondary" role="alert">
                                          <p>Se prodrán registrar aquellos expertos con más de 5 años operando en áreas de Educación Dual, Emprendimiento Asociativo y programas de impacto de servicio social para el nivel superior
                                          (Instituciones de Educación Superior, Organismos de ls sociedad Civil o Iniciativa privada).</p>
                                       </div>
                                       <h4>Datos personales</h4>
                                       
                                    </div>
                                     <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label for="nombre">Nombre(s):</label>
                                          <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label for="nombre">Apellido paterno:</label>
                                          <input type="text" class="form-control" name="apaterno" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label for="nombre">Apellido materno:</label>
                                          <input type="text" class="form-control" name="amaterno" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                   
                                 </div>                                 
                                 <div class="row">
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label>Correo electrónico:</label>
                                          <input type="email" class="form-control" name="email" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label for="nombre">Teléfono institucional</label>
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
                                          <label for="nombre">Móvil</label>
                                          <input type="text" class="form-control" name="tel_movil" required="">
                                       </div>
                                    </div>
                                 </div>
                                 <!-- /Datos personales-->

                                 <!-- Datos Institucionales-->
                                 <div class="row">
                                    <div class="col-xl-12 pad">
                                       <h4>Datos institucionales</h4>
                                    </div>
                                    <div class="col-xl-3">
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
                                    <div class="col-xl-3">
                                       <div class="form-group">                
                                          <label for="control">Entidad Federativa</label> 
                                          <select class="form-control" id="entidad" name="entidad" required="">
                                          <option value="">Seleccionar la entidad</option>
                                             <?php while($row = $region->fetch_assoc()) { ?>
                                             <option value="<?php echo $row['id_cat_entidad']; ?>"><?php echo $row['nombre_entidad']; ?></option>
                                             <?php } ?>
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
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="social" required="">
                                             <label class="form-check-label">Social</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="internacional" required="">
                                             <label class="form-check-label">Internacional</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="publico" required="">
                                             <label class="form-check-label">Público</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="privado" required="">
                                             <label class="form-check-label">Privado</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                 <div class="row" id="org" style="display:none;">
                                    <div class="col-md-8" >
                                       <div class="form-group"> 
                                          <label for="nombre">Organización a la que pertenece</label>
                                          <input type="text" class="form-control" name="nom_org2" onChange="conMayusculas(this)">
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group">
                                          <label for="control1">Cargo que ocupa:</label> 
                                          <select class="form-control" name="cargo2" onChange="mostrar(this.value);">
                                             <option value="">Selecciona tu cargo</option>
                                             <option value="Director General y/o Coordinador General">Director General y/o Coordinador General</option>
                                             <option value="Director de Área">Director de Área</option>
                                             <option value="Administrativo">Administrativo</option>
                                             <option value="otro">Otro:</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row" id="sel_ies" style="display:none;">
                                    <div class="col-md-8">
                                       <div class="form-group">                
                                          <label for="control">Seleccionar IES</label> 
                                          <select class="form-control" name="nom_org" id="ies">
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-xl-4">
                                       <div class="form-group">
                                          <label for="control1">Cargo que ocupa:</label> 
                                          <select class="form-control" name="cargo" onChange="mostrar(this.value);">
                                             <option value="">Selecciona tu cargo</option>
                                             <option value="Autoridad Educativa Estatal">Autoridad Educativa Estatal</option>
                                             <option value="Estudiante">Estudiante</option>
                                             <option value="Egresado">Egresado</option>
                                             <option value="Docente">Docente</option>
                                             <option value="Investigador">Investigador</option>
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

                                 <div class="row">
                                    <div class="col-xl-12 pad">
                                       <h4>Semblanza</h4>
                                       <div class="form-group">
                                        <label for="exampleFormControlTextarea1">
                                          Escriba una breve semblanza de del participante, donde destaque sus años de experiencia en una o varias de las temáticas tratadas, así como las actividades reelevantes en dichas temásticas y las apoortaciones que considere más reelevantes (máximo 200 palabras).
                                        </label>
                                        <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                       </div>
                                    </div>
                                 </div>



                                  <div class="row">
                                  <div class="col-xl-12">
                                    <br>
                                  </div>  
                                  <div class="col-xl-4">
                                  </div>  
                                    <div class="col-xl-4">
                                       <button type="submit" class="btn btn-block btn-primary btn-lg">Enviar registro </button><br><br>
                                       <input type="hidden" name="id_usuario" value="valor1" />
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                          <p>El Comité Organizador revisará cuidadosamente cada registro y notificará a aquellos expertos que cumplan con los perfiles solicitados para confirmar su participación en el evento. Aquellos que no cumplan con los requisitos establecidos, podrán recibir una notificación indicando que no han sido seleccionados en esta ocasión.
                                             Agradecemos el interés y la participación de todos los expertos en este evento, y estamos comprometidos en garantizar la calidad y relevancia de los participantes para fomentar un ambiente de aprendizaje y colaboración óptimo.</p>
                                    </div>
                                  </div>
                              </form>
                     </div>
                  </div>
         </section>



 <!-- Imagen greco de cabecera -->
<div class="w-100 pt-121  opc1 position-relative" >
    <img class="img-fluid" src="img/cintillo_footer.png" width="100%">
</div>
<footer style="background-color: #8D203D;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <a href="index.html" title=""><br>
                                            <img class="img-fluid" src="img/logo.png" alt="Logo" width="30%">
                                        </a>
                                    </h1>
                                </div>
                                <p class="mb-0" style="color: #fff">Contacto:</p>
                                <p class="mb-0" style="color: #fff">forosdevinculacion@fese.mx</p><br><br><br>
                            </div>
                            <!-- <div class="footer-bottom d-flex flex-wrap justify-content-between w-100">                              
                            </div> -->
                        </div>
                    </div>
                </div>
            </footer><!-- Footer -->
      </main>
      <!-- Main Wrapper -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/counterup.min.js"></script>
      <script src="assets/js/jquery.downCount.js"></script>
      <script src="assets/js/jquery.fancybox.min.js"></script>
      <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
      <script src="assets/js/perfect-scrollbar.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/isotope.min.js"></script>
      <script src="assets/js/custom-scripts.js"></script>        
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="assets/js/bootstrap-multiselect.js"></script>
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
             } else if (valor == "social") {
                 $("#sel_ies").hide();
                 $("#org").show();
             }  else if (valor == "internacional") {
                 $("#sel_ies").hide();
                 $("#org").show();
             }  else if (valor == "publico") {
                 $("#sel_ies").hide();
                 $("#org").show();
             } else if (valor == "privado") {
                 $("#sel_ies").hide();
                 $("#org").show();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>
      <script language="JavaScript"> 
         function conMayusculas(field) 
         { 
             field.value = field.value.toUpperCase() 
         }   
      </script>
      <script type="text/javascript">
         function mostrar(id) {
             if (id == "otro") {
                 $("#otro").show();
             }
         }
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
             } else if (valor == "02") {
                 $("#tipo_hora1").show();
             }  else if (valor == "03") {
                  $("#tipo_hora1").show();
             }  else if (valor == "04") {
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
             if(valor =="05"){
                 $("#tipo_hora2").show();
             } else if (valor == "06") {
                 $("#tipo_hora2").show();
             }  else if (valor == "07") {
                  $("#tipo_hora2").show();
             }  else if (valor == "08") {
                  $("#tipo_hora2").show();
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
             if(valor =="09"){
                 $("#tipo_hora3").show();
             } else if (valor == "10") {
                 $("#tipo_hora3").show();
             }  else if (valor == "11") {
                  $("#tipo_hora3").show();
             }  else if (valor == "12") {
                  $("#tipo_hora3").show();
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
             if(valor =="13"){
                 $("#dia2_hora").show();
             } else if (valor == "14") {
                 $("#dia2_hora").show();
             }  else if (valor == "15") {
                  $("#dia2_hora").show();
             }    else { 
                 // Otra cosa
             }
         });
         })
      </script>

   </body>
</html>