<!DOCTYPE html>
<html>
  <head>
       <title>Administrador</title>
  <link href="../css/inicio.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style="border-radius: 50%;" rel="icon" type="image/png" href="assets/logo.jpg" />
</head>
<body>
  <header >
    <ul id='encabezado' style="height: 100%;">
        <div class="img_logo"></div>
        <li id="Cerrarsesion">Cerrar Sesion</li>
  </header>
  <div class="espacio"></div>
  <div id="create_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="align-content: left;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anadir producto</h4>
      </div>
      <div class="modal-body">
        <div id="alert_message" class="alert alert-warning fade" style="pointer-events: none;">
          --
        </div>
        <div id="top-form" class="form-group top-form">
          <label for="titulo">Nombre del Producto:</label>
          <input type="text" class="form-control" id="texto-input">
        </div>
        <div class="form-group">
          <label for="slug">Imágen</label>
          <input type="file" name="imagen" class="form-control" id="imagen-input">
        </div>
        <div class="form-group">
          <label for="slug">Promocion</label>
          <input type="checkbox" class="form-control" id="promocion">
        </div>
      </div>
      <div class="modal-footer">
        <button id="create_save_btn" type="button" class="btn btn-primary" style="background-color: #07C0C3;">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>
<div class="container" style="margin-top: 20px">
  <h2 style="border-bottom: 1px solid #ddd; padding-bottom: 20px;" >Administrador de Publicaciones</h2>

  <div class="row">
  <button class="btn btn-primary" style="margin:0 auto; background-color:#07C0C3; margin-top: 30px; " data-toggle="modal" data-target="#create_modal">Anadir Producto</button>
    <div class="col-md-12">
      <h3>Listado de promociones</h3>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Descripcion</th>
        <th>Imágen</th>
        <th>Promocion</th>
      </tr>
    </thead>
    <tbody id="table_container">
      <!--data over here-->
    </tbody>
  </table>
    </div>
  </div>
</div>
    <div class="col-md-12">
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(function(){

    $('#Cerrarsesion').on('click',function(){
        cerrarSesion();
    });

    function cerrarSesion(){
      $.ajax({
            method: "POST",
            url: "/usuarios_controller/cerrar_sesion",
            success: function(response){
                console.log(response);
                if (response === "false") {
                  window.location.assign('../');
                }
            },
            error: function(response) {
                console.log(response);
                alert("Error el mensaje no se ha podido enviar");
            }
        });
    }

    $('#create_save_btn').on('click',function(){
      createProducto();
    });

    function createProducto(){
      var form_data = new FormData();
      form_data.append('texto',$('#texto-input').val());
      form_data.append('promocion',$('#promocion').val());
      form_data.append('image', $('input[type=file]')[0].files[0]);
      $.ajax({
            type: "POST",
            url: "/usuarios_controller/createProducto",
            data:form_data,
            processData: false,
            cache : false,
            contentType : false,
            processType : false,
            success: function(response){
                console.log(response);
                
            },
            error: function(response) {
                console.log(response);
                alert("Error el mensaje no se ha podido enviar");
            }
        });


    }

  });
</script>
</html>