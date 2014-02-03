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
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-motorista">Motorista particular</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-temporarios">Serviços Temporários</a></li>
                </ul>
              </li>
              <li><a href="depoimentos.php">depoimentos</a></li>
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
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-motorista">Motorista particular</a></li>
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-temporarios">Serviços Temporários</a></li>
                </ul>
              </li>
              <li><a href="depoimentos.php">depoimentos</a></li>
              <li><a href="javascript:void(0)" class="fale-conosco">fale conosco</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        
      </div><!-- /.container -->
    </nav>
    
    
      <div id="myCarousel" class="carousel slide hidden-xs">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="fill" style="background-image:url('img/background1.png');"></div>
              <div class="carousel-caption">
                <h1>Sua vida mais<br>prática e produtiva</h1>
              </div>
            </div>
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
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      </ol>
    </div>

    <div class="section section-initial">

      <div class="container">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center div-buscando">
            <h1 class="buscando">buscando excelência em prestação de serviços</h1>
            <hr class="hidden-lg hidden-sm">
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left servicos">
            <h2 class="title-gray">serviços</h2>
            <!-- serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-motorista"><img class="img-responsive img-home-portfolio" src="img/foto1.jpg"><img src='img/plus.png' class='img-plus-portfolio'></a>
            </div>
            <!-- /.serviço -->

            <!-- Modal -->
            <div class="modal fade servico-hidden" id="servicos-motorista" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <a href="javascript:void(0);" class="modal-close pull-right" data-dismiss="modal" aria-hidden="true">&times;</a>
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="scroll-pane">
                      <p>
                        <img src="img/servicos-motorista.jpg" alt="Motorista Particular" class="img-responsive">
                        <h2>Motorista Particular</h2>
                          <div class="texto-servico">
                            <p>A PROPRÁTICA SERVIÇOS leva você a eventos, reuniões, aeroportos e outras cidades com segurança e descrição.<br>Fazemos serviços dentro da cidade como levar ao supermercado, farmácia, cabeleireiro, escola e outros.<br>Nossos colaboradores trabalham com descrição e profissionalismo</p>
                          </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->            

            <!-- serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-apoio"><img class="img-responsive img-home-portfolio" src="img/foto2.jpg"><img src='img/plus.png' class='img-plus-portfolio'></a>
            </div>
            <!-- /.serviço -->

            <!-- Modal -->
            <div class="modal fade servico-hidden" id="servicos-apoio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <a href="javascript:void(0);" class="modal-close pull-right" data-dismiss="modal" aria-hidden="true">&times;</a>
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="scroll-pane">
                      <p>
                        <img src="img/servicos-apoio.jpg" alt="Serviços de Apoio" class="img-responsive">
                        <h2>Serviços de Apoio</h2>
                        <div class="texto-servico">
                          <p>Toda empresa precisa focar em suas atividades fim e acaba deixando de lado sua recepção e atendimento, que são áreas porta de entrada do seu negócio.<br>Não é mais preciso preocupar-se com isso, a PROPRÁTICA SERVIÇOS tem recepcionista, telefonistas e secretárias para atendê-lo e fazer de sua empresa ainda mais produtiva.</p>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- .serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item portifolio-item-solicitar">
              <span><img class="img-responsive img-home-portfolio invisible" src="http://placehold.it/324x221"></span>
              <div class="servico-hidden show center-block hidden-xs hidden-sm">
                <h1 class="text-center solicite-lg"><strong>Solicite</strong> um Orçamento</h1>
                <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
              </div>

              <div class="servico-hidden show col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block visible-xs visible-sm">
                <h1 class="text-center solicite-xs"><strong>Solicite</strong> um Orçamento</h1>
                <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
              </div>

            </div>
            <!-- /.serviço -->

            <!-- serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-portaria"><img class="img-responsive img-home-portfolio" src="img/foto3.jpg"><img src='img/plus.png' class='img-plus-portfolio'></a>
            </div>
            <!-- /.serviço -->

            <!-- Modal -->
            <div class="modal fade servico-hidden" id="servicos-portaria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <a href="javascript:void(0);" class="modal-close pull-right" data-dismiss="modal" aria-hidden="true">&times;</a>
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="scroll-pane">
                      <p>
                        <img src="img/servicos-portaria.jpg" alt="Portaria" class="img-responsive">
                        <h2>Portaria</h2>
                        <div class="texto-servico">
                          <p>Profissionais qualificados e treinados, com cursos de atendimento ao público, relação interpessoal, primeiros socorros e segurança do trabalho.<br>
                            A PROPRÁTICA SERVIÇOS traz confiabilidade e praticidade para o cotidiano das empresas e condomínios através de excelência dos serviços prestados.Desenvolvemos projetos de portaria e monitoramento para condomínios.<br>
                            Rotinas e procedimentos desenvolvidos pela portaria.· Entrada e saída de pessoas;· Entrada e saída de veículo.<br>
                            <br>
                            · Controle de entrada e saída de mercadorias e bens da empresa; <br>
                            · Controle de entradas de notas fiscais;· Controle de envio e recebimento de correspondências;<br>
                            · Controle de entrada e saída de visitantes;<br>
                            · Monitoramento a distancia.</p>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-limpeza"><img class="img-responsive img-home-portfolio" src="img/foto4.jpg"><img src='img/plus.png' class='img-plus-portfolio'></a>
            </div>
            <!-- /.serviço -->

            <!-- Modal -->
            <div class="modal fade servico-hidden" id="servicos-limpeza" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <a href="javascript:void(0);" class="modal-close pull-right" data-dismiss="modal" aria-hidden="true">&times;</a>
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="scroll-pane">
                      <p>
                        <img src="img/servicos-limpeza.jpg" alt="Serviços de Limpeza" class="img-responsive">
                        <h2>Limpeza e conservação</h2>
                        <div class="texto-servico">
                          <p>Com uma seleção rigorosa e minuciosa contratamos profissionais da limpeza que garante a qualidade dos serviços por passarem por treinamentos de conduta e específico de limpeza em geral.<br>Trabalhamos com salas comerciais, empresas e até limpeza industrial. Fazemos limpezas em escolas e universidades utilizando um sistema especializado em rotinas de serviços, para que tudo fique limpo e organizado sem influenciar no fluxo de alunos.<br>Estamos com uma nova área de limpeza, são as de laboratórios. Profissionais treinados e com curso de segurança e boas práticas de laboratório.</p>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- .serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#servicos-temporarios"><img class="img-responsive img-home-portfolio" src="img/foto5.jpg"><img src='img/plus.png' class='img-plus-portfolio'></a>
            </div>
            <!-- /.serviço -->

            <!-- Modal -->
            <div class="modal fade servico-hidden" id="servicos-temporarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
              <a href="javascript:void(0);" class="modal-close pull-right" data-dismiss="modal" aria-hidden="true">&times;</a>
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="scroll-pane">
                      <p>
                        <img src="img/servicos-temporarios.jpg" alt="Serviços Temporários" class="img-responsive">
                        <h2>Serviços Temporários</h2>
                        <div class="texto-servico">
                          <p>Fazemos portaria, recepção e limpeza de banheiros e do local de eventos como: casamentos, aniversários, shows, formaturas, festas de confraternização e outros.<br>
                            <br>Terceirizamos colaboradores para substituição de férias e afastamentos ou quaisquer eventos extraordinários que aconteça em sua empresa.<br>
                            <br>
                            Equipe treinada para substituir e executar o serviço com qualidade.<br></p>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="javascript:void(0)" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            
          </div>

        </div><!-- /.row -->

      </div><!-- /.container -->

      <div class="container">

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2  class="title-gray">siga-nos no <strong>Facebook</strong></h2>
            <div class="fb-like-box" data-href="http://www.facebook.com/FacebookDevelopers" data-width="auto" data-height="auto" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
          </div>

        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->


    <div class="section menssegerbox container">

      <div class="container">
        
        <div class="row">
          <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-gray">depoimento <strong>de clientes</strong></h2>
        </div><!-- /.row -->

      <!-- </div><!-- /.container --

      <div class="container"> -->
        
        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 well">
              <img src="img/fototeste.png" class="img-responsive pull-left">  
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                  <p><span class="quotes-lg">&ldquo;</span>Além de ótimos clientes a Fabricando Web hoje também é uma grande parceira da nossa empresa, de forma eficiente e objetiva captou nossas necessidades e desenvolveu todo o nosso site, o que aumentou de forma bem significativa o volume de vendas. Hoje sempre que precisamos desenvolver alguma ação de promoção para Marbek, contamos sempre com as ideias e novidades que eles nos sugerem. Uma grande parceria!<span class="quotes-lg pull-right">&rdquo;</span></p> 
                </div>
            </div>
           </div>
    
        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->


    <div class="section contato">

      <div class="container maps">
          <div class="row venha center-block">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
              <h2 class="venha-title col-lg-12 col-md-12 col-sm-12 col-xs-12">venha conhecer nossa empresa</h2>
            </div>
          </div>  

          <div class="row venha center-block hidden open-map" href="#content-mapa">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
              <h2 class="venha-title col-lg-12 col-md-12 col-sm-12 col-xs-12">Ver Mapa</h2>
            </div>
          </div>

          <div class="row maps col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xs-offset-0 mapa">

            <div id="content-mapa">
              <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
              <style>
                  html, body, #map-canvas {
                    height: 100%;
                    margin: 0px;
                    padding: 0px
                  }
                </style>
              <script type="text/javascript">
                window.onload = function() {
                    initialize();
                }
             
                function initialize() {
                    var myLatlng = new google.maps.LatLng(-20.786529,-48.332228);
                    
                    var myOptions = {
                        zoom: 18,
                        center: myLatlng,
                        mapTypeId: google.maps.MapTypeId.ROADMAP        }
                     
                    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                     
                    var contentString = "PróPratica";
                     
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                     
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        icon: 'img/marcador.png',
                        map: map,
                        title: "PróPratica"
                    });


                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map,marker);
                    });

                    var styles = [{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}];
                  map.setOptions({styles: styles});
                }
            </script>
              <div id="map_canvas" style="width:3000px;height:365px;" class="img-responsive"></div>
            </div>
          </div>

      </div><!-- /.container -->


      <div class="container">
        <footer>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-lg-offset-0 col-md-offset-0 topo-contato">
                <h2>entre em contato</h2>
                <address class="col-lg-10 col-lg-md-10 col-sm-10 col-xs-10">
                  <strong>Av Jaime Ribeiro, 813 - Vila Industrial - Jaboticabal - SP</strong>
                  <br>
                  <abbr title="Telefone"><strong>Tel:</strong></abbr>(16) 3202-7979
                  <strong>Email:</strong>
                  <a href="mailto:sac@propartica.com.br">sac@propartica.com.br</a>
                </address>
                <div class="facebook-icon"><a><img src="img/facebook.jpg" alt="Facebook"></a></div>
              </div>
            </div>
          <div class="row">
            <div class='col-lg-10 col-md-10 col-sm-12 col-xs-10 contact-form col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-1'>
              <form id="contact" method="post" class="form" role="form">
                <div class="row">
                  <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control input-lg" id="name" name="name" placeholder="Nome" type="text" required />      
                  </div>
                  <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control input-lg" id="email" name="email" placeholder="Seu email" type="email" required />      
                  </div>
                </div>
                <textarea class="form-control input-lg" id="message" name="message" placeholder="Sua Mensagem" rows="8"></textarea>
                <br>      
                <div class="row">
                  <div class="col-xs-12 col-md-12 form-group">
                    <button class="btn btn-primary center-block" type="submit">Enviar Mensagem</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        
        </footer>
        
      </div><!-- /.container -->      

    </div><!-- /.section -->
  
    <div class="section rodape">

      <div class="container">
      
        <ul class="list-inline pull-right">
          <li>
            <a href="#">home</a>
          </li>
          <li>
            <a href="#">empresa</a>
          </li>
          <li>
            <a href="#">serviços</a>
          </li>
          <li>
            <a href="#">depoimentos</a>
          </li>
          <li>
            <a href="#">fale conosco</a>
          </li>
        </ul>
      
      </div><!-- /.container -->      

    </div><!-- /.section -->
    <!-- JavaScript -->
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/modern-business.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <!--<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="screen" /> -->
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script type="text/javascript">
      $(function(){
        // var settings = {
        //   top: 0,
        //   left: 0,
        //   opacity: 1
        // };
        // var alturaItem = 0;
        // var larguraItem = 0;
        // $(".portifolio-item a").hover(function(){
        //   alturaItem = $('.img-home-portfolio',this).height();
        //   larguraItem = $('.img-home-portfolio',this).width();
        //   settings.top = (alturaItem/2) - 20+'px';
        //   settings.left = (larguraItem/2) - 24.5+'px';
        //   settings.opacity = 1;
        //   $('.img-plus-portfolio',this).animate(settings,500);
        // },function() {
        //   settings.top = settings.left = settings.opacity = 0;
        //   $('.img-plus-portfolio',this).css(settings);
        // });

        // $(".portifolio-item a, .open-map").fancybox({
        //   type: 'inline',
        //   margin: [37,0,0,0],
        //   scrolling: 'visible',
        //   autoSize: true,
        //   fitToView: true,
        //   width: 'auto',
        //   'max-width': '100%'
        // });
        // $(".portifolio-item a").click(function(){
        //   fancybox.open();
        //   return false;
        // });

        $('.scroll-pane').jScrollPane({autoReinitialise: true, contentWidth: '0px'});

        $(".fale-conosco").click(function(){
          $("html, body").animate({scrollTop: $(document).height() + 'px'},500);  
        })
      });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=170974698005";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  </body>
</html>