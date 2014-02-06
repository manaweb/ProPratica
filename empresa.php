<?php include_once("topo.php") ?>
	<div class="section">
		<div class="container">
			<?php include_once("frase-buscando.php") ?>
			<div class="row">
				<div class="col-lg-12">
					<h2 class="title-gray">empresa</h2>
				</div>
				<div class="col-lg-12">
					<div class="texto-empresa">
						<?php 
							$sql = "select * from historico limit 1";
							$dados = mysql_fetch_assoc(mysql_query($sql));
							echo utf8_encode($dados['texto'])
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once("rodape.php") ?>
