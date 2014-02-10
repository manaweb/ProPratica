<?php include_once("topo.php") ?>
<div class="section">
	<div class="container">
		<?php include_once("frase-buscando.php") ?>
		<div class="row">
			<div class="col-lg-12">
				<img src="img/orcamento.jpg" alt="Orçamento de serviços" class="img-responsive">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<form class="form-horizontal orcamento-form" role="form" action="enviar.php?type=3">
					<h2>Preencha os campos abaixo e solicite seu orçamento de acordo com a sua necessidade: </h2>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Nome: </label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" id="nome" name="nome" placeholder="" required>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="empresa" class="col-sm-3 control-label">Empresa: </label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" id="empresa" name="empresa" placeholder="" required>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">E-mail: </label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="email" name="email" placeholder="" required>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Telefone: </label>
						    <div class="col-sm-9">
						      	<input type="tel" class="form-control" id="telefone" name="telefone" placeholder="" required>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Cidade: </label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" id="cidade" name="cidade" placeholder="" required>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Estado: </label>
						    <div class="col-sm-9">
						      	<select name="estado" id="estado" class="form-control" required>
						      		<option value=""></option>
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="GO">Goiás</option>
									<option value="ES">Espírito Santo</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraiba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí­</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SP">São Paulo</option>
									<option value="SC">Santa Catarina</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
						      	</select>
						    </div>
					  	</div>
				 	</div>
				 	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<!-- 					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Setor: </label>
						    <div class="col-sm-9">
						      	<select name="setor" id="setor" class="form-control">
						      		<option value=""></option>
						      		<option value="1">1</option>
						      		<option value="2">2</option>
						      	</select>
						    </div>
					  	</div> -->
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Serviço: </label>
						    <div class="col-sm-9">
						      	<?php
						      		$result = mysql_query("SELECT * FROM tborcamento_servicos ORDER BY id DESC");
						      		while($dadosServicos = mysql_fetch_assoc($result))
						      			echo '
						      				<label class="checkbox-inline">
											  	<input type="checkbox" id="" class="checkboxServico" name="servico[]" value="'.utf8_encode($dadosServicos['nome']).'"> '.utf8_encode($dadosServicos['nome']).'
											</label>';

						      	?>
						    </div>
					  	</div>
					  	<div class="form-group">
					    	<label for="nome" class="col-sm-3 control-label">Mensagem: </label>
						    <div class="col-sm-9">
						      	<textarea class="form-control" id="mensagem" name="mensagem" placeholder="" rows="4"></textarea>
						    </div>
					  	</div>
				 	</div>
				 	<div class="clearfix"></div>
				 	<div class="row">
				 		<div class="col-lg-12 text-center">
				 			<div class="form-group">
			                  <button class="btn btn-primary btn-cadastrar-depoimento" type="submit">enviar</button>
			                </div>
				 		</div>
				 	</div>
				 	<div class="row mensagem-envio">
	                	<img src="img/loader.gif" class="loader center-block">
	              	</div>
			 	</form>
		 	</div>
		</div>
	</div>
</div>
<?php include_once("rodape.php") ?>