<?php

  session_start();

  print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RH</title>

  <!-- <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/dist/css/AdminLTE.min.css"> -->

  <!-- Favicon -->
  <link rel="shortcut icon" href="http://www.brisanet.com.br/site//images/favicon.ico" type="image/x-icon"/>
  <link rel="icon" href="http://www.brisanet.com.br/site//images/favicon.ico" type="image/x-icon"/>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<script>
  function redirecionar() {
    if (confirm("Jovem, deseja sair ?")) {
      window.location = "../sair.php";
    }
  }
</script>
<style type="text/css">

</style>
<body id="page-top" class="index">

  <!-- Navigation -->
  <nav id="mainNav top" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <!-- Brand e toggle get agrupados para melhor exibição móvel-->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="#page-top">Recursos humanos</a>
      </div>

      <!-- Coletar os links de navegação, formulários e outros conteúdos para alternar -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li class="page-scroll active">
            <a href="#Cadastro">Cadastro</a>
          </li>
          <li class="page-scroll">
            <a href="#pesquisar">Pesquisar</a>
          </li>
          <li class="page-scroll">
            <a href="#contact">Contact</a>
          </li>
          <li class="page-scroll">
            <a href="#" onclick="redirecionar()">Sair</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  <!-- Header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12" title='Editar informações'>
          <?php

            if($_SESSION['foto'] == null) {
              echo '
                <a href="home/editarPerfil.php?id='.$_SESSION["id"].'">
                  <img class="img-responsive circle" src="img/profile.png" alt="">
                </a>
              ';
            }
            else {
              echo '
                <a href="home/editarPerfil.php?id='.$_SESSION["id"].'">
                  <img class="img-responsive circle" src="'.$_SESSION["foto"].'
              ';
            }
          ?>

          <div class="intro-text">
            <span class="name"></span>

            <span class="skills">Sistema para registro de informações de funcionarios</span>

          </div>
        </div>
      </div>
    </div>
  </header>

<section id="Cadastro">
  <div class="text-center">
          <h2>Cadastro Funcionario</h2><br>
</div>

  <form id="cadastrarFuncionario" method="POST">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
          <a href="#Informaçõesbasicas" aria-controls="home" role="tab" data-toggle="tab">Informações básicas</a>
      </li>

      <li role="presentation">
        <a href="#endereco" aria-controls="profile" role="tab" data-toggle="tab">Endereço e Dados para Contato</a>
      </li>

      <li role="presentation">
        <a href="#informacoes" aria-controls="messages" role="tab" data-toggle="tab">Informações Acadêmicas</a>
      </li>

      <li role="presentation">
        <a href="#historico" aria-controls="settings" role="tab" data-toggle="tab">Historico Comportamental</a>
      </li>
   </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="Informaçõesbasicas">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="campo1">Nome *</label>
              <input type="text" class="form-control" name="nome" required="required">
            </div>

            <div class="form-group">
              <label for="campo2">CPF *</label>
              <input type="text" class="form-control" id="cpf" name="cpf" required="required">
            </div>

            <div class="form-group">
              <label>Sexo *</label>
              <select class="form-control select2" name="sexo" id="sexo" required="" style="width: 100%;">
                <option value="" disabled selected>Selecione o sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino" >Feminino</option>
              </select>
            </div><!--form-control-->
            <div class="form-group">
              <label for="">Data Admissão</label>
              <input type="date" class="form-control" name="data_inicio">
            </div>

          </div><!--col-->
          <div class="col-md-6">
            <div class="form-group">
              <label for="campo1">Setor *</label>
              <input type="text" class="form-control" name="setor">
            </div>

            <div class="form-group">
              <label for="campo2">Cargo *</label>
              <input type="text" class="form-control" id="" name="cargo" required="required">
            </div>

            <div class="form-group">
              <label for="campo2">Supervisor/responsável *</label>
              <input type="text" class="form-control" id="" name="supervisor" required="required">
            </div>

            <div class="form-group">
              <label for="">Data demisão</label>
              <input type="date" class="form-control"  name="data_demissao">
            </div>


          </div><!--col-->
        </div><!--row-->
      </div><!--Informaçõesbasicas-->

      <div role="tabpanel" class="tab-pane" id="endereco">

