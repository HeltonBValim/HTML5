<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
            $cont = isset($_GET["cont"])?$_GET["cont"].".php":"home.php";
    ?>
    <meta charset="UTF-8" />
    <title>Untitled Document</title>
</head>
<body>
	<div id="site">
		<div id="topo">
			
		</div>
	<div id="area">
		<div id="menu">
			<ul>
				<li><a href="?cont=home">Home</a></li>
				<li><a href="?cont=specs">Empresa</a></li>
				<li><a href="?cont=contato">Contato</a></li>
			</ul>
		</div>
		<div id="conteudo">
			<?php
				include $cont;
			?>
		</div>
	</div>
	<div id="rodape"></div>
</div>
</body>
</html>