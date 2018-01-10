<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="../css/syles.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
</head>
<body>
        <div class="cuerpo">
        <h1 class="titulo_login">Login</h1>
        <p class="status">hola</p>
        <input type="text" name="Texto" class="campoTexto" placeholder="User"></input>
        <input type="password" name="Texto2" class="campoTexto2" placeholder="Password"></input>
        <div class="boton1" style="margin-bottom: 30px;">login</div>
        
  
  
<script
		  src="https://code.jquery.com/jquery-3.2.1.js"
		  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		  crossorigin="anonymous"></script>
<script>
	$(function(){
		var login = $('.boton1');
		var user = $('.campoTexto');
		var password = $('.campoTexto2');
		var loginheader = $('#login');
		var signin = $('#signin');
		var lost = $('#lost');
		var contador = 0;
		var tabla = $('.tabla');
        var remove = $('#remove');
		var contador = 0;
        var c=1;
        var status = $('.status'); 
        var objeto= '';
        var rusuario = '';
		
		login.on('mousedown', function(){
			login.addClass('botonapretado');
		});
		login.on('mouseup', function(){
			login.removeClass('botonapretado');
		});
		login.on('click',function(){
        	//alert('Usuario: '+user.val()+', contrasena: '+pass.val());
        	if(user.val() == ''){
        		if(password.val() == ''){
        			status.css('display','block');
        			status.html('Ingrese el usuario y la contrasena');
        		}else{
        			status.css('display','block');
        			status.html('Ingrese el usuario');
        		}
        	}else{
        		if(password.val() == ''){
        			status.css('display','block');
        			status.html('Ingrese la contrasena');
        		}else{
        			$.ajax({
                        type: "POST",
                        url: '/usuarios_controller/comprobarLogin',
                        data :{
                            user: user.val(),
                            password :password.val()
                        } ,
                        success: function(response) {
                          console.log(response);
                          csrfName = response.csrfName;
                          csrfHash = response.csrfHash;
                          if(response == "true"){
                            window.location.assign("/usuarios_controller/administrador");
                          }
                          if(response.success) {
                            console.log("success");
                          } else {
                            console.log("error");
                          }
                        },
                        error: function(response) {
                          console.log("error aca");
                          console.log(response);
                          csrfName = response.csrfName;
                          csrfHash = response.csrfHash;
                        }
                      });
        	   }
            }
        	setTimeout(function(){
        		status.css('display','none');
        	},3000);
        	setTimeout(function(){
        		tabla.css('display','none');
        	},contador*3000); 	
		});
	});
</script>
</body>
</html>