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
    <ul id='encabezado' style="height: 90px; text-align: center;">
        <div class="img_logo" style="height: 90px; width: 90px; display: inline-block; "></div>
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
<div id="adduser_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="align-content: left;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anadir usuario</h4>
      </div>
      <div class="modal-body">
        <div id="alert_message" class="alert alert-warning fade" style="pointer-events: none;">
          --
        </div>
        <div id="top-form" class="form-group top-form">
          <label for="titulo">Usuario:</label>
          <input type="text" class="form-control" id="usuario-input">
        </div>
        <div class="form-group">
          <label for="titulo">Contrasena:</label>
          <input type="text" class="form-control" id="contrasena-input">
        </div>
        <div class="form-group">
          <label for="titulo">Repetir Contrasena:</label>
          <input type="text" class="form-control" id="rcontrasena-input">
        </div>
        <div class="form-group">
          <label for="titulo">Email:</label>
          <input type="text" class="form-control" id="email-input">
        </div>
      </div>
      <div class="modal-footer">
        <button id="adduser_save_btn" type="button" class="btn btn-primary" style="background-color: #07C0C3;">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>
<div class="container" style="margin-top: 20px">
  <h2 style="border-bottom: 1px solid #ddd; padding-bottom: 20px;" >Administrador de Publicaciones</h2>

  <div class="row">
  <button class="btn btn-primary" style="margin:0 auto; background-color:#07C0C3; margin-top: 30px; " data-toggle="modal" data-target="#create_modal">Anadir Producto</button>
  <button class="btn btn-primary" style="margin:0 auto; background-color:#07C0C3; margin-top: 30px; " data-toggle="modal" data-target="#adduser_modal">Anadir Usuario</button>
    <div class="col-md-12">
      <h3>Listado de productos</h3>
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
  <button id="Cerrarsesion" class="btn btn-primary" style="margin:0 auto; background-color:#07C0C3; margin-top: 30px; margin-bottom: 30px;" data-toggle="modal" data-target="#create_modal">Cerrar sesion</button>
</div>
    <div class="col-md-12">
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(function(){

    getProductos();
    var BASE_URL = "<?= base_url();?>";

    function getProductos() {

      let table_container = $('#table_container');

      $.ajax({
        type: "GET",
        url: '/usuarios_controller/getProductos',
        success: function(response) {
          console.log(response);
          if(response.success) {
            productos = response.productos;
            console.log(productos);
            var promocion_value = "No";
            for(var i in response.productos) {

              let id = productos[i].id;
              let texto = productos[i].nombre_producto;
              let promocion = productos[i].promocion;
              console.log(promocion);
              if(promocion == 1){
                promocion_value = "Si";
              }else{
                promocion_value = "No";
              }
              let imagen_id = productos[i].nombre_img;
              console.log(texto);
              table_container.append(productoHtmlGenerator(id,texto,promocion_value,imagen_id));
            }
            activateActions();

          } else {
            alert(response.message);
          }
        },
        error: function(response) {
          console.log(response);
        }
      });

   }
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
                  window.location.assign('../welcome/login');
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

    function productoHtmlGenerator(id,descripcion,promocion,imagen_id){

      let image_url = BASE_URL + "assets/" + imagen_id + ".png";

      return '<tr data-id='+id+'>'+
        '<td style="max-width: 250px;" id="texto">'+descripcion+'</td>'+
        '<td><img id="image" src='+image_url+' width="85px"/></td>'+
        '<td style="max-width: 250px;" id="texto">'+promocion+'</td>'+
        '<td>'+
          '<a class="btn btn-danger delete_action" data-toggle="tooltip" title="Eliminar Promoción" data-id='+id+' style="margin-right: 5px;">Borrar<span class="glyphicon glyphicon-remove"></span></a>'+
        '</td>'+
      '</tr>';

    }

    function createProducto(){
      var promocion_value=false;
      if($("#promocion").is(':checked')) {
        promocion_value=true;
      }
      var form_data = new FormData();
      form_data.append('texto',$('#texto-input').val());
      form_data.append('promocion',promocion_value);
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
                 getProductos();
                 window.location.reload(true);
            },
            error: function(response) {
                console.log(response);
                alert("Error el mensaje no se ha podido enviar");
            }
        });


    }

    function deleteProducto(id,element) {

      console.log("Se va a eliminar la promocion nº " + id);
        $.ajax({
        type: "POST",
        data:{
          id:id
        },
        url: '/usuarios_controller/eliminarProducto',
        success: function(response) {
          console.log(response);
          if(response.success){
            element.parent().parent().remove();
          }
        },
        error: function(response) {
          console.log(response);
        }
        });
        $('#delete_modal').modal('hide');

    }

    function activateActions(element){

      if(typeof element == "undefined"){
        $('.delete_action').on('click', function(){
          let selected_id = $(this).attr('data-id');
          deleteProducto(selected_id,$(this));
        });

        /*$('.edit_action').on('click', function() {
          let selected_id = $(this).attr('data-id');
          editPromocion(selected_id);
        });*/

      } else {
        element.find('.delete_action').on('click', function(){
          let selected_id = $(this).attr('data-id');
          deletePromocion(selected_id,$(this));
        });
      }



    }

    $('#adduser_save_btn').on('click',function(){
      anadirUsuario();
    });

    function anadirUsuario(){
      var form_data = new FormData();
      form_data.append('usuario',$('#usuario-input').val());
      form_data.append('contrasena',$('#contrasena-input').val());
      form_data.append('rcontrasena', $('#rcontrasena-input').val());
      form_data.append('email', $('#email-input').val());
      $.ajax({
            type: "POST",
            url: "/usuarios_controller/addUser",
            data:form_data,
            processData: false,
            cache : false,
            contentType : false,
            processType : false,
            success: function(response){
                console.log(response);
                alert('Se ha guardado el usuario con exito'); 
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