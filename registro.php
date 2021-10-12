<?php 
   include_once('databases_registro.php');
   session_start(); 
   mysqli_set_charset( $mysqli, 'utf8');
   if($_POST )
   { 
   $nombre = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $apellidos = isset( $_POST['apellidos']) ? $_POST['apellidos'] : '';
   $email = isset( $_POST['email']) ? $_POST['email'] : '';
   $movil = isset( $_POST['movil']) ? $_POST['movil'] : '';
   $telefono = isset( $_POST['telefono']) ? $_POST['telefono'] : '';
   $institucion = isset( $_POST['institucion']) ? $_POST['institucion'] : '';
   $nombre_ins = isset( $_POST['nombre_ins']) ? $_POST['nombre_ins'] : '';
   $asistente = isset( $_POST['asistente']) ? $_POST['asistente'] : '';
   $informacion = isset( $_POST['informacion']) ? $_POST['informacion'] : '';
   $reg_usuario = acces_registro($email);
   if($reg_usuario==0){ 
   insert_registro($nombre, $apellidos, $email, $movil, $telefono, $institucion, $nombre_ins, $asistente, $informacion); 
   $id_usuario =acces_registro($email);   
   $id_user=$id_usuario['id_usuario'];
   $_SESSION["id"]=$id_user;
   
   $user= null;
   if($id_user>0){
    $user= $id_user;
   }

  } else { ?>  
   <script>
$(document).ready(function(){
    $(".alert").alert();
});  
</script>
<?php  
}
}
?>