<!-- CADASTRO DO ENDEREÇO -->

    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="Informaçõesbasicas">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="campo1">E-mail</label>
              <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
              <label for="campo2">Telefone 1 *</label>
              <input type="text" class="form-control" name="telefone1" id="telefone1" placeholder="(___)___-______-______">
            </div>
            <div class="form-group">
              <label for="campo3">Telefone/Fixo</label>
              <input type="text" class="form-control" name="telefone2" id="telefone2" placeholder="(___)___-______-______">
            </div>
            <div class="form-group">
              <label>Cidade *</label>
              <select class="form-control select2" name="cidade" id="cidade" style="width: 100%;">
                <option value="" disabled selected>Cidade/UF</option>
                <option value="são miguel" >São Miguel</option>
              </select>
            </div>

          </div><!--col-->
          <div class="col-md-6">
            <div class="form-group">
              <label for="campo3">Rua *</label>
              <input type="text" class="form-control" name="rua">
            </div>
            <div class="form-group">
              <label for="campo3">Número *</label>
              <input type="text" class="form-control" name="numero">
            </div>
            <div class="form-group">
              <label for="campo3">Bairo *</label>
              <input type="text" class="form-control" name="bairo">
            </div>

        </div><!--col-->
      </div><!--row-->
    </div>
  </div>
</div>
<!-- FIM DO CADASTRO DE ENDEREÇO -->

<!-- INFORMAÇÕES ACADEMICAS -->
      <div role="tabpanel" class="tab-pane" id="informacoes">


<div class="row">
          <div class="col-md-6">
                                <h3>Graduação</h3>
            <div class="form-group">
              <label for="campo1">Faculdade</label>
              <input type="text" class="form-control" name="faculdade">
            </div>

            <div class="form-group">
              <label for="campo2">Curso</label>
              <input type="text" class="form-control" id="cpf" name="curso">
            </div>
            <div class="form-group">
              <label for="">Ano de Conclusão</label>
              <input type="date" class="form-control" name="ano_conclusao">
            </div>
              <div class="form-group">
              <label for="">Termino previsto</label>
              <input type="date" class="form-control" name="termino_previsto">
            </div>


          </div><!--col-->
          <div class="col-md-6">
                              <h3>Pós Graduação</h3>
            <div class="form-group">
              <label for="campo1">Faculdade</label>
              <input type="text" class="form-control" name="faculdade_pos">
            </div>

            <div class="form-group">
              <label for="campo2">Curso</label>
              <input type="text" class="form-control" id="cpf" name="curso_pos">
            </div>
            <div class="form-group">
              <label for="">Ano de Conclusão</label>
              <input type="date" class="form-control"  name="ano_conclusao_pos">
            </div>
              <div class="form-group">
              <label for="">Termino previsto</label>
              <input type="date" class="form-control" name="termino_previsto_pos">
            </div>


          </div><!--col-->
</div>

      </div>
<!-- INFORMAÇÕES ACADEMICAS FIM -->


      <div role="tabpanel" class="tab-pane" id="historico">


<div class="row">
          <div class="col-md-6">
                                <h3>Advertência</h3>
            <div class="form-group">
              <label for="campo1">Motivo</label>
              <input type="text" class="form-control" name="motivo_advertencia">
            </div>

                    <div class="form-group">
              <label>Quantidade</label>
              <select class="form-control select2" name="quantidade_adevertencia" id="" style="width: 100%;">
                <option value="" disabled selected>Selecionar</option>
                <option value="uma" >01</option>
                <option value="duas" >02</option>
                <option value="tres" >03</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Data Advertência</label>
              <input type="date" class="form-control" name="data_advertencia">
            </div>


          </div><!--col-->
          <div class="col-md-6">
                              <h3>Suspensão</h3>
            <div class="form-group">
              <label for="campo1">Motivo</label>
              <input type="text" class="form-control" name="faculdade">
            </div>

                    <div class="form-group">
              <label>Quantidade</label>
              <select class="form-control select2" name="quantidade_suspensao" id="" style="width: 100%;">
                <option value="" disabled selected>Selecionar</option>
                <option value="uma" >01</option>
                <option value="duas" >02</option>
                <option value="tres" >03</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Data Suspensão</label>
              <input type="date" class="form-control" name="data_suspensao">
            </div>
          </div><!--col-->
</div><br>
         <div class="form-group col-xs-12" style="text-align: right;">
                <button type="submit" class="btn btn-success btn-lg pull-rigth">Cadastrar</button>
              </div>
      </div>
    </div>
  </form>

</section>

