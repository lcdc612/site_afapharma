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
				<p><a href="index.php">Home</a> &raquo; Noticias</p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->
			
			<h1 class="fontzero">Noticias</h1>
					
			<?php
				$sqlNoticias = "SELECT * FROM cad_noticias ORDER BY data DESC";
				$SelConexaoNoticia = mysqli_query($con, $sqlNoticias);

				$TotalNoticias = mysqli_num_rows($SelConexaoNoticia);

				if ($TotalNoticias <= '0') echo "<div class=\"alert-box notice\">Nenhuma <strong>Notícia Cadastrada</strong> até o momento!</div>";
				else{
				while ($ResNoticias = mysqli_fetch_array($SelConexaoNoticia))
				{
					$NoticiaID     = $ResNoticias['id'];			 
					$NoticiaTitulo = $ResNoticias['titulo'];
					$NoticiaData   = $ResNoticias['data'];
					$NoticiaDesc   = $ResNoticias['descricao'];
			?>
			<article class="ulblog">
				<?php

					$sqlImgExibicaoNoticia = "SELECT * FROM cad_midias_noticias WHERE obraid = '$NoticiaID' ORDER BY fotoid ASC LIMIT 1";
					$SelConexaoImgNoticia = mysqli_query($con, $sqlImgExibicaoNoticia);

					$TotalImgNoticias = mysqli_num_rows($SelConexaoImgNoticia);

					if ($TotalImgNoticias <= '0') echo "<a href=\"index.php?pagina=ver-noticias&id=$NoticiaID\" title=\"$NoticiaTitulo\"><img src=\"tim.php?src=imgs/noticia-off.jpg&w=480&h=360&q=100\" alt=\"$NoticiaTitulo\" title=\"$NoticiaTitulo\" width=\"\"/></a>";
					else{
					while ($ResImgExibicaoNoticia = mysqli_fetch_array($SelConexaoImgNoticia))
					{
						$img_exbicao_id1   = $ResImgExibicaoNoticia['obraid'];
						$img_exbicao_nome1 = $ResImgExibicaoNoticia['nomeimg'];

				?>
				<a href="index.php?pagina=ver-noticias&id=<?php echo $NoticiaID; ?>" title="<?php echo $NoticiaTitulo; ?>"><img src="tim.php?src=admin/midiasnoticias/<?php echo $img_exbicao_nome1; ?>&w=480&h=360&q=100" alt="<?php echo $NoticiaTitulo; ?>" title="<?php echo $NoticiaTitulo; ?>"></a>
				<?php }}?>
				<div class="segtxt">
					<strong><time datetime="<?php echo $NoticiaData; ?>" pubdate><?php echo date('d/m/Y', strtotime($NoticiaData)); ?></time></strong>
					<a href="index.php?pagina=ver-noticias&id=<?php echo $NoticiaID; ?>" title="<?php echo $NoticiaTitulo; ?>"><h2 class="efeito"><?php echo limitarTexto($NoticiaTitulo, $limite = 120); ?></h2></a>
				</div>
			</article>		
			<?php }}?>
		</div><!-- Fim Div Class Content-pagina -->

	</section><!-- Fim Section Class Container pagina -->