<!DOCTYPE doctype html>
<html>
    <head>
        <title>Servicio Social Comunitario</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                setTimeout(function() {
                    $(".content").fadeOut(1500);
                },3000);
            });
        </script>
        <script language="JavaScript"> 
         function conMayusculas(field) 
         { 
             field.value = field.value.toUpperCase() 
         }   
      </script>
        
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <img alt="Responsive image" class="img-fluid" src="img/Logo_b.png">
                <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">   </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto" style="color:#fff">
                        <li class="nav-item active">
                            <a class="nav-link" href="./">
                                INICIO
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                CALENDARIO
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                MEMORIA
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                CONTACTO
                            </a>
                        </li>                        
                    </ul>
                </div>
        </nav>

    <?php if(!empty($user)): ?>
        <div class="alert alert-success text-center content" role="alert">Registro con exito</div>
    <?php else: ?>
         
    <?php endif;?>

        

        
        <div class="container">
            <div class="row">
                <!--<div class="col-md-12 text-center marg">
                        <h5>Inicio </h5>
                    </div> -->
                    <div class="col-md-12"><br><br><br>
                            <form action="registro.php" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p> El presente registro es para solicitar información e inscribir a las IES en la convocatoria del curso Servicio Social Comunitario, Herramientas y oportunidades para el desarrollo.</p>
                                    <p>Si está de acuerdo con nuestro <a  href="https://www.fese.mx/privacidad.html" target="_black" style="color:#205B4E">aviso de privacidad</a>, llene el formulario y nos pondremos en contacto para brindarle toda la información, así como las fechas importantes y adecuarlas de la mejor forma a los procesos de su institución.</p>
                                    <hr>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Nombre(s):                                        </label>
                                        <input class="form-control" name="nombre" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Apellidos:
                                        </label>
                                        <input class="form-control" name="apellidos" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>
                                            Correo electrónico:
                                        </label>
                                        <input class="form-control" name="email" onchange="conMayusculas(this)" required="" type="email">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Móvil(10 digitos):                                        </label>
                                        <input class="form-control" name="movil" pattern="[0-9]{10}" required="" title="Proporcione un numero correcto" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Teléfono(10 digitos)
                                        </label>
                                        <input class="form-control" name="telefono" pattern="[0-9]{10}" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Institución  de procedencia:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="IES">
                                                <label class="form-check-label">
                                                    IES
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Gobierno">
                                                <label class="form-check-label">
                                                    Gobierno
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Empresa">
                                                <label class="form-check-label">
                                                    Empresa
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="otro">
                                                <label class="form-check-label">
                                                    Otro
                                                </label>
                                            </input>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12" id="otro">
                                    <div class="form-group">
                                        <label>
                                            Nombre de la Institución:
                                        </label>
                                        <input class="form-control" name="nombre_ins" onchange="conMayusculas(this)" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Tipo de Asistente:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Autoridad">
                                                <label class="form-check-label">Autoridad</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Estudiante">
                                                <label class="form-check-label">Estudiante</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Otro">
                                                <label class="form-check-label">Otro</label>
                                            </input>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12"><br>
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="informacion" value="si" checked>
                                          <label class="form-check-label" for="defaultCheck1">
                                            Quiero recibir información de los siguientes eventos.
                                          </label><br><br>
                                    </div>
                                </div>
                    <div class="col-md-6 offset-3 text-center">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"><strong>Registrar</strong></button>
                    </div>
                </div>
            </form>
                    </div>





                <div class="col-md-1">
                </div>
                    
            </div>
        </div>
        <div class="container">
            <div class="row">
              <div class="col-md-12 text-center marg">
                <img alt="Responsive image" class="img-fluid" src="img/Logos_Institucionales.png">
              </div>
            </div>
        </div>
        <div class="container-fluid" style="background-color:#235b4e">
            <div class="row">
                <div class="col-md-12">                   
                </div>
            </div>
        </div>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="index.php" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p> El presente registro es para solicitar información e inscribir a las IES en la convocatoria del curso Servicio Social Comunitario, Herramientas y oportunidades para el desarrollo.</p>
                                    <p>Si está de acuerdo con nuestro <a  href="https://www.fese.mx/privacidad.html" target="_black" style="color:#205B4E">aviso de privacidad</a>, llene el formulario y nos pondremos en contacto para brindarle toda la información, así como las fechas importantes y adecuarlas de la mejor forma a los procesos de su institución.</p>
                                    <hr>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Nombre(s):                                        </label>
                                        <input class="form-control" name="nombre" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Apellidos:
                                        </label>
                                        <input class="form-control" name="apellidos" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>
                                            Correo electrónico:
                                        </label>
                                        <input class="form-control" name="email" onchange="conMayusculas(this)" required="" type="email">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Móvil(10 digitos):                                        </label>
                                        <input class="form-control" name="movil" pattern="[0-9]{10}" required="" title="Proporcione un numero correcto" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Teléfono(10 digitos)
                                        </label>
                                        <input class="form-control" name="telefono" pattern="[0-9]{10}" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Institución  de procedencia:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="IES">
                                                <label class="form-check-label">
                                                    IES
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Gobierno">
                                                <label class="form-check-label">
                                                    Gobierno
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Empresa">
                                                <label class="form-check-label">
                                                    Empresa
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="otro">
                                                <label class="form-check-label">
                                                    Otro
                                                </label>
                                            </input>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12" id="otro">
                                    <div class="form-group">
                                        <label>
                                            Nombre de la Institución:
                                        </label>
                                        <input class="form-control" name="nombre_ins" onchange="conMayusculas(this)" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Tipo de Asistente:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Autoridad">
                                                <label class="form-check-label">Autoridad</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Estudiante">
                                                <label class="form-check-label">Estudiante</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Otro">
                                                <label class="form-check-label">Otro</label>
                                            </input>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12"><br>
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="informacion" value="si" checked>
                                          <label class="form-check-label" for="defaultCheck1">
                                            Quiero recibir formación de los siguientes eventos.
                                          </label><br><br>
                                    </div>
                                </div>
                    <div class="col-md-6 offset-3 text-center">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"><strong>Registrar</strong></button>
                    </div>
                </div>
            </form>
      </div> 
    </div>
  </div>