<!-- COMEÇO DA PESQUISA FUNCIONARIO -->

  <!-- About Section -->
  <section class="success" id="pesquisar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>Pesquisar funcionário</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <form id="buscarFuncionario" method="POST" role="form">
            <legend>Form title</legend>

            <div class="form-group">
              <label for="">Setor</label>
              <select name="setor" required="" style="width:100%">
                <option value="" selected="" disabled="">Selecione um setor</option>
                <option value="Suporte">Suporte</option>
                <option value="Programação">Programação</option>
                <option value="Ouvidoria">Ouvidoria</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>
        </div><!--col-md-3-->



        <!-- desaparece quando os dados aparecer -->
          <div class="sem-resultados" style="display: none">
            <h4>Sem Resultados...</h4>
          </div>

        <div class="col-md-9" id="mostrarTabelaComResultados" style="display: none">

          <!-- desaparece quando os dados aparecer -->
          <div class="load-funcionario" style="display: none">
            <h4>Aguarde...</h4>
          </div>


          <table class="table table-hover" id="tabela-resultado-busca">
            <thead>
              <tr>
                <th>ID</th>
                <th>Setor</th>
                <th>Nome</th>
              </tr>
            </thead>
            <tbody id="QueVenhaOsDadosDoFuncionario">
             <!-- dados aqui-->
            </tbody>
          </table>

        </div><!--col-md-9-->
      </div>
    </div>
  </section>

<!-- #END# COMEÇO DA PESQUISA FUNCIONARIO -->

  <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>ENDEREÇO</h3>
            <p>Rodovia CE - 138, KM 14
              <br>Zona Rural</p>
          </div>
          <div class="footer-col col-md-4">
            <h3>Redes Sociais </h3>
            <ul class="list-inline">
              <li>
                <a href="" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/brisanet_ofc" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3>About Freelancer</h3>
            <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            Copyright &copy; 2017 - Brisanet Telecomunicações - Rodrigo Alves.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
    <a class="btn btn-primary" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>




  <!-- jQuery -->
  <script src="vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Theme JavaScript -->
  <script src="js/freelancer.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

  <script>
    $(document).ready(function(){
      $("#cpf").mask("000.000.000-00")
      $("#telefone1,#telefone2").mask("(000) 0 0000-0000")

      //cadastrar funcionario-
      $('#cadastrarFuncionario').submit(function(){

        alert($(this).serialize())
        return false

      });

      // inicia ja com a pequisa de funcionario
      location.href="#pesquisar";

      // select com pesquisa
      $('select').select2();

      //css dos selects com pesquisa
      $(".select2-container--default .select2-selection--single").css('border', '1px solid #ccc').addClass("form-control"); // bords iguais
      $(".select2-selection--single").css("height", '34px'); // tamanho iguais aos da classe form-control
      $(".select2-selection__rendered").css('line-height', 'normal'); // tirando o line-height


      // trazendo dados teste
      $("#buscarFuncionario").submit(function() {
        var dados = $(this).serialize();

        $.ajax({
          type:"post",
          url:"teste.php",
          data: dados,
          beforeSend: function() {
            $(".load-funcionario").slideDown(200);
          },
          success: function(data) {

            if(data == '0') {
              $(".sem-resultados").slideDown(200); // se nao tiver dados: sem resultados aparece
              $("#QueVenhaOsDadosDoFuncionario").empty(); // limpa as tr
              $("#tabela-resultado-busca").slideUp(200); // tabela desaparece
            }

            else {
              var dadosJSON = $.parseJSON(data);
              var tam = dadosJSON.length;

              // como será utlizado o metodo append
              // a tabela dever ser limpa caso seja
              // feito alguma busca nova
              // as tr sao removidas a adcionadas
              // novas com a nova busca
              $("#QueVenhaOsDadosDoFuncionario").empty();
              //cria as linhas
              for (var i = 0; i < tam; i++) {
                $("#QueVenhaOsDadosDoFuncionario").append(
                  "<tr>"+
                    "<td>" + dadosJSON[i].id + "</td>"+
                    "<td>" + dadosJSON[i].nome + "</td>"+
                    "<td>" + dadosJSON[i].setor + "</td>"+
                  "</tr>"
                );//append
              }//for

              $(".sem-resultados").slideUp();// sem resultados desaparece
              $("#mostrarTabelaComResultados").slideDown(200);//div com tabela aparece
              $("#tabela-resultado-busca").slideDown(200); //tabela aparece
            }
          },
          complete: function() {
            $(".load-funcionario").slideUp(200); //requisicao completa: duv aguarde desaparece
          },
          error: function() {
            alert('erro busca');
          }
        })
        return false;
      })// #buscaFuncionario
    })
  </script>

</body>

</html>