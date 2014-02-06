<?php include_once("topo.php") ?>

    <div class="section section-initial">

      <div class="container">

        <?php include_once("frase-buscando.php") ?>
        <div class="row">
          <div id="servicos" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left servicos">
            <h2 class="title-gray">serviços</h2>
            <?php
              $sql = "select * from servicos order by id asc";
              $result = mysql_query($sql);
              $servicos = array();
              for($i = 0; $dadosServico = mysql_fetch_assoc($result); $i++){
                $servicos[$i]['tipo'] = $dadosServico['tipo'];
                $servicos[$i]['texto'] = $dadosServico['texto'];
              }
            ?>
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
                        <h2><?=utf8_encode($servicos[0]['tipo'])?></h2>
                          <div class="texto-servico">
                            <?=utf8_encode($servicos[0]['texto'])?>
                          </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
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
                        <h2><?=utf8_encode($servicos[1]['tipo'])?></h2>
                        <div class="texto-servico">
                          <?=utf8_encode($servicos[1]['texto'])?>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
                      </p>
                    </div>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- .serviço -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 portifolio-item portifolio-item-solicitar">
              <span><img class="img-responsive img-home-portfolio invisible" src="img/324x221.gif"></span>
              <div class="servico-hidden show center-block hidden-xs hidden-sm">
                <h1 class="text-center solicite-lg"><strong>Solicite</strong> um Orçamento</h1>
                <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
              </div>

              <div class="servico-hidden show col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block visible-xs visible-sm">
                <h1 class="text-center solicite-xs"><strong>Solicite</strong> um Orçamento</h1>
                <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
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
                        <h2><?=utf8_encode($servicos[2]['tipo'])?></h2>
                        <div class="texto-servico">
                          <?=utf8_encode($servicos[2]['texto'])?>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
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
                        <h2><?=utf8_encode($servicos[3]['tipo'])?></h2>
                        <div class="texto-servico">
                          <?=utf8_encode($servicos[3]['texto'])?>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
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
                        <h2><?=utf8_encode($servicos[4]['tipo'])?></h2>
                        <div class="texto-servico">
                          <?=utf8_encode($servicos[4]['texto'])?>
                        </div>
                        <h2 class="text-center solicite"><strong>Solicite</strong> um Orçamento</h2>
                        <div class="text-center"><a href="orcamento.php" class="btn btn-default">clique aqui</a></div>
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
            <div class="fb-like-box" data-href="https://www.facebook.com/pages/Propr%C3%A1tica/1393255317602838" data-width="auto" data-height="auto" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
          </div>

        </div><!-- /.row -->

      </div><!-- /.container -->

    </div><!-- /.section -->


    <div id="depoimentos" class="section container">

      <div class="container">
        
        <div class="row">
          <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-gray">depoimento <strong>de clientes</strong></h2>
        </div><!-- /.row -->

      <!-- </div><!-- /.container -

      <div class="container"> -->
        
        <div class="row menssegerbox">

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1 well">
            <img src="img/fototeste.png" class="img-responsive pull-left">  
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
              <p><span class="quotes-lg">&ldquo;</span>Além de ótimos clientes a Fabricando Web hoje também é uma grande parceira da nossa empresa, de forma eficiente e objetiva captou nossas necessidades e desenvolveu todo o nosso site, o que aumentou de forma bem significativa o volume de vendas. Hoje sempre que precisamos desenvolver alguma ação de promoção para Marbek, contamos sempre com as ideias e novidades que eles nos sugerem. Uma grande parceria!<span class="quotes-lg pull-right">&rdquo;</span></p> 
            </div>
          </div>
        </div><!-- /.row -->
        <div class="row">
          <div class="col-lg-12 no-padding">
            <button class="pull-right btn btn-primary btn-open-cadastro" type="button">Cadastrar Depoimento</button>
          </div>
        </div><!-- /.row -->
        <div class="row depoimento-hidden">
          <div class='col-lg-10 col-md-10 col-sm-12 col-xs-10 depoimento-form col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-1'>
            <form class="depoimento-form form" action="enviar.php?type=1" role="form">
              <div class="row">
                <div class="col-xs-12 col-md-4 form-group">
                  <label for="name">nome:</label>
                  <input class="form-control input-lg" id="name" name="name" placeholder="" type="text" required />      
                </div>
                <div class="col-xs-12 col-md-4 form-group">
                  <label for="empresa">empresa:</label>
                  <input class="form-control input-lg" id="empresa" name="empresa" placeholder="" type="text" required />      
                </div>
                <div class="col-xs-12 col-md-4 form-group">
                  <label for="empresa">cargo:</label>
                  <input class="form-control input-lg" id="cargo" name="cargo" placeholder="" type="text" required />      
                </div>
              </div>
              <label for="empresa">mensagem:</label>
              <textarea class="form-control input-lg" id="message" name="message" placeholder="" rows="8" required></textarea>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <input id="uploadFile" placeholder="" disabled="disabled" class="txtUpload btn"/>
                <div class="fileUpload btn btn-primary">
                    <span>Selecione uma imagem</span>
                    <input id="uploadBtn" type="file" class="upload" required />
                </div>
            </div>
              <br>      
              <div class="row">
                <div class="col-xs-12 col-md-12 form-group">
                  <button class="btn btn-primary btn-cadastrar-depoimento" type="submit">enviar</button>
                </div>
              </div>
              <div class="row mensagem-envio">
                <img src="img/loader.gif" class="loader center-block">
              </div>
            </form>
          </div>
        </div>

      </div><!-- /.container -->
    </div><!-- /.section -->


    <?php include_once("rodape.php") ?>