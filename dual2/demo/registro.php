 <?php /**
   include_once('databases_usuario.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $entidad=view_entidad();
   $region=view_region();
   $foro=view_foro(); **/
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
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
      <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZVPVQSG3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZVPVQSG3M');
</script>
   </head>
   <body>
      <main>
         <header class="stick style1 w-100" style=" background-color: #860f01;">
            <div class="container">
               <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                  <div class="logo">
                     <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png"></a></h1>
                  </div>
                  <!-- Logo -->
                  <nav class="d-inline-flex align-items-center">
                     <div class="header-left">
                        <ul class="mb-0 list-unstyled d-inline-flex">
                           <li class="menu-item-has-children"><a href="index.html#" title="">Inicio</a></li>
                           <li class="menu-item-has-children"><a href="index.html#foros" title="">Foros</a></li>
                           <li><a href="index.html#calendario" title="">Calendario</a></li>
                           <li><a href="registro.php" title="">Registro</a></li>
                           <li><a href="#contacto" title="">Contacto</a></li>
                        </ul>
                     </div>
                  </nav>
               </div>
               <!-- Logo Menu Wrap -->
            </div>
         </header>
         <!-- Header -->
         <div class="menu-wrap">
            <span class="menu-close"><i class="fas fa-times"></i></span>
            <ul class="mb-0 list-unstyled w-100">
               <li class="menu-item-has-children"><a href="index#.html">Inicio</a></li>
               <li class="menu-item-has-children"><a href="index.html#foros">Foros</a></li>
               <li><a href="index.html" title="">Calendario</a></li>
               <li><a href="registro.php" title="">Registro</a></li>
               <li><a href="#contato" title="">Contacto</a></li>
            </ul>
         </div>
         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>

         <section>
               <div class="container">
                     <div class="row marg">
                             <form action="registro.php" method="POST">                                
                                 <!--Datos personales-->
                                 <div class="row">
                                    <div class="col-xl-12">
                                       <br><br>
                                       <h4>Datos personales</h4>
                                       <div class="alert alert-secondary" role="alert">
                                        El nombre registrado será el que se utilizará para generar la constancia de participación
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
                                    <div class="col-xl-4">
                                       <div class="form-group"> 
                                          <label for="nombre">Nombre(s):</label>
                                          <input type="text" class="form-control" name="nombre" onChange="conMayusculas(this)" required="">
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
                                          <select class="form-control" name="region"  required="">
                                             <option value="">Seleccionar región</option>
                                            
                                             <option value="<?php echo $row['id_cat_region']; ?>"><?php echo $row['dt_nombre_region']; ?></option>
                                          
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
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

                                 <div id="otra_ies" style="display: none;">Hello hidden content</div> 

                                 
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


                                 <!-- /Datos Institucionales-->

                                 <!-- Datos de participación-->
                                 <div class="row">
                                    <div class="col-xl-12 pad">
                                       <h4>Confirma tu participación en mesas de trabajo</h4>
                                    </div>

                                     <div class="col-md-12">                                       
                                        <div class="sec-title-btn">
                                              <a class="thm-btn2 lft-icon" href="docs/programa.pdf"><i class="flaticon-download"></i>Descargar Programa<span></span></a>
                                        </div>
                                       <p><strong>Elija el día y las mesas de trabajo que más le interesen</strong></p>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" value="no" required="">
                                             <label class="form-check-label">No participaré</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id1" value="dia1" required="">
                                             <label class="form-check-label">Día 1. Educación Dual</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id2" value="dia2" required="">
                                             <label class="form-check-label">Día 2. Emprendimiento Asociativo</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id3" value="ambos" required="">
                                             <label class="form-check-label">Ambos días</label>
                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="row" id="divid1" style="display:none;">
                                          <div class="col-md-12">
                                             <h4>Dia 1. Educación Dual<br></h4>
                                          </div>
                                           <table class="table table-striped table-bordered">
                                             <thead>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">
                                                      <p>10:20 – 11:50</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario1"  value="01">
                                                         <label class="form-check-label">Mesa 1. Finalidad y orientaciones</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario1" value="02">
                                                         <label class="form-check-label">Mesa 2: Definición y elementos esenciales</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario1" value="03">
                                                         <label class="form-check-label">Mesa 3. Aspectos de vinculación</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario1" value="04">
                                                         <label class="form-check-label">Mesa 4. Aspectos curriculares</label>
                                                      </div>
                                                   </td>
                                                   <td style="background-color: #e0b4b4;">
                                                     <div id="tipo_hora1" style="display:none;"> 
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario1" value="Asistente general">
                                                         <label class="form-check-label">Asistente general</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario1" value="expositor">
                                                         <label class="form-check-label">Expositor</label>
                                                      </div>
                                                     </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">
                                                      <p>11:55 – 13:25</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario2" value="05">
                                                         <label class="form-check-label">Mesa 5. Aspectos pedagógicos</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario2" value="06">
                                                         <label class="form-check-label">Mesa 6. Seguimiento del aprendizaje</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario2"  value="07">
                                                         <label class="form-check-label">Mesa 7. Figuras y procesos operativos</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario2"  value="08">
                                                         <label class="form-check-label">Mesa 8. Institucionalización</label>
                                                      </div>
                                                   </td>
                                                  <td style="background-color: #e0b4b4;">
                                                     <div id="tipo_hora2" style="display:none;">  
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario2" value="Asistente general">
                                                         <label class="form-check-label">Asistente general</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario2" value="expositor">
                                                         <label class="form-check-label">Expositor</label>
                                                      </div>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th scope="row">
                                                      <p>13:30 – 15:00
