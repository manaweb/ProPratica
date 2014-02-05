<?php
  include("php/config/config.php");
  include("painel/includes/BancoDeDados.php");
  $conexao = db_conectar();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProPratica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  </head>

  <body>

    <nav class="navbar" role="navigation">
      <div class="container topo">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle navbar-inverse" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse visible-xs">
            <img src="img/topo.png" class="pull-right invisible">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">home</a></li>
              <li><a href="sobre.php">empresa</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">serviços <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-portaria">Portaria</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-limpeza">Limpeza</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-apoio">Apoio</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-motorista">Motorista Particular</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-temporarios">Serviços Temporários</a></li>
                </ul>
              </li>
              <li><a href="#depoimentos" class="goTo">depoimentos</a></li>
              <li><a href="javascript:void(0)" class="fale-conosco">fale conosco</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse hidden-xs negao">
            <img src="img/topo.png" class="pull-right invisible">
            <ul class="nav navbar-nav navbar-right menu">
              <li><a href="index.php">home</a></li>
              <li><a href="sobre.php">empresa</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">serviços <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-portaria">Portaria</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-limpeza">Limpeza</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-apoio">Apoio</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-motorista">Motorista Particular</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-temporarios">Serviços Temporários</a></li>
                </ul>
              </li>
              <li><a href="#depoimentos" class="goTo">depoimentos</a></li>
              <li><a href="javascript:void(0)" class="fale-conosco">fale conosco</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        
      </div><!-- /.container -->
    </nav>
    
    
      <div id="myCarousel" class="carousel slide hidden-xs">
          <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
            $sql = "select * from tbpublicidade";
            $result = mysql_query($sql);
            $qtdBanners = mysql_num_rows($result);
            $active = 'active';
            while($dadosBanner = mysql_fetch_assoc($result)){
              echo '
                <div class="item '.$active.'">
                  <div class="fill" style="background-image:url(painel/arquivos/banner/'.$dadosBanner['arquivo'].');"></div>
                </div>';
              $active = "";
            }
          ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
          <?php
            $active = 'class="active"';
            for($i = 0; $i < $qtdBanners; $i++){
              echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" '.$active.'></li>';
              $active = "";
            }
          ?>
          
        </ol>
      </div>
    </div>