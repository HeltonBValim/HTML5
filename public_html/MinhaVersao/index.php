<?php
    $pgn = isset($_GET["pgn"])?$_GET["pgn"].".php":"home.php";
    $icn = isset($_GET["pgn"])?$_GET["pgn"]:"home";
    //echo $icn." -> ".$pgn;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Google Glass</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/specs.css">
    <link rel="stylesheet" type="text/css" href="css/fotos.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <link rel="stylesheet" type="text/css" href="css/contato.css">
    <script language="javascript" type="text/javascript" src="javascript/funcoes.js"></script>
</head>

<body>
    <div id="topo"></div>
    <div id="interface">
        <div id="cabeca">
            <header id="cabecalho">
                <?php
                    echo ("<img id='icone' src='imagens/$icn.png' alt='Icone da página atual' />");
                ?>

                <hgroup id="titulos">
                    <h1>Google Glass</h1>
                    <h2>A revolução do Google está chegando</h2>
                    <h3>Saiba tudo sobre o Google Glass</h3>
                    <h4>por Helton B. Valim</h4>
                    <h5 class="mgdireita">Falta envio formulário e Media</h5>
                </hgroup>

                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul>
                        <li onmouseover="mudaIcone('home')" onmouseout="mudaIcone(<?php echo ("'".$icn."'")?>)"><a href="?pgn=home">Home</a></li>
                        <li onmouseover="mudaIcone('specs')" onmouseout="mudaIcone(<?php echo ("'".$icn."'")?>)"><a href="?pgn=specs">Especificações</a></li>
                        <li onmouseover="mudaIcone('fotos')" onmouseout="mudaIcone(<?php echo ("'".$icn."'")?>)"><a href="?pgn=fotos">Fotos</a></li>
                        <li onmouseover="mudaIcone('multi')" onmouseout="mudaIcone(<?php echo ("'".$icn."'")?>)"><a href="?pgn=multi">Multimídia</a></li>
                        <li onmouseover="mudaIcone('contato')" onmouseout="mudaIcone(<?php echo ("'".$icn."'")?>)"><a href="?pgn=contato">Fale conosco</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div id="conteudo">
            <?php
                include $pgn;
            ?>
        </div>

        <footer id="rodape">
            <p>Copyright &copy; 2018 - Helton B. Valim<br/>
            <a href="#topo">Voltar ao topo</a></p>
        </footer>
    </div>
</body>
</html>