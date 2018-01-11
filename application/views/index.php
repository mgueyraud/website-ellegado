<!DOCTYPE html>
<html>
<head>
	<title>El legado de Marthita</title>
	<link href="css/inicio.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style="border-radius: 50%;" rel="icon" type="image/png" href="assets/logo.jpg" />
</head>
<body>
	<header >
    <ul id='encabezado' style="height: 100%;">
        <div class="img_logo"></div>
    	<li id='imagen'><img class="logo" src="assets/logo.jpg"></img></li>
      	<li id="linkproductos">Productos</li>
        <li id="linkaboutus">Sobre nosostros</li>
        <li id="linkcontact">Contacto</li>
        <li id="instagram" style="float: right; margin: 20px 20px;"><img class="redes" src="assets/instagram.png"></li>
        <li id="facebook" style="float: right; margin: 20px 0;"><img class="redes" src="assets/facebook.png" ></li>
  </header>
  <div class="espacio">
  </div>
        <div class="background1">
            <div class="cycle-slideshow"
            data-cycle-fx=scrollHorz
            data-cycle-timeout=2000
            id="cycle-slideshow"
            >
                <img class="imgslide" src="assets/brigadeiro.jpg">
                <img class="imgslide" src="assets/cinammon.jpg" >
                <img class="imgslide" src="assets/pandulce-oreo.jpg">
                <img class="imgslide" src="assets/pandulce.jpg">
            
            </div>
        </div>
    <div class='products' id="products">
        <div class="titulo">Productos</div>
        <div class="pimagenes" id="pimagenes">
            <!--<div style="display: inline-block; margin: 0 20px;">
                <div class="container">
                    <img id="imagen0" class="img_producto" src="assets/brigadeiro.jpg" alt="Avatar">
                        <div class="middle">
                            <div class="text">Pan Dulce Brigadeiro</div>
                        </div>
                    </div>
                </div>
            <div style="display: inline-block; margin: 0 20px;">
                <div class="container">
                    <img id="imagen2" class="img_producto" src="assets/pandulce-oreo.jpg">
                    <div class="middle">
                        <div class="text">Pan Dulce Oreo</div>
                    </div>
                </div>
            </div>
            <div style="display: inline-block; margin: 0 20px;">
                <div class="container">
                    <img id="imagen1" class="img_producto" src="assets/cinammon.jpg">
                    <div class="middle">
                        <div class="text">Cinammon Rolls</div>
                    </div>
                </div>
            </div>
            <div style="display: inline-block; margin: 0 20px;">
                <div class="container">
                    <img id="imagen3" class="img_producto" src="assets/pandulce.jpg">
                    <div class="middle">
                        <div class="text">Pan Dulce de lujo</div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
    <div id="aboutus">
        <div class="background2" style="position: relative;">
            <div class="circuloaboutus">
                <div style="position: absolute; height: 9% ;width: 43%;
                top: 5%; left: 28%; word-break: break-all;">
                    <h1>Sobre nosotros</h1>
                </div>
                <div style="position: absolute; height: 71% ;width: 68%;
                top: 14%; left: 16%; word-break: break-all;">
                    <p class="descripcion">Nosotros somos una compania gastronomica que brinda productos de calidad a nuestros clientes. Ahora seamos sinceros: A quien no le gusta comer?. Comienza a ver nuestras fotos en instagram y deja de desperdiciar tu tiempo. Es hora de comer!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="cuadroborde" style="margin-bottom: 30px;">
            <div class="titulo">Contacto</div>
            <div class="contact-item">
                <div style="width:100%; display: inline-block;">
                    <span class="icon-phone icono"></span>
                    <h1 style="display: inline-block;">: +595 972535558</h1>
                </div>
            </div>
            <div class="contact-item">
            <div style="width:100%; display: inline-block;">
                <span class="icon-envelop icono"</span>
                <h1 style="display: inline-block;">: ellegadodemarthita@gmail.com</h1>
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block;">
                <span class="icon-facebook2 icono"></span>
                <h1 style="display: inline-block;">: El Legado de Marthita</h1>
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block;">
                <span class="icon-instagram icono"></span>
                <h1 style="display: inline-block;">: @ellegado_demarthita</h1>
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block;">
                <span class="icon-whatsapp icono"></span>
                <h1 style="display: inline-block;">: +595 972535558</h1>
            </div>
        </div>
        <!--<div id="map" class="map"></div>-->
        </div>
    </div>
    <div id="mail" class="mail">
        <div class="cuadroborde">
            <div class="titulo">Envianos tu opinion</div>
            <input id="name" type="text" name="nombre" placeholder="Nombre" class="campoTexto">
            <input id="email" type="email" required name="email" placeholder="Email" class="campoTexto">
            <textarea type="text" name="email" class="textarea">Mensaje</textarea>
            <div class="boton">Enviar mensaje</div>
        </div>
    </div>
    <div id="footer" class="footer">
        <p style="color: #585858; margin-top:40px; ">© 2017. Created and designed by Mario Gueyraud</div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>


<!--<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVuouEtI8E235OJNBVdHUrRQNZ4qCA3AE&callback=initMap">
    </script>-->

<script>
  $(function(){
        //cargarImagenesSlider();
        cargarProductos();
        var BASE_URL = "<?= base_url();?>";
        var boton = $('.boton');
        var name = $('#name');
        var email = $('#email');
        var message = $('.textarea');
        var body = $("html, body");

        function cargarProductos(){
          let table_container = $('#pimagenes');
          console.log('hola');
          $.ajax({
            type: "GET",
            url: '/usuarios_controller/getProductos',
            success: function(response) {
              console.log(response);
              if(response.success) {
                productos = response.productos;
                console.log(productos);
                for(var i in response.productos) {

                  let id = productos[i].id;
                  let texto = productos[i].nombre_producto;
                  let imagen_id = productos[i].nombre_img;
                  console.log(texto);
                  table_container.append(generadorImagenes(id,texto,imagen_id));
                }
                activateActions();

              } else {
                console.log(response.message);
              }
            },
            error: function(response) {
              console.log(response);
            }
          });
        }

        function generadorImagenes(id,descripcion,imagen_id){

          let image_url = BASE_URL + "assets/" + imagen_id + ".png";

          return '<div style="display: inline-block; margin: 0 20px;">'+
                    '<div class="container">'+
                        '<img id="'+imagen_id+'" class="img_producto" src="assets/'+imagen_id+'.png">'+
                        '<div class="middle">'+
                            '<div class="text">'+descripcion+'</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';

        }

        /*function cargadorDeImagenes(response, background){
            var strImagenes;
            for(var i in response.productos) {
                  let promocion = productos[i].promocion;
                  let imagen_id = productos[i].nombre_img;
                  if(promocion == 1){
                    strImagenes = strImagenes+generadorImagenesSlider(imagen_id);
                  }
                }
            console.log(strImagenes);
            return strImagenes;
        }

        function cargarImagenesSlider(){
          let background = $('.background1');

          console.log('hola');
          $.ajax({
            type: "GET",
            url: '/usuarios_controller/getProductos',
            success: function(response) {
              console.log(response);
              if(response.success) {
                productos = response.productos;
                console.log(productos);
                background.append('<div class="cycle-slideshow"'+
                    'data-cycle-fx=scrollHorz'+
                    'data-cycle-timeout=2000'+
                    'id="cycle-slideshow"'+
                    '>'+
                    cargadorDeImagenes(response,background)+
                    '</div>');
                for(var i in response.productos) {
                  let promocion = productos[i].promocion;
                  let imagen_id = productos[i].nombre_img;
                  if(promocion == 1){
                    background.append(generadorImagenesSlider(imagen_id));
                  }
                }
                activateActions();

              } else {
                console.log(response.message);
              }
            },
            error: function(response) {
              console.log(response);
            }
          });
        }
        */
        function generadorImagenesSlider(imagen_id){
            let image_url = BASE_URL + "assets/" + imagen_id + ".png";

          return '<img class="imgslide" src="assets/'+imagen_id+'.png">';
        }

        console.log($(window).height());
        $('#linkproductos').on('click',function(){
            $('html, body').animate({scrollTop:$('#products').position().top-100}, 'slow');
            //body.stop().animate({scrollTop:(70*$(window).height())/100}, 500, 'swing', function(){});
        });
        $('#linkaboutus').on('click',function(){
            $('html, body').animate({scrollTop:$('#aboutus').position().top-275}, 'slow');
            //body.stop().animate({scrollTop:(190*$(window).height())/100}, 500, 'swing', function(){});
        });
        $('#linkcontact').on('click',function(){
            $('html, body').animate({scrollTop:$('#contact').position().top-100}, 'slow');
            //body.stop().animate({scrollTop:(270*$(window).height())/100}, 500, 'swing', function(){});
        });
        $('#imagen').on('click',function(){
            body.stop().animate({scrollTop:0}, 500, 'swing', function(){});
        });
        $('#facebook').on('click',function(){
            window.open("https://www.facebook.com/El-Legado-de-Marthita-715104475362194/");
        });
        $('#instagram').on('click',function(){
            window.open("https://www.instagram.com/ellegado_demarthita/");
        });
        /*window.initMap = function() {
        var uluru = {lat: -25.299392700195312, lng: -57.646583557128906};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title:"El legado de Marthita"
        });
      }*/
      boton.on('click',function(){
        if(name.val() !== '' && email.val() !== '' && message.val() !== ''){
            sendEmail(name.val(),email.val(),message.val());
        }else{
            alert("Debe completar todos los campos!");
        } 

        });

      function showImages(el) {
        var windowHeight = jQuery( window ).height();
        $(el).each(function(){
            var thisPos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (topOfWindow + windowHeight - 200 > thisPos ) {
                $(this).addClass("fadeIn");
            }
        });
    }

    function sendEmail(name, email, message){
        if(validateEmail(email)){
            $.ajax({
                method: "POST",
                url: "/welcome/sendEmail",
                data: {
                    name : name,
                    email: email,
                    message: message
                },
                success: function(response){
                    console.log(response);
                    alert("Mensaje enviado con exito!");
                },
                error: function(response) {
                    console.log(response);
                    alert("Error el mensaje no se ha podido enviar");
                }
            });
        }
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

    function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailField) == false) 
        {
            alert('Direccion de email invalida');
            return false;
        }

        return true;

    }
    

    // if the image in the window of browser when the page is loaded, show that image
    $(document).ready(function(){
            showImages('.img_producto');
    });

    // if the image in the window of browser when scrolling the page, show that image
    $(window).scroll(function() {
            showImages('.img_producto');
    });

    });
</script>
<script src="/js/cycles.js"></script>
</body>
</html>
