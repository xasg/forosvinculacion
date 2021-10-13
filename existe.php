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
                           <li class="menu-item-has-children"><a href="index.html" title="">Inicio</a></li>
                           <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Foros</a></li>
                           <li><a href="javascript:void(0);" title="">Calendario</a></li>
                           <li><a href="registro.php" title="">Registro</a></li>
                           <li><a href="javascript:void(0);" title="">Contacto</a></li>
                        </ul>
                     </div>
                     <div class="header-right-btns">
                        <!--<a class="search-btn" href="javascript:void(0);" title="">
                           <i class="flaticon-magnifying-glass"></i></a>-->
                        <a class="user-btn" href="javascript:void(0);" title=""><i class="flaticon-user"></i></a>
                        <!-- <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-menu"></i></a>-->
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
               <li class="menu-item-has-children"><a href="index.html" title="">Inicio</a></li>
               <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Foros</a></li>
               <li><a href="javascript:void(0);" title="">Calendario</a></li>
               <li><a href="registro.php" title="">Registro</a></li>
               <li><a href="javascript:void(0);" title="">Contacto</a></li>
            </ul>
         </div>
         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>

<section>
     <div class="container">
      <div class="row">
      <div class="col-xl-12 text-center"><br><br><br>
         <h1>El email que estas utilizando ya se encuentra registrado </h1>
      </div>
       <div class="view-all mt-40 text-center w-100">
                            <a class="thm-btn fill-btn" href="index.html" title="">Salir<i class="flaticon-trajectory"></i><span></span></a>
      </div><!-- View All -->
      </div>
    </div>
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