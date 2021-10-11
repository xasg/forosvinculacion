<form action="update_tipo.php" method="POST">
<div class="modal fade" id="estatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document" style="padding-top: 10%">
    <div class="modal-content">
      <div class="modal-header">
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Expositor</h4>
-->

      </div>
      <div class="modal-body">
      <div id="datos_ajax"></div>          
          <div class="form-group">
            <label for="nombre" class="control-label">Nombre de participa:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <input type="hidden" class="form-control" id="id" name="id">
          </div>  

          <div class="form-group">
              <label for="control1">Validar como expositor</label> 
                  <select class="form-control" name="valida">
                      <option value="1">Si</option>
                      <option value="">No</option>
                  </select>
          </div>

          <div class="form-group">
              <label for="control1">Tipo de asistente</label> 
                  <select class="form-control" name="tipo">
                      <option value="expositor">expositor</option>
                      <option value="Asistente general">Asistente general</option>
                  </select>
          </div>

           


      </div>
      <div class="modal-footer">
        <div class="col-md-3 col-md-offset-9"><br><br>
                           <div class="form-group">
                              <input type="submit" class="btn btn-block btn-primary btn-lg" value="validar">
                           </div>
             </div>
      </div>
    </div>
  </div>
</div>
</form>