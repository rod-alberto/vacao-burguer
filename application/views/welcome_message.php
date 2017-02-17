<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Language" content="pt-br">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilos.css">
</head>
<body>
	<div id="fundo">
		<menu id="menu">
			<a href="view/novo.php" target="_blanck"><div class="menu_config">novo pedido</div></a>
			<a href="view/cancelar.php" target="_blanck"><div class="menu_config">cancelar pedido</div></a>
			<a href="view/alterar.php" target="_blanck"><div class="menu_config">alterar pedido</div></a>
			<a href="view/consultar.php" target="_blanck"><div class="menu_config">consultar pedido</div></a>
			<a href="view/cadastrar.php" target="_blanck"><div class="menu_config">cadastrar cliente</div></a>
			<a href="view/relatorio.php"target="_blanck"><div class="menu_config">exibir relatório</div></a>
		</menu>

		<section id="info">
		
		
		</section>

		<footer id="rodape">

			<div id="texto">
				Vacão burguer Delivery
				Tel: 3493-7063
				Whats: 9 8754-5106

				Suporte : Rod.alberto@hotmail.com
			</div>
		</footer>
	</div>
</body>
</html>