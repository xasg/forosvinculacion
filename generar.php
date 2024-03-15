<!DOCTYPE html>
<html>
<head>
    <title>Recuperar QR</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#qrModal">
        Mostrar QR
    </button>

    <!-- Modal -->
    <div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Código QR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <!-- Contenedor para mostrar el QR -->
                    <img src="" id="qrImage" class="img-fluid" style="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Cuando se muestra el modal, hacer la petición AJAX para obtener el nombre del archivo del QR
    $('#qrModal').on('show.bs.modal', function () {
        $.ajax({
            url: 'qrcode.php',
            success: function (data) {
                // Actualiza la fuente de la imagen con el nombre del archivo del QR
                $('#qrImage').attr('src', data);
            }
        });
    });
</script>

</body>
</html>
