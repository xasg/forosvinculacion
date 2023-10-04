<?php   
   include_once('databases_usuario.php');
   session_start();
   mysqli_set_charset( $mysqli, 'utf8');
   $participantes = run_participantes();
   ?>
<!DOCTYPE html>
<html lang="es">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>AdminForos</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
   
<br><br><br>

 <div class="container">
<div class="row"><br><br><br><br>
     <div class="col-md-12">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mod">
                Agregar Usuario
              </button>


 <div class="modal fade" id="mod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">                      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                <form action="insert_new.php" method="POST">
                  <div class="row">
                    <div class="col-md-12">                 
                    <input type="hidden" name="id"><br>


                        <div class="col-md-12">
                          <div class="form-check">
                            <label>Región</label>
                            <select class="form-control" name="region"  required>
                              <option value="01">Sur Sureste</option>
                              <option value="02">Centro Sur</option>
                              <option value="03">Centro Occidente</option>
                              <option value="04">Noreste</option>
                              <option value="05">Noroeste</option>
                              <option value="06">Metropolitana</option>
                            </select>
                          </div>
                        </div><br>
                    
                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Nombre</label>
                         <input type="text"  name="nombre" class="form-control">
                    </div>
                    </div><br>

                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Apellido Paterno</label>
                         <input type="text" name="apaterno" class="form-control">
                    </div>
                    </div><br>
                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Apellido Materno</label>
                         <input type="text"  name="amaterno" class="form-control">
                    </div>
                    </div>
                    <br>
                     <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Email</label>
                         <input type="text" name="email" class="form-control">
                    </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                 
                  </div>
                </div>
                </form>

</div>

                </div>
              </div>
            </div>




          </div>
</div>
<div class="row"><br>  

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Región</th>
                <th>Nombre</th>
                <th>Apaterno</th>
                <th>Amaterno</th>
                <th>Email</th>
                <!-- <th>Institución</th> -->
                <th></th>
            </tr>
        </thead>
         <tbody >
                                           <?php
                                             $counter = 1;
                                              while($reg = $participantes->fetch_assoc())
                                              {
                                              ?>                                              
                                              <tr style="border-bottom:0px">  
                                                <td><?php echo $reg['dt_nombre_region']; ?></td>
                                                <td><?php echo $reg['dt_nombre']; ?></td>                 
                                                <td><?php echo $reg['dt_apaterno']; ?></td>
                                                <td><?php echo $reg['dt_amaterno']; ?></td>
                                                <td><?php echo $reg['dt_email']; ?></td>
                                                <!-- <td><?php //echo $reg['dt_nom_org']; ?></td> -->
                                                <td>
                                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#example<?php echo $reg['id_usuario']; ?>">
                Editar
              </button>


 <!-- Modal -->
              <div class="modal fade" id="example<?php echo $reg['id_usuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">                      
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5>Estás seguro de Editar </h5>
                    
                <form action="update_new.php" method="POST">
                  <div class="row">
                    <div class="col-md-12">                 
                    <input type="hidden" name="id" value="<?php echo $reg['id_usuario']; ?>"><br>
                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Nombre</label>
                         <input type="text"  name="nombre" class="form-control" value="<?php echo $reg['dt_nombre']; ?>">
                    </div>
                    </div><br>
                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Apellido Paterno</label>
                         <input type="text" name="apaterno" class="form-control" value="<?php echo $reg['dt_apaterno']; ?>">
                    </div>
                    </div><br>
                    <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Apellido Materno</label>
                         <input type="text"  name="amaterno" class="form-control" value="<?php echo $reg['dt_amaterno']; ?>">
                    </div>
                    </div>
                    <br>
                     <div class="col-md-12">
                    <div class="form-check">
                         <label for="exampleInputEmail1">Email</label>
                         <input type="text" name="email" class="form-control" value="<?php echo $reg['dt_email']; ?>">
                    </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Editar </button>
                 
                  </div>
                </div>
                </form>
                </div>

                </div>
              </div>
            </div>



                                                   <!-- Modal -->
             


                                                </td>
                                              </tr> 

                                              <?php
                                                }
                                              ?>            
          
        </tbody>        
    </table>
  </div>
</div>
<br><br><br>                  
      


<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );


$(document).ready(function() {
    $('#example').DataTable();
} );


$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


</script>

</body>
</html>