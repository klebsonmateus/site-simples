<?php

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = substr($rota['path'],1); 

$paginas = [home,empresa,produtos,servicos,contato]; //todas as páginas do site!!!


//verifica se a página digitada está cadastrada no array $paginas ,  caso contrário exibe envia o header 404
if (!in_array($path, $paginas))
{
	header('HTTP/1.0 404 Not Found');
}

?>


<html>
<head>
    <title>Site</title>
    <?php require_once("estilo.css"); ?>
</head>
<body>
	<?php require_once("menu.php"); ?>

	<?php
	//verifica se a página digitada está cadastrada no array $paginas ,  caso contrário exibe o erro 404
	if (in_array($path, $paginas))
	{
		require_once($path.".php");
	}

	else

	{
		require_once("erro404.php");
		
	}
	
	?>

<div id="push"></div>

<?php require_once("footer.php"); ?>

</body>
</html>