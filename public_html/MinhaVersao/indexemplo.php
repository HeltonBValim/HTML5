<?php
	function content($value) {
            $contents = array ('principal' => 'principal.php', 'sobre' => 'sobre.php', 'contatos' => 'contatos.php');
            $content = $contents[$value];
            if(file_exists($content)) {
                    include($content);
            }
            else {
                    die('O Arquivo <strong>'.$value.'</strong> não foi encontrado!');
            }
        }
?>

<div id="menu">
	<ul>
		<li><a href="?pagina=principal" id="current">Home</a></li>
		<li><a href="?pagina=sobre">Sobre a Escola</a></li>
		<li><a href="?pagina=contatos">Contatos</a></li>
	</ul>
</div>

<div id="conteudo">
	<?php
		include $content;
	?>
	<?php
		$request = $_SERVER['QUERY_STRING'];
		switch($request) {
			default :
				content('principal');
				break;
			case "pagina=sobre" :
				content('sobre');
				break;
			case "pagina=contatos" :
				content('contatos');
				break;
		};
	?>
</div>

<!-- ******* -->

<?
$cont .= ".php";
if (!file_exists ($cont)) $cont = 'home.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
				<li><a href="?cont=empresa">Empresa</a></li>
				<li><a href="?cont=contato">Contato</a></li>
			</ul>
		</div>
		<div id="conteudo">
			<?
			//	CONTEUDO DO SITE
				include $cont;
			?>
		</div>
	</div>
	<div id="rodape"></div>
</div>
</body>
</html>