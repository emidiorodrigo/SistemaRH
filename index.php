

<!DOCTYPE html> 
<html>
<head>


<!-- Para estilizar o sistema -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!--Gritter implementar o estilo do sistema-->
<link rel="stylesheet" href="plugins/gritter/jquery.gritter.css">
<script src="plugins/gritter/jquery.gritter.min.js"></script>

<!--Fonts -->
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css" />


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RH</title>
    <!-- Programador -->
    <meta author="Rodrigo Alves">
<style>
            body { 
            margin-top: 0px;
            margin-left: 0px;
            margin-right: 0px;
            background: url('imagens/f2.jpg') no-repeat;
  
            -webkit-background-size: cover;
            /* SAFARI / CHROME */
            -moz-background-size: cover;
            /* FIREFOX */
            -ms-background-size: cover;
            /* IE */
            -o-background-size: cover;
            background-attachment: fixed;
            /* OPERA */
            }

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>
<body onload="myFunction()" bgproperties="fixed"> <!--class="hold-transition login-page" -->

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
    <div class="login-box">
      <div class="login-logo"> 
       <a href="#"><b>RH</b></a>

      </div><!-- /.login-logo -->
      <div class="login-box-body">        
        <form action="" id="confirmarUsuarioLogado" method="post">
          <div class="form-group has-feedback">
            <input type="text" autofocus="autofocus" id="usuario" name="usuario" required="" class="form-control" placeholder="Usuario">
            <span class="fa fa-user form-control-feedback" style="font-size: 17px;"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
         
          <div class="row">
            <div class="col-xs-8">
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Logar</button>
            </div><!-- /.col -->
          </div>
        </form>

</div>


<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

</script>
    <script>
      $("#confirmarUsuarioLogado").submit(function() {
        var dados = $(this).serialize();

        $.ajax({
          type: "POST",
          url: "processalogin.php",
          data: dados,
          success: function( data ) {
            //alert(data);
            if (data == true) 
            {
              jQuery.gritter.add({
                title: 'Conexão Estabelecida !',
                text: 'Redirecionando pagina..',
                class_name: 'growl-success',
                image: 'plugins/gritter/img/shield-ok-icon.png',
                sticky: false,
                time: '2000',
              });
              window.setTimeout("location.href='home/index.php'",1000);
            }
            
            else
            {
              jQuery.gritter.add({
                title: 'Usuário ou Senha Incorretos',
                text: 'Acesso Negado !',
                class_name: 'growl-danger',
                image: 'plugins/gritter/img/shield-error-icon.png',
                sticky: false,
                time: '2000',
              });
              window.setTimeout("location.href=''",1000);
            }
          }
      });
      return false;
      })
    </script>
    
</body>
</html>


