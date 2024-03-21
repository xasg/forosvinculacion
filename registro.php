<?php
include_once('databases_registro.php');
mysqli_set_charset($mysqli, 'utf8');
$entidad = view_entidad();
$region = view_region();
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="" />
   <meta name="keywords" content="" />
   <!-- <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png"> -->
   <link rel="icon" href="img/icon.png" sizes="35x35" type="image/png">
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
   <link rel="stylesheet" href="css/style_navs.css">
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-HZVPVQSG3M"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-HZVPVQSG3M');
   </script>
   <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
   <script type="text/javascript">
      $(document).ready(function() {
         setTimeout(function() {
            $(".content").fadeOut(2500);
         }, 3000);

         setTimeout(function() {
            $(".content2").fadeIn(1500);
         }, 6000);
      });
   </script>   
   <style>
      .btn-outline-danger{
         color:#10312B;
         border-color:#235b4e;
         transition: all linear .6s;
      }
      .btn-outline-danger:hover{
         background: linear-gradient(to top ,#10312B,#235b4e);
         border-color:  #10312B;
         transition: all linear .6s;
      }

      body {
            font-family: 'Montserrat', sans-serif;
        }
        .verde{
    background:#245c4f !important;
    color: #fff !important; 
    font-size: 20px !important;
    border-bottom: 2px solid #fff !important;
}

.cafe-claro{
    background:#efe6d5 !important; 
    color: #000 !important; 
    font-size: 20px;
}
.cafe-claro-size{
    background:#efe6d5 !important; 
    color: #000 !important; 
    text-align: left !important;
}
.text-left{
    text-align: left !important;
    width:70%;
}

.cafe{
    background:#bfa27a; 
    color: #fff;
}
.nav.nav-tabs .nav-item a.nav-link {
    color: #8D203D ;
}
.nav.nav-tabs .nav-item a.nav-link:hover {
    color: #fff ;
    background:#8D203D !important;
}

/* .active{
    background: #8D203D !important;
    color:#fff !important;
} */
   </style>
</head>

<body>
   <main>
      <div class="container-fluid mx-0 px-0" style="background: linear-gradient(to top ,#10312B,#235b4e);">
         <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg navigation">
               <a href="index.html">
                  <img alt="Responsive image" class="img-fluid" src="img/logo_2024.png" width="150">
               </a>
               <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                  <span class="navbar-toggler-icon"> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto" style="width:0px;">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                           INICIO
                        </a>
                     </li>
                    <!-- <li class="nav-item active activo">
                        <a class="nav-link" href="#">
                           PARTICIPACIÓN
                        </a>
                     </li>-->
                     <!-- <li class="nav-item active">
                            <a class="nav-link" href="./agenda.php">
                                AGENDA
                            </a>
                        </li> -->

                  </ul>
               </div>
            </nav>
         </div>
      </div>

      <div class="container">
         <form action="update_registro.php" method="POST">
            <div class="row">
               <div class="col-md-12"><br><br>
               <h2>Registro de participación</h2>
               <div class="alert alert-warning" role="alert">
                  Estimado participante.  Le pedimos colocar su correo electrónico y teléfono móvil con WhatsApp, ya que las notificaciones se le estarán haciendo llegar por estos medios. Así mismo, le pedimos revisar su carpeta de correos no deseados si la confirmación de su registro no se visualiza en su bandeja principal.
               </div>
               </div>
            </div>
               <div class="row">
                  <div class="col-xl-12">
                     <h4>Datos personales</h4><br>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="nombre">Primer Apellido:</label>
                        <input type="text" class="form-control" name="apaterno" onChange="conMayusculas(this)" required="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="nombre">Segundo Apellido:</label>  
                        <input type="text" class="form-control" name="amaterno" onChange="conMayusculas(this)" required="">
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label><br>Correo electrónico:</label>
                        <input type="email" class="form-control" name="email" onChange="conMayusculas(this)" required="">
                     </div>
                  </div>
                  <div class="col-xl-3">
                     <div class="form-group">
                        <label for="nombre"><br>Teléfono institucional (10 dígitos)</label>
                        <input type="text" class="form-control" name="tel_ins" maxlength="10" min=0 pattern="[0-9]{10}" >
                     </div>
                  </div>
                  <div class="col-xl-1">
                     <div class="form-group">
                        <label for="nombre"><br>Ext.</label>
                        <input type="text" class="form-control" name="ext" >
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="nombre"><br>Móvil (10 dígitos sin espacios)</label>
                        <input type="text" class="form-control" name="tel_movil" maxlength="10" min=0  required="" pattern="[0-9]{10}">
                     </div>
                  </div>
               </div>


               <!-- Datos Institucionales-->
               <div class="row">
                  <div class="col-xl-12 pad"><br>
                     <h4>Datos de procedencia</h4><br>
                  </div>
                  <div class="col-xl-3">
                     <div class="form-group">
                        <label for="control1">Región</label>
                        <select class="form-control" name="region" id="region" onChange="mostrar(this.value);" required="">
                           <option value="">Seleccionar región</option>
                           <?php while ($row = $region->fetch_assoc()) { ?>
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
                           <?php while ($row = $region->fetch_assoc()) { ?>
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
                           <label class="form-check-label">Educativo</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="social" required="">
                           <label class="form-check-label">Social</label>
                        </div>
                        <!-- <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="organizacion" id="org_otro" value="internacional" required="">
                              <label class="form-check-label" style="color:#98213A">Internacional</label>
                           </div> -->
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
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="nombre"><br>Organización a la que pertenece</label>
                        <input type="text" class="form-control" name="nom_org2" onChange="conMayusculas(this)">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="control1"><br>Nivel del cargo:</label>
                        <select class="form-control" name="cargo2" onChange="mostrar(this.value);">
                           <option value="">Seleccione su cargo</option>
                           <option value="Director General y/o Coordinador General">Director General y/o Coordinador General</option>
                           <option value="Director de Área">Director de Área</option>
                           <option value="Otro">Otro</option> <!--Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                        </select>
                     </div>
                  </div>
                  <div class="col-xl-8">
                     <div class="form-group">
                        <label><br>Nombre completo del cargo que ocupa en la institución</label>
                        <input type="text" class="form-control" name="otro_cargo2" onChange="conMayusculas(this)">
                     </div>
                  </div>
               </div>

               <div class="row" id="sel_ies" style="display:none;">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="control"><br>Seleccionar IES</label>
                        <select class="form-control" name="nom_org" id="ies">
                        </select>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="form-group">
                        <label for="control1"><br>Nivel del cargo:</label>
                        <select class="form-control" name="cargo" onChange="mostrar(this.value);" >
                           <option value="">Selecciona tu cargo</option>
                           <option value="Titular de IES">Titular de IES</option>
                           <option value="Responsable de vinculación">Responsable de vinculación</option>
                           <option value="Responsable académico">Responsable académico</option>
                           <option value="Egresado">Egresado</option>
                           <option value="Estudiante">Estudiante</option>
                           <option value="Otro">Otro</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-xl-8">
                     <div class="form-group">
                        <label><br>Nombre completo del cargo que ocupa en la institución</label>
                        <input type="text" class="form-control" name="otro_cargo" onChange="conMayusculas(this)">
                     </div>
                  </div>
               </div>
               <hr>  
               <div class="row m-auto text-center">
                  <div class="col-md-12"><br>
                     <p class="text-left divOcultar"><strong>Día 1. </strong></p> <!-- Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                  </div>

                  <table  class="table table-striped table-bordered divOcultar">
                     <thead>
                     </thead>
                     <tbody>
                        <!-- ------------------------------------------------------------------------------------ -->
                     <tr>
                           <!-- <th scope="row" class="col-md-2 text-center align-middle"> -->
                              <!-- <p>09:00 – 16:00</p>    Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                           <!-- </th> -->
                           <td >
                              <div class="form-check form-check-inline">
                                 <label class="form-check-label">
                                    <!-- <strong>AGENDA </strong> -->
                                 </label><br>

                                 <table class="table   table-borderless border align-middle text-center">
                        <thead class="table-light">      
                           <div class="card">
      
                                 <div class="card-body cafe text-center" >
            
                                    <h5 class="card-subtitle "> <b> MESAS DE TRABAJO SIMULTÁNEAS </b></h5>
            
                                 </div>
      
                           </div>
      
                           <tr class="text-justifyu" >
      
                              <th class="verde">HORARIO</th>
      
                              <th class="cafe-claro">ACTIVIDAD</th>
      
                           </tr>
      
                        </thead>
      
                           <tbody class="table-group-divider">
      
                              <tr class="" >
      
                                 <td class="verde">15:30 - 16:00</td>
      
                                 <td class="text-left ">Registro de asistencia de los invitados</td>
      
                                 
      
                              </tr>
                              
                              <tr class="">
                                 
                                 <td class="verde">16:00 – 16:30</td>
                           
                                 <td class="text-left cafe-claro-size ">Bienvenida y apertura de los trabajos</td>
      
                              </tr>

                              <tr class="">
                                 
                                 <td class="verde">16:30 – 18:30</td>
                           
                                 <td class="text-left ">Mesas de trabajo simultáneas con la participación de industria,  gobierno y academia por sectores económicos específicos de la región</td>
      
                              </tr>

                              <tr class="">
                                 
                                 <td class="verde">18:30</td>
                           
                                 <td class="text-left cafe-claro-size ">Actividad de integración de redes colaborativas (catering)</td>
      
                              </tr>
      
                           </tbody>
                     </table>
                              </div>
                           </td>
                        </tr>                        
                     </tbody>
                  </table>
               </div>

               
<script>
    function mostrar(valor) {
        var divOcultar = document.getElementById("divOcultar");
        if (valor == "06") {
            divOcultar.style.display = "none";
        } else {
            divOcultar.style.display = "block";
        }
    }

    $('#region').change(function() {
    if ($(this).val() == '06') {
        $('.divOcultar').hide();
        $('.divOcultar2').hide();
        $('.divOcultar').removeAttr('required');
    } else {
        $('.divOcultar').show();
        $('.divOcultar2').show();
        $('.divOcultar').attr('required', 'required');
        
    }
});
</script>

               <div class="row divOcultar">
                  
               <!--Mesas Sur Sureste -->
               <div id="sec_sur_sureste" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>   
                  <div class="table-responsive">
                     <table class="table table-striped table-bordered">
                           <thead>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">
                                       <p>14:30 - 18:30</p>
                                 </th>
                                 <td>
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Electrónica" >
                                          <label class="form-check-label">
                                             <strong>Mesa:<br> Electrónica</strong>
                                          </label><br>
                                       </div>
                                 </td>
                                 <td>
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input divOcultar" type="radio" name="mesa" value="Automotriz / Electromovilidad" >
                                          <label class="form-check-label">
                                             <strong>Mesa: <br>Automotriz / Electromovilidad</strong> 
                                          </label>
                                       </div>
                                 </td>
                                 <td>
                                       <div class="form-check form-check-inline">
                                          <input class="form-check-input divOcultar" type="radio" name="mesa" value="Industria alimentaria" >
                                          <label class="form-check-label">
                                             <strong>Mesa: <br>Industria alimentaria</strong>
                                          </label>
                                       </div>
                                 </td>
                              </tr>
                           </tbody>
                     </table> 
                  </div>
               </div>


               <!--Mesas centro sur -->
               <div id="sec_centro_sur" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>  
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                                                   <thead>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th scope="row">
                                                            <p>14:30 - 18:30</p>
                                                         </th>                                                   
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Automotriz / Electromovilidad">
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br>Automotriz / Electromovilidad</strong>
                                                               </label><br>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Dispositivos médicos" >
                                                               <label class="form-check-label">
                                                               <strong>Mesa:<br> Dispositivos médicos</strong> 
                                                               </label>
                                                            </div>
                                                         </td>
                                                         <td table-primary>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Industria alimentaria" >
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br> Industria alimentaria</strong>
                                                                  </label>
                                                            </div>
                                                         </td>                                                   
                                                      </tr>                                                  
                                                   </tbody>
                        </table> 
                     </div>
               </div>


               <!--Mesas centro occidente -->
               <div id="sec_centro_occidente" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>  
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                                                   <thead>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th scope="row">
                                                            <p>14:30 - 18:30</p>
                                                         </th>                                                   
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Automotriz / Electromovilidad">
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br> Automotriz / Electromovilidad</strong>
                                                               </label><br>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Electrónica" >
                                                               <label class="form-check-label">
                                                               <strong>Mesa:<br>Electrónica</strong> 
                                                               </label>
                                                            </div>
                                                         </td>
                                                         <td table-primary>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Industria alimentaria" >
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br> Industria alimentaria</strong>
                                                                  </label>
                                                            </div>
                                                         </td>                                                   
                                                      </tr>                                                  
                                                   </tbody>
                        </table> 
                     </div>
               </div>



               <!--Mesas noreste -->
               <div id="sec_noreste" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>  
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                                                   <thead>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th scope="row">
                                                            <p>14:30 - 18:30</p>
                                                         </th>                                                   
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Automotriz / Electromovilidad">
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br> Automotriz / Electromovilidad</strong>
                                                               </label><br>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Eléctrico" >
                                                               <label class="form-check-label">
                                                               <strong>Mesa:<br> Eléctrico</strong> 
                                                               </label>
                                                            </div>
                                                         </td>
                                                         <td table-primary>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Industria alimentaria" >
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br>Industria alimentaria</strong>
                                                                  </label>
                                                            </div>
                                                         </td>                                                   
                                                      </tr>                                                  
                                                   </tbody>
                        </table> 
                     </div>
               </div>

               <!--Mesas noroeste -->
               <div id="sec_noroeste" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>  
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                                                   <thead>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th scope="row">
                                                            <p>14:30 - 18:30</p>
                                                         </th>                                                   
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Electrónica">
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br>Electrónica</strong>
                                                               </label><br>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Automotriz / Electromovilidad" >
                                                               <label class="form-check-label">
                                                               <strong>Mesa:<br>Automotriz / Electromovilidad</strong> 
                                                               </label>
                                                            </div>
                                                         </td>
                                                         <td table-primary>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Dispositivos médicos" >
                                                               <label class="form-check-label">
                                                                  <strong>Mesa:<br>Dispositivos médicos</strong>
                                                                  </label>
                                                            </div>
                                                         </td>                                                   
                                                      </tr>                                                  
                                                   </tbody>
                        </table> 
                     </div>
               </div>

               <!--Mesas noreste -->
               <div id="sec_metropolitana" style="display:none;">
                  <div class="col-md-12 "><br>
                     <strong><p>Selecciona la mesa de trabajo simultanea en la que deseas participar. </p></strong>
                  </div>  
                     <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                                                   <thead>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                         <th scope="row">
                                                            <p>14:30 - 18:30</p>
                                                         </th>                                                   
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa"  value="Mesa 1: METROPOLITANA">
                                                               <label class="form-check-label">
                                                                  <strong>Mesa 1: METROPOLITANA</strong>
                                                               </label><br>
                                                            </div>
                                                         </td>
                                                         <td>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Mesa 2: METROPOLITANA" >
                                                               <label class="form-check-label">
                                                               <strong>Mesa 2: METROPOLITANA</strong> 
                                                               </label>
                                                            </div>
                                                         </td>
                                                         <td table-primary>
                                                            <div class="form-check form-check-inline">
                                                               <input class="form-check-input divOcultar" type="radio" name="mesa" value="Mesa 3: METROPOLITANA" >
                                                               <label class="form-check-label">
                                                                  <strong>Mesa 3: METROPOLITANA</strong>
                                                                  </label>
                                                            </div>
                                                         </td>                                                   
                                                      </tr>                                                  
                                                   </tbody>
                        </table> 
                     </div>
               </div>





            <div class="row">
                  <div class="col-xl-12"><br>
                  <label for="nombre">¿Confirmas asistencia a la sesión de redes de colaboración del día 1?</label>
                  <br><br>
                  </div>
                  <div class="col-xl-1">  
                  <div class="form-check">
                  <input class="form-check-input divOcultar" type="radio" name="catering" value="si" >
                  <label class="form-check-label">
                     si
                  </label>
                  </div>                   
                  </div>

                  <div class="col-xl-1">  
                  <div class="form-check">
                  <input class="form-check-input divOcultar" type="radio" name="catering" value="no" >
                  <label class="form-check-label">
                     no
                  </label>
                  </div>                   
                  </div>   
               </div>





                                
                  <!----------------------------------------------------------->
               </div>
               <hr>
               <div class="row m-auto">
                  <div class="col-md-12 text-center"><br>
                     <p class="text-left divOcultar"><strong>Día 2. </strong></p> <!-- Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                     <p class="text-left divOcultar2"><strong>Agenda Día 1. </strong></p> <!-- Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                  </div>

                  <table class="table table-striped table-bordered m-auto">
                     <thead>
                     </thead>
                     <tbody>
                        <!-- ------------------------------------------------------------------------------------ -->
                     <tr>
                           <!-- <th scope="row" class="col-md-2 text-center align-middle"> -->
                              <!-- <p>09:00 – 16:00</p>    Cambio realizado a peticion del grupo de whatsApp de foros de vinculacion -->
                           <!-- </th> -->
                           <td >
                              <div class="form-check form-check-inline">
                                 <label class="form-check-label">
                                    <!-- <strong>AGENDA </strong> -->
                                 </label><br>

                     <table class="table   table-borderless border align-middle text-center">

                        <thead class="table-light">
      
                           <caption></caption>
      
                           <div class="card">
      
                           <div class="card-body cafe text-center" >
      
                              <!-- <h4 class="card-title" >DÍA 2</h4> -->
      
                              <h5 class="card-subtitle"> <b>TRABAJO COLEGIADO EN PLENARIA</b></h5>
      
                           </div>
      
                           </div>
      
                           <tr class="text-justifyu">
      
                              <th class="verde">HORARIO</th>
      
                              <th class="cafe-claro">ACTIVIDAD</th>
      
                           </tr>
      
                           </thead>
      
                           <tbody class="table-group-divider">
      
                              <tr class="" >
      
                                 <td class="verde">09:00 – 10:00</td>
      
                                 <td class="text-left">Registro de asistencia de los invitados</td>
      
                                 
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">10:00 - 11:10</td>
      
                                 <td class="text-left cafe-claro-size">Inauguración oficial del Foro de Vinculación (Transmisión en vivo por canales oficiales)</td>
      
                              </tr>
      
                              <!-- <tr class="">
      
                                 <td class="verde">11:00 - 11:10</td>
      
                                 <td class="text-left">Presentación de las Memorias de Buenas Prácticas de Vinculación</td>
      
                              </tr> -->
      
                              <tr class="">
      
                                 <td class="verde">11:10 – 11:20</td>
      
                                 <td class="text-left ">Fotografía oficial</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">11:20 – 11:25</td>
      
                                 <td class="text-left cafe-claro-size">Resultados de los trabajos del día 1</td>
      
                              </tr>
      
                              <tr class="">
      
                                 <td class="verde">11:25 – 12:00</td>
      
                                 <td class="text-left ">Avances y retos por parte de las autoridades educativas estatales de la región</td>
      
                              </tr>
                              <tr class="">
      
                                 <td class="verde">12:00 – 15:00</td>
      
                                 <td class="text-left cafe-claro-size">Diálogo de alto nivel:
                                    Intercambio entre sectores privado, público y social, en torno a los temas prioritarios de vinculación a nivel regional y estatal.</td>
      
                              </tr>
                              <tr class="">
      
                                 <td class="verde">15:00 – 15:30</td>
      
                                 <td class="text-left ">Conclusiones y cierre</td>
      
                              </tr>
      
                           </tbody>
      
                           <tfoot>
      
                           
      
                           </tfoot>
      
                     </table>
                              </div>
                           </td>
                        </tr>                        
                     </tbody>
                  </table>
               </div>


               <div class="row">
                  <div class="col-xl-12">
                     <br>
                  </div>
                  <div class="d-grid gap-2 col-xl-3 mx-auto">
                     <button type="submit" class="btn btn-outline-danger">Enviar registro </button><br><br>
                     <input type="hidden" name="id_usuario" value="valor1" />
                  </div>
                  <div class="alert alert-secondary" role="alert">
                     <p>Agradecemos su ínteres, la confirmación del presente registro se enviará a su correo, donde se incluirá su <strong>folio</strong> de registro, el cual se le solicitara el día del evento.</p>
                  </div>
               </div>
         </form>
         <!-- Alerta de succes -->
         
      </div>

      <!-- Imagen greco de cabecera -->
      <!--<div class="w-100 pt-121  opc1 position-relative">
         <img class="img-fluid" src="img/cintillo_footer.png" width="100%" style="padding-top: 10%">
      </div>-->
      <footer style="background: linear-gradient(to top ,#10312B,#235b4e);" id="contacto">
         <div class="w-100 pt-121  opc1 position-relative footer ">
            <div class="container position-relative ">
               <div class="footer-wrap w-100 text-center">
                  <div class="footer-inner d-inline-block">
                     <div class="logo d-inline-block">
                        <h1 class="mb-0">
                           <a href="index.html" title=""><br>
                              <img class="img-fluid" src="img/logo_2024.png" alt="Logo" width="30%">
                           </a>
                        </h1>
                     </div>
                     <p class="mb-0" style="color: #fff">Contacto: forosdevinculacion@fese.mx</p><br>
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
      $(document).ready(function() {
         $("#region").change(function() {
            $("#region option:selected").each(function() {
               id_cat_region = $(this).val();
               $.post("includes/getDia.php", {
                  id_cat_region: id_cat_region
               }, function(data) {
                  $("#dia").html(data);
               });
            });
         })
      });
   </script>
   <script language="javascript">
      $(document).ready(function() {
         $("#region").change(function() {
            $("#region option:selected").each(function() {
               id_cat_region = $(this).val();
               $.post("includes/getRegion.php", {
                  id_cat_region: id_cat_region
               }, function(data) {
                  $("#entidad").html(data);
               });
            });
         })
      });
   </script>
   <script language="javascript">
      $(document).ready(function() {
         $("#entidad").change(function() {
            $("#entidad option:selected").each(function() {
               id_cat_entidad = $(this).val();
               $.post("includes/getIes.php", {
                  id_cat_entidad: id_cat_entidad
               }, function(data) {
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
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "ies") {
               $("#sel_ies").show();
               $("#org").hide();
            } else if (valor == "social") {
               $("#sel_ies").hide();
               $("#org").show();
            } else if (valor == "internacional") {
               $("#sel_ies").hide();
               $("#org").show();
            } else if (valor == "publico") {
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
      function conMayusculas(field) {
         field.value = field.value.toUpperCase()
      }
   </script>
   
<!--   
   <script type="text/javascript">
      function mostrar(id) {
         if (id == "otro") {
            $("#otro").show();
         }
      }
   </script>
   -->
   <script type="text/javascript">
         function mostrar(id) {
             if (id == "01") {
                 $("#sec_sur_sureste").show();
                 $("#sec_centro_sur").hide();
                 $("#sec_centro_occidente").hide();
                 $("#sec_noreste").hide();
                 $("#sec_noroeste").hide();
                 $("#sec_metropolitana").hide();
             } if (id == "02") {
                 $("#sec_sur_sureste").hide();
                 $("#sec_centro_sur").show();
                 $("#sec_centro_occidente").hide();
                 $("#sec_noreste").hide();
                 $("#sec_noroeste").hide();
                 $("#sec_metropolitana").hide();
             } if (id == "03") {
                 $("#sec_sur_sureste").hide();
                 $("#sec_centro_sur").hide();
                 $("#sec_centro_occidente").show();
                 $("#sec_noreste").hide();
                 $("#sec_noroeste").hide();
                 $("#sec_metropolitana").hide();
             }  if (id == "04") {
                 $("#sec_sur_sureste").hide();
                 $("#sec_centro_sur").hide();
                 $("#sec_centro_occidente").hide();
                 $("#sec_noreste").show();
                 $("#sec_noroeste").hide();
                 $("#sec_metropolitana").hide();
             } if (id == "05") {
                 $("#sec_sur_sureste").hide();
                 $("#sec_centro_sur").hide();
                 $("#sec_centro_occidente").hide();
                 $("#sec_noreste").hide();
                 $("#sec_noroeste").show();
                 $("#sec_metropolitana").hide();
             } if (id == "06") {
                 $("#sec_sur_sureste").hide();
                 $("#sec_centro_sur").hide();
                 $("#sec_centro_occidente").hide();
                 $("#sec_noreste").hide();
                 $("#sec_noroeste").hide();
                 $("#sec_metropolitana").show();
             }
         }
      </script>



<!--
   <script language="javascript">
      $(document).ready(function() {
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "part_si") {
               $("#divid1").show();
               $("#divid2").hide();
            } else if (valor == "part_no") {
               $("#divid2").show();
               $("#divid1").hide();
            } {
               // Otra cosa
            }
         });
      })
   </script>-->
   <script language="javascript">
      $(document).ready(function() {
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "01") {
               $("#tipo_hora1").show();
            } else if (valor == "02") {
               $("#tipo_hora1").show();
            } else if (valor == "03") {
               $("#tipo_hora1").show();
            } else if (valor == "04") {
               $("#tipo_hora1").show();
            } else {
               // Otra cosa
            }
         });
      })
   </script>
   <script language="javascript">
      $(document).ready(function() {
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "05") {
               $("#tipo_hora2").show();
            } else if (valor == "06") {
               $("#tipo_hora2").show();
            } else if (valor == "07") {
               $("#tipo_hora2").show();
            } else if (valor == "08") {
               $("#tipo_hora2").show();
            } else {
               // Otra cosa
            }
         });
      })
   </script>
   <script language="javascript">
      $(document).ready(function() {
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "09") {
               $("#tipo_hora3").show();
            } else if (valor == "10") {
               $("#tipo_hora3").show();
            } else if (valor == "11") {
               $("#tipo_hora3").show();
            } else if (valor == "12") {
               $("#tipo_hora3").show();
            } else {
               // Otra cosa
            }
         });
      })
   </script>
   <script language="javascript">
      $(document).ready(function() {
         $("input[type=radio]").click(function(event) {
            var valor = $(event.target).val();
            if (valor == "13") {
               $("#dia2_hora").show();
            } else if (valor == "14") {
               $("#dia2_hora").show();
            } else if (valor == "15") {
               $("#dia2_hora").show();
            } else {
               // Otra cosa
            }
         });
      })
   </script>

</body>

</html>