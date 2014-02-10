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
                <div class="facebook-icon"><a href="https://www.facebook.com/pages/Propr%C3%A1tica/1393255317602838" target="_blank"><img src="img/facebook.jpg" alt="Facebook"></a></div>
              </div>
            </div>
          <div class="row">
            <div class='col-lg-10 col-md-10 col-sm-12 col-xs-10 contact-form col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-1'>
              <form id="contact" class="form" role="form" action="enviar.php?type=2">
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
                    <button class="btn btn-primary center-block btn-enviar" type="submit">Enviar Mensagem</button>
                  </div>
                </div>
                <div class="row mensagem-envio">
                  <img src="img/loader.gif" class="loader center-block">
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
            <a href="#servicos" class="goTo">serviços</a>
          </li>
          <li>
            <a href="#depoimentos" class="goTo">depoimentos</a>
          </li>
          <li>
            <a href="javascript:void(0)" class="fale-conosco">fale conosco</a>
          </li>
        </ul>
      
      </div><!-- /.container -->      

    </div><!-- /.section -->
    <!-- JavaScript -->
    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/modern-business.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
    <!--<script type="text/javascript" src="js/scroll.js"></script> -->
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <!--<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="screen" /> -->
    <script type="text/javascript">
      // document.getElementById("uploadBtn").onchange = function () {
      //   document.getElementById("uploadFile").value = this.value;
      // }
      $(function(){
        //$('.depoimento-form').ajaxForm();
        $('.scroll-pane').jScrollPane({autoReinitialise: true, contentWidth: '0px'});
        // $('.scroll-pane').each(
        //   function()
        //   {
        //     $(this).jScrollPane(
        //       {
        //         showArrows: $(this).is('.arrow')
        //       }
        //     );
        //     var api = $(this).data('jsp');
        //     var throttleTimeout;
        //     $(window).bind(
        //       'resize',
        //       function()
        //       {
        //         if (!throttleTimeout) {
        //           throttleTimeout = setTimeout(
        //             function()
        //             {
        //               api.reinitialise();
        //               throttleTimeout = null;
        //             },
        //             50
        //           );
        //         }
        //       }
        //     );
        //   }
        // )

        $(".fale-conosco").click(function(){
          $("html, body").animate({scrollTop: $(document).height() + 'px'},500);  
        })

        <?php
          if(isset($depoimento)){
            echo '
            scrollToID("#depoimentos",500);
            $("#btn-open-cadastro").trigger("click");
            $(".mensagem-envio .alert").fadeIn("fast");
            ';
          }
        ?>

        $(".goTo").click(function(){
          scrollToID($(this).attr('href'),500);
          return false;
        });

        function scrollToID(id, speed){
          var offSet = 50;
          var targetOffset = $(id).offset().top - offSet;
          // var mainNav = $('#main-nav');
           $('html,body').animate({scrollTop:targetOffset}, speed);
          // if (mainNav.hasClass("open")) {
          //   mainNav.css("height", "1px").removeClass("in").addClass("collapse");
          //   mainNav.removeClass("open");
          // }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }

        $("#contact, .orcamento-form").submit(function(){
          var dados = $(this).serialize();
          $(".loader").show();
          $("input, .btn, select, textarea", this).attr("disabled", 'disabled');
          var action = $(this).attr("action");
          if($( ".checkboxServico:checked" ).length == 0){
            alert("Selecione pelo menos 1 serviço desejado");
            return false;
          }
          // $.post(action, $(this).serialize(),function(data) {
          $.ajax({
            type: "post",
            dataType: "json",
            data: dados,
            url: action,
            success: function(data){
              var alerta = '<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 form-group text-center"><div class="alert alert-'+data.tipo+' alert-contato alert-dismissable col-lg-6 col-lg-offset-3"><button type="button" class="close fechar-alert" data-dismiss="alert" aria-hidden="true">&times;</button><strong>'+data.msg+'</strong></div></div>';
              $("input, textarea", this).attr("value", "");
              $(".loader").hide();
              $(".mensagem-envio").append(alerta);
              $(".mensagem-envio .alert").fadeIn();
              $("input, .btn, select, textarea", this).removeAttr("disabled");
              $(".alert-contato.alert-success", this).fadeIn("fast");
              if(data.tipoAcao == 3){
                setTimeout(function(){
                  window.location = "index.php";
                }, 5000)
              }
            }
          });
          // });
          return false;
        });
        
        $(".btn-open-cadastro").click(function(){
          $(".depoimento-hidden").slideToggle(400);
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