</div>


        <!--
        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">×</span>
                        </button>

                    </div>                   
                    <div class="modal-body">
                       <form action="index.php" method="POST">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p> El presente registro es para solicitar información e inscribir a las IES en la convocatoria del curso Servicio Social Comunitario, Herramientas y oportunidades para el desarrollo.</p>
                                    <p>Si está de acuerdo con nuestro <a  href="https://www.fese.mx/privacidad.html" target="_black" style="color:#205B4E">aviso de privacidad</a>, llene el formulario y nos pondremos en contacto para brindarle toda la información, así como las fechas importantes y adecuarlas de la mejor forma a los procesos de su institución.</p>
                                    <hr>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Nombre(s):                                        </label>
                                        <input class="form-control" name="nombre" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Apellidos:
                                        </label>
                                        <input class="form-control" name="apellidos" onchange="conMayusculas(this)" required="" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>
                                            Correo electrónico:
                                        </label>
                                        <input class="form-control" name="email" onchange="conMayusculas(this)" required="" type="email">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Móvil(10 digitos):                                        </label>
                                        <input class="form-control" name="movil" pattern="[0-9]{10}" required="" title="Proporcione un numero correcto" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label for="nombre">
                                            Teléfono(10 digitos)
                                        </label>
                                        <input class="form-control" name="telefono" pattern="[0-9]{10}" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Institución  de procedencia:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="IES">
                                                <label class="form-check-label">
                                                    IES
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Gobierno">
                                                <label class="form-check-label">
                                                    Gobierno
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="Empresa">
                                                <label class="form-check-label">
                                                    Empresa
                                                </label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="institucion" onchange="mostrar(this.value)" required="" type="radio" value="otro">
                                                <label class="form-check-label">
                                                    Otro
                                                </label>
                                            </input>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12" id="otro">
                                    <div class="form-group">
                                        <label>
                                            Nombre de la Institución:
                                        </label>
                                        <input class="form-control" name="nombre_ins" onchange="conMayusculas(this)" type="text">
                                        </input>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <label>
                                        Tipo de Asistente:
                                    </label>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Autoridad">
                                                <label class="form-check-label">Autoridad</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Estudiante">
                                                <label class="form-check-label">Estudiante</label>
                                            </input>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="asistente" required="" type="radio" value="Otro">
                                                <label class="form-check-label">Otro</label>
                                            </input>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12"><br>
                                    <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="informacion" value="si" checked>
                                          <label class="form-check-label" for="defaultCheck1">
                                            Quiero recibir formación de los siguientes eventos.
                                          </label><br><br>
                                    </div>
                                </div>
                    <div class="col-md-6 offset-3 text-center">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"><strong>Registrar</strong></button>
                    </div>
                </div>
            </form>
        



        </div>
                </div>
            </div>
        </div>

-->
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/popper.min.js">
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => { 

        //===
        // VARIABLES
        //===
        const DATE_TARGET = new Date('10/08/2021 10:00 AM');
        // DOM for render
        const SPAN_DAYS = document.querySelector('span#days');
        const SPAN_HOURS = document.querySelector('span#hours');
        const SPAN_MINUTES = document.querySelector('span#minutes');
        const SPAN_SECONDS = document.querySelector('span#seconds');
        // Milliseconds for the calculations
        const MILLISECONDS_OF_A_SECOND = 1000;
        const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
        const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
        const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24;

        //===
        // FUNCTIONS
        //===

        /**
        * Method that updates the countdown and the sample
        */
        function updateCountdown() {
            // Calcs
            const NOW = new Date()
            const DURATION = DATE_TARGET - NOW;
            const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
            const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
            const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
            const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
            // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

            // Render
            SPAN_DAYS.textContent = REMAINING_DAYS;
            SPAN_HOURS.textContent = REMAINING_HOURS;
            SPAN_MINUTES.textContent = REMAINING_MINUTES;
            SPAN_SECONDS.textContent = REMAINING_SECONDS;
        }

        //===
        // INIT
        //===
        updateCountdown();
        // Refresh every second
        setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
    });
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
             if(valor =="otro"){
                 $("#otro").show();
             } else if (valor == "IES") { 
                 $("#otro").show();
             } else if (valor == "Empresa") {   
                 $("#otro").show();
             } else if (valor == "Gobierno") {                 
                 $("#otro").show();
             } else { 
                 // Otra cosa
             } 
         });
         })
</script>

<script>
    $('#myAlert').on('closed.bs.alert', function () {
  // do something…
})
</script>

</body>
</html>