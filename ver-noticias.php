<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?> - Noticias</title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<!--<link rel="publisher" href="Agência Digital ESC  - www.agenciaesc.com.br"/>-->
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?> - Noticias"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?> - Noticias" />
	<meta property="og:description" content="<?php echo PG_Desc; ?>" />
	<meta property="og:image" content="<?php echo HOME; ?>/imgs/index.jpg" />

	<!--[if lt IE 9]>
		<script src="_cdn/html5shiv.js"></script>
	<![endif]-->

	<!-- CSS -->
	 <link href="css/estilos.css" rel="stylesheet" type="text/css">
	 <link href="_cdn/shadowbox/shadowbox.css" rel="stylesheet" type="text/css">
	 <link href="css/flickity.min.css" rel="stylesheet" type="text/css">

	<!-- JS -->
	<script type="text/javascript" src="_cdn/jquery.js"></script>
	<script type="text/javascript" src="_cdn/shadowbox/shadowbox.js"></script>
	
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<script>
		Shadowbox.init();
	</script>
</head>
<body>
	<header class="container-header header-pg"><!-- Início Header Container-Header-Pg -->

	<div class="content-header content-pg"><!-- Início Div Class Content-Header-PG -->

		<h1 class="fontzero"><?php echo PG_Title; ?></h1>
		<div class="logo"><a href="index.php" title="<?php echo PG_Title; ?>"><img src="imgs/logo.png" title="<?php echo PG_Title; ?>" alt="<?php echo PG_Title; ?>"></a></div>
		
		<?php include 'menu-responsivo.php'; ?>
		
		<?php include 'menu-linguas.php'; ?>
		
		<?php include 'menu-principal.php'; ?>
		
		<span class="chamadapg">
			<p>Noticias</p>
			<div class="navegacao">
				<p><a href="index.php">Home</a> &raquo; <a href="index.php?pagina=noticias" title="Notícias">Notícias</a></p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->
			
			<?php
			$IDURL = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
			$NoticiaIDURL = mysqli_real_escape_string($con, $IDURL);
			$URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			$sqlNoticias = "SELECT * FROM cad_noticias WHERE ID = '$NoticiaIDURL'";
			$SelConexaoNoticias = mysqli_query($con, $sqlNoticias);

			$TotalNoticias = mysqli_num_rows($SelConexaoNoticias);

			if ($TotalNoticias <= '0') echo "<div class=\"ms in\">Nenhuma Notícia para visualizar!</div>";
			else{
				while ($ResNoticia = mysqli_fetch_array($SelConexaoNoticias))
				{
					$ID         = $ResNoticia['id'];			 
					$Titulo	    = $ResNoticia['titulo'];
					$Data    	= $ResNoticia['data'];
					$Desc       = $ResNoticia['descricao'];
					$Visitas    = $ResNoticia['visitas'];
					$VisitasAdd = $Visitas + 1;

					//Atualiza Visitas
					$AtualizaVisitas = "UPDATE cad_noticias SET visitas = '$VisitasAdd' WHERE id = '$NoticiaIDURL'";
					mysqli_query($con, $AtualizaVisitas)
			?>
			<div class="headertitulo">
				<h1><?php echo $Titulo; ?></h1>
			</div>
			<?php }?>

			<div class="txtdescricao">
				<time datetime="<?php echo $Data ?>" pubdate><?php echo date('d/m/Y', strtotime($Data)); ?></time>
				<?php echo $Desc; ?>
			</div>

			<ul class="galeria">
			<?php
				$sqlImgExibicaNoticia = "SELECT obraid, nomeimg FROM cad_midias_noticias WHERE obraid = '$NoticiaIDURL' ORDER BY fotoid ASC";
				$SelConexaoImgNoticia = mysqli_query($con, $sqlImgExibicaNoticia);

				$TotalImgNoticia = mysqli_num_rows($SelConexaoImgNoticia);

				if ($TotalImgNoticia <= '0') echo "";
				else{
				while ($ResPegaImgExibicaoProduto = mysqli_fetch_array($SelConexaoImgNoticia))
				{
				$PegaIDImagem   = $ResPegaImgExibicaoProduto['obraid'];
				$PegaNomeImagem = $ResPegaImgExibicaoProduto['nomeimg'];
			?>
			<li><a href="admin/midiasnoticias/<?php echo $PegaNomeImagem; ?>" rel="shadowbox[1]" title="<?php echo $Titulo; ?>"><img src="tim.php?src=admin/midiasnoticias/<?php echo $PegaNomeImagem; ?>&w=800&h=600&q=100" alt="<?php echo $Titulo; ?>" title="<?php echo $Titulo; ?>"></a></li>
			<?php } } ?>
		</ul>
		<?php }?>
			
		</div><!-- Fim Div Class Content-pagina -->

	</section><!-- Fim Section Class Container pagina -->