<!DOCTYPE html>
<html>
<head>
	<title>El legado de Marthita</title>
	<link href="css/inicio.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/logo.jpg" />
</head>
<body>
	<header >
    <ul id='encabezado'>
        <div class="img_logo"></div>
    	<li id='imagen'><img class="logo" src="assets/logo.jpg"></img></li>
      	<li id="linkproductos">Products</li>
        <li id="linkaboutus">About us</li>
        <li id="linkcontact">Contact</li>
        <li id="instagram" style="float: right; margin: 20px 20px;"><img class="redes" src="assets/instagram.png"></li>
        <li id="facebook" style="float: right; margin: 20px 0;"><img class="redes" src="assets/facebook.png" ></li>
  </header>
  <div class="espacio"></div>
        <div class="background">
            <div class="cycle-slideshow" 
            data-cycle-fx=scrollHorz
            data-cycle-timeout=2000
            >   

            <img class="imgslide" src="assets/brigadeiro.jpg">
            <img class="imgslide" src="assets/cinammon.jpg" >
            <img class="imgslide" src="assets/pandulce-oreo.jpg">
            <img class="imgslide" src="assets/pandulce.jpg">
        </div>
        </div>
    <div class='products' id="products">
        <h1>Products</h1>
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
        <div class="background" style="position: relative;">
            <div class="circuloaboutus">
                <div style="position: absolute; height: 9% ;width: 43%;
                top: 5%; left: 28%; word-break: break-all;">
                    <h1>About Us</h1>
                </div>
                <div style="position: absolute; height: 71% ;width: 68%;
                top: 14%; left: 16%; word-break: break-all;">
                    <p style="font-size: 100%; margin-top: 20px;">We are a company that makes pan dulce JAJAJAJAJAAJJ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="cuadroborde">
            <h1>Contact</h1>
            <div class="contact-item">
                <div style="width:100%; display: inline-block:">
                    <span class="icon-phone" style="font-size: 40px"></span>
                    <h1 style="display: inline-block;">: +595 972535558</h1> 
                </div>
            </div>
            <div class="contact-item">
            <div style="width:100%; display: inline-block:">
                <span class="icon-envelop" style="font-size: 40px"></span>
                <h1 style="display: inline-block;">: patriciae.torres@gmail.com</h1> 
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block:">
                <span class="icon-facebook2" style="font-size: 40px"></span>
                <h1 style="display: inline-block;">: El Legado de Marthita</h1> 
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block:">
                <span class="icon-instagram" style="font-size: 40px"></span>
                <h1 style="display: inline-block;">: @ellegado_demarthita</h1> 
            </div>
        </div>
        <div class="contact-item">
            <div style="width:100%; display: inline-block:">
                <span class="icon-whatsapp" style="font-size: 40px"></span>
                <h1 style="display: inline-block;">: +595 972535558</h1> 
            </div>
        </div>
        <div id="map" class="map"></div>
        </div>
    </div>
    <div id="mail" class="mail">
        <div class="cuadroborde">
            <h1>Email Us</h1>
            <input id="name" type="text" name="nombre" placeholder="Name" class="campoTexto">
            <input id="email" type="text" name="email" placeholder="Email" class="campoTexto">
            <textarea type="text" name="email" class="textarea">Message</textarea>
            <div class="boton">Send Message</div>
        </div>
    </div>
    <div id="footer" class="footer">
        <p>Iconos diseñados por <a href="http://www.freepik.com" title="Freepik">Freepik</a> desde <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.com</a> con licencia <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
        <p style="color: #585858; margin-top:40px; ">© 2017. Created by Mario Gueyraud</p>
    </div>
<script
		  src="https://code.jquery.com/jquery-3.2.1.js"
		  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>

<!-- include Cycle2 -->
<script src="/js/cycles.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVuouEtI8E235OJNBVdHUrRQNZ4qCA3AE&callback=initMap">
    </script>

<!-- include one or more optional Cycle2 plugins -->
<script>
  $(function(){
    //hola
        var boton = $('.boton');
        var name = $('.name');
        var email = $('.email');
        var message = $('.textarea');
        var body = $("html, body");
        $('#linkproductos').on('click',function(){
            body.stop().animate({scrollTop:720}, 500, 'swing', function(){});
        });
        $('#linkaboutus').on('click',function(){
            body.stop().animate({scrollTop:1520}, 500, 'swing', function(){});
        });
        $('#linkcontact').on('click',function(){
            body.stop().animate({scrollTop:2380}, 500, 'swing', function(){});
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
        
    });
</script>
</body>
</html>
