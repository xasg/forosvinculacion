<?php 
   include_once('model/databases_usuario.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');  
   $id=$_SESSION["id"];
   $participante = run_participante($id);
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
      <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="assets/css/color.css">
      <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css">
      <link rel="stylesheet" href="assets/css/style.css">
   </head>
   <body>
      <main>
          <header class="stick style1 w-100">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png"></a></h1></div><!-- Logo -->
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="index.html" title="">Salir</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="index.html" title="">Salir</a></li>
                </ul>
            </div><!-- Menu Wrap -->
         <section>           
         <section>
            <div class="w-100 pt-180  text-center black-layer position-relative">                   
            </div>
         </section>
         <section>
              <div class="container">
                     <div class="row">
                        <div class="col-sm-8 col-md-8 offset-md-2 text-center"><br><br>
                              <h4 class="mb-0">HOLA <?php echo $participante['dt_nombre']," ".$participante['dt_apaterno']." ".$participante['dt_amaterno']; ?></h4><br>   
                          
                              <h5 class="mb-0">Descarga la constancia de participación por tu asistencia a los Foros de Vinculación para el fortalecimiento de la Educación Dual y el Emprendimiento Asociativo.</h5><br>
                              <a href="pdf/certificado.php" target="_black"><img src="pdf/pdf.png" class="responsive"></a>

                          </div>
                        </div><!--row-->
                     </div>
                  <!-- Checkout Wrap -->
         </section>
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
      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="empresa"){
                 $("#div1").show();
                 $("#div2").hide();
             } else if (valor == "ies") {
                 $("#div1").hide();
                 $("#div2").show();
             } else { 
                 // Otra cosa
             }
         });
         })
      </script>

      <script language="Javascript">
  function imprSelec(nombre) {
    var ficha = document.getElementById(nombre);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write( ficha.innerHTML );
    ventimp.document.close();
    ventimp.print( );
    ventimp.close();
  }
  </script>
   </body>
</html>