</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario3" value="09">
                                                         <label class="form-check-label">Mesa 9. Evaluación</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario3" value="10">
                                                         <label class="form-check-label">Mesa 10. Estructuras estatales y regionales
</label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario3" value="11">
                                                         <label class="form-check-label">Mesa 11. Alcances académicos </label>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="dual_horario3"  value="12">
                                                         <label class="form-check-label">Mesa 12. Retos</label>
                                                      </div>
                                                   </td>  
                                                   <td style="background-color: #e0b4b4;">
                                                     <div id="tipo_hora3" style="display:none;">  
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario3" value="Asistente general">
                                                         <label class="form-check-label">Asistente general</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_horario3" value="expositor">
                                                         <label class="form-check-label">Expositor</label>
                                                      </div>
                                                      </div>
                                                </td>                                                 
                                                </tr>                                                  
                                             </tbody>
                                          </table>

                                    <div class="col-xl-12">
                                       <label>¿La organización a la que pertenece cuenta con experiencias en Educación Dual?</label><br>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg1_dia1" value="Si">
                                             <label class="form-check-label">Sí</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg1_dia1" value="No">
                                             <label class="form-check-label">No</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-12">
                                       <label>¿Ha participado en proyectos de Educación Dual? </label><br>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg2_dia1" value="Si">
                                             <label class="form-check-label">Sí</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg2_dia1" value="No">
                                             <label class="form-check-label">No</label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>


                                 <div class="row" id="divid2" style="display:none;">
                                          <div class="col-md-12">
                                             <h4>Dia 2. Emprendimiento Asociativo</h4>
                                          </div>

                                           <table class="table table-striped table-bordered">
                                             <thead>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <th scope="row">
                                                      <p>10:20 – 13:40</p>
                                                   </th>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1"  value="13">
                                                         <label class="form-check-label">
                                                            Tema 1. Finalidad y orientaciones<br>
                                                            Tema 4. Aspectos de vinculación<br>
                                                            Tema 6. Alcances y retos</label><br>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1" value="14" >
                                                         <label class="form-check-label">
                                                            Tema 2. Definición y elementos esenciales<br>
                                                            Tema 5. Figuras y procesos operativos<br>
                                                            Tema 7: Seguimiento y evaluación
                                                         </label>
                                                      </div>
                                                   </td>
                                                   <td table-primary>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="emp_horario1" value="15" >
                                                         <label class="form-check-label">
                                                             Tema 3. Aspectos académicos<br>
                                                             </label>
                                                      </div>
                                                   </td>
                                                   <td style="background-color: #e0b4b4;">
                                                     <div id="dia2_hora" style="display:none;"> 
                                                     <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_emp_horario1" value="Asistente general">
                                                         <label class="form-check-label">Asistente general</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                         <input class="form-check-input" type="radio" name="tipo_emp_horario1" value="expositor">
                                                         <label class="form-check-label">Expositor</label>
                                                      </div>
                                                      </div>
                                                   </td>
                                                </tr>          
                                             </tbody>
                                          </table>
                                    <div class="col-xl-12">
                                       <label>¿La organización a la que pertenece cuenta con experiencias en Emprendimiento Asociativo?</label><br>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg1_dia2" value="Si">
                                             <label class="form-check-label">Sí</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg1_dia2" value="No">
                                             <label class="form-check-label">No</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-12">
                                       <label>¿Ha participado en proyectos de Emprendimiento Asociativo? </label><br>
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg2_dia2" value="No">
                                             <label class="form-check-label">Sí</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="preg2_dia2" value="No">
                                             <label class="form-check-label">No</label>
                                          </div>
                                       </div>
                                    </div>
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



            <footer style="background-color: #860f01;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <a href="index.html" title=""><br>
                                            <img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo">
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