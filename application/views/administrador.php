<!DOCTYPE html>
<html>
  <head>
       <title>Administrador</title>
  <link href="../css/inicio.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style="border-radius: 50%;" rel="icon" type="image/png" href="assets/logo.jpg" />
</head>
<body>
  <header >
    <ul id='encabezado' style="height: 100%;">
        <div class="img_logo"></div>
        <li id="Cerrarsesion">Cerrar Sesion</li>
  </header>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
<script type="text/javascript">
  $(function(){
    $('#Cerrarsesion').on('click',function(){
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
    });
  });
</script>
</html>