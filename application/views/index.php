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
            >
                <img class="imgslide" src="assets/brigadeiro.jpg">
                <img class="imgslide" src="assets/cinammon.jpg" >
                <img class="imgslide" src="assets/pandulce-oreo.jpg">
                <img class="imgslide" src="assets/pandulce.jpg">

            </div>
            <!-- <div class="cycle-slideshow"
                data-cycle-fx=scrollHorz
                data-cycle-timeout=3000
                data-cyv
                style="z-index: 200;height: 100%;width: 80%;position: absolute;top:151px;left:164px;width: 77%; "

            >
                <div class="middle" style="opacity: 1">
                        <div class="text">Pan Dulce Brigadeiro</div>
                    </div> 
                    <div class="middle" style="opacity: ">
                        <div class="text">Pan Dulce Brigadeiro</div>
                    </div> 
            </div> -->
        </div>
    <div class='products' id="products">
        <div class="titulo">Productos</div>
        <div class="pimagenes">
            <div style="display: inline-block; margin: 0 20px;">
                <div class="container">
                    <img id="imagen0" class="img_producto" src="assets/brigadeiro.jpg" alt="Avatar">
                    <div class="middle">
                        <div class="text">Pan Dulce Brigadeiro</div>
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
                    <img id="imagen2" class="img_producto" src="assets/pandulce-oreo.jpg">
                    <div class="middle">
                        <div class="text">Pan Dulce Oreo</div>
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
                    <p class="descripcion">Nosotros somos una compania gastronomica que brinda productos de calidad a nuestros clientes.Ahora seamos sinceros:A quien no le gusta comer?.Comienza a ver nuestras fotos en instagram y deja de desperdiciar tu tiempo.Es hora de comer!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="cuadroborde">
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
                <h1 style="display: inline-block;">: patriciae.torres@gmail.com</h1>
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
        <div id="map" class="map"></div>
        </div>
    </div>
    <div id="mail" class="mail">
        <div class="cuadroborde">
            <div class="titulo">Envianos tu opinion</div>
            <input id="name" type="text" name="nombre" placeholder="Name" class="campoTexto">
            <input id="email" type="text" name="email" placeholder="Email" class="campoTexto">
            <textarea type="text" name="email" class="textarea">Message</textarea>
            <div class="boton">Send Message</div>
        </div>
    </div>
    <div id="footer" class="footer">
        <p style="color: #585858; margin-top:40px; ">© 2017. Created and designed by Mario Gueyraud</div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>

<script src="/js/cycles.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVuouEtI8E235OJNBVdHUrRQNZ4qCA3AE&callback=initMap">
    </script>

<script>
  $(function(){
        var boton = $('.boton');
        var name = $('.name');
        var email = $('.email');
        var message = $('.textarea');
        var body = $("html, body");
        console.log($(window).height());
        $('#linkproductos').on('click',function(){
            body.stop().animate({scrollTop:(70*$(window).height())/100}, 500, 'swing', function(){});
        });
        $('#linkaboutus').on('click',function(){
            body.stop().animate({scrollTop:(190*$(window).height())/100}, 500, 'swing', function(){});
        });
        $('#linkcontact').on('click',function(){
            body.stop().animate({scrollTop:(270*$(window).height())/100}, 500, 'swing', function(){});
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
        window.initMap = function() {
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
      }
      boton.on('click',function(){
            $.ajax({
                method: "POST",
                url: "/welcome/sendEmail",
                data: {
                    name : name.val(),
                    email: email.val(),
                    message: message.val()
                },
                success: function(response){
                    console.log(response)
                },
                error: function(response) {
                    console.log(response)
                }
            });

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
</body>
</html>
