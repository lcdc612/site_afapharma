<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?> - Produtos/Serviços</title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<!--<link rel="publisher" href="Agência Digital ESC  - www.agenciaesc.com.br"/>-->
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?> - Produtos/Serviços"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?> - Produtos/Serviços" />
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
	<header class="container-header header-pgprod"><!-- Início Header Container-Header-Pg -->

	<div class="content-header content-pg"><!-- Início Div Class Content-Header-PG -->

		<h1 class="fontzero"><?php echo PG_Title; ?></h1>
		<div class="logo"><a href="index.php" title="<?php echo PG_Title; ?>"><img src="imgs/logo.png" title="<?php echo PG_Title; ?>" alt="<?php echo PG_Title; ?>"></a></div>
		
		<?php include 'menu-responsivo.php'; ?>
		
		<?php include 'menu-linguas.php'; ?>
		
		<?php include 'menu-principal.php'; ?>
		
		<span class="chamadapg">
			<p>Produtos/Serviços</p>
			<div class="navegacao">
				<p><a href="index.php">Home</a> &raquo; Produtos/Serviços</p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina produtobg"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->
			
			<h1 class="fontzero">Produtos/Serviços</h1>
					
			<article class="prod1">
				
				<div class="txtprod" id="primeira">
					<h2>Cultivo e Colheita de Flores de Cannabis</h2>

					<p>Atualmente, estamos em uma fase de cultivo e colheita de flores de cannabis medicinal. Nossas casas de germinação casas de vegetação agrícolas de última geração, situadas na Grande Assunção, cobrem 15 mil m2 e são totalmente controladas para assegurar condições ideais de crescimento. Adotamos práticas de cultivo orgânico e utilizamos sementes geneticamente modificadas para produzir altos teores de CBD.</p>
					<p>Além disso, oferecemos a possibilidade de cultivar flores com concentrações personalizadas de THC, em parceria com laboratórios internacionais, garantindo produtos que atendem às especificações de nossos parceiros globais.</p>

					<p><strong>Flores Liofilizadas:</strong> Disponíveis para venda, nossas flores de cannabis medicinal são cultivadas sob rigorosos padrões de qualidade e, após a colheita, passam por um processo de liofilização. Esse processo preserva os componentes químicos essenciais e assegura o teor de água adequado, garantindo um produto premium para nossos clientes. As flores liofilizadas são fundamentais na produção interna do Insumo Farmacêutico Ativo (IFA), e com o uso de tecnologia de ponta, garantimos que elas cheguem ao destino final com a mais alta qualidade, mantendo suas propriedades terapêuticas.</p>

					<p><strong>Produção Interna de IFA:</strong> As flores colhidas serão processadas internamente para produzir Insumo Farmacêutico Ativo (IFA) de alta pureza, assegurando a qualidade, eficácia e segurança de nossos produtos finais, em conformidade com os graus farmacêuticos.</p>
				</div>
				
				<div class="imgprod">
					<img src="tim.php?src=imgs/prod1.jpg&w=800&h=600&q=100" alt="Cultivo e Colheita de Flores de Cannabis" title="Cultivo e Colheita de Flores de Cannabis">
				</div>
			</article>
			
			<article class="prod2" id="segunda">
							
				<div class="txtprod right">
					<h2>Insumo Farmacêutico Ativo (IFA)</h2>

					<p>Em breve, iniciaremos a produção completa do Insumo Farmacêutico Ativo (IFA), um componente essencial na formulação de medicamentos à base de cannabis.</p>
					<p>Nosso compromisso é garantir que o IFA produzido atenda aos mais altos padrões da indústria farmacêutica global.</p>
					<p>Para isso, utilizaremos processos rigorosos de extração e purificação, assegurando que o IFA contenha a máxima concentração de princípios ativos, resultando em produtos medicinais altamente eficazes e seguros.</p>
				</div>
				
				<div class="imgprod left">
					<img src="tim.php?src=imgs/prod3.jpg&w=800&h=600&q=100" alt="Insumo Farmacêutico Ativo (IFA)" title="Insumo Farmacêutico Ativo (IFA)">
				</div>
			
			</article>

			<article class="prod1" id="terceira">
				
				<div class="txtprod">
					<h2>Centro Químico-Farmacêutico (Conclusão Prevista para 2026)</h2>

					<p>Estamos em fase de implementação de um Centro Químico-Farmacêutico de última geração, projetado para atender aos padrões mais rigorosos da indústria farmacêutica mundial, incluindo os requisitos de agências reguladoras do Brasil, Estados Unidos e União Europeia.</p>
					<p>Projetado com tecnologia de ponta, este laboratório, com conclusão prevista para meados de 2026, nos permitirá conduzir todo o processo de produção de medicamentos à base de cannabis, desde a extração do IFA até a formulação e embalagem dos produtos.</p>
					<p>Esse avanço reflete nosso compromisso contínuo com a qualidade, inovação e conformidade internacional.</p>
				</div>
				
				<div class="imgprod">
					<img src="tim.php?src=imgs/prod2.jpg&w=800&h=600&q=100" alt="Centro Químico-Farmacêutico" title="Centro Químico-Farmacêutico">
				</div>
			</article>
			
<!--	
			<p class="txtespacobotton">No Grupo AFA, estamos comprometidos em transformar vidas através da inovação e excelência em cada etapa de nosso processo produtivo. Continuamos a expandir e evoluir, alinhando-nos às melhores práticas globais e promovendo o bem-estar e a sustentabilidade em todas as nossas operações.</p>
			
		<div class="segtxtpg">
				
				
				<p class="txtdestaquehist">O Grupo AFA é uma força motriz na transformação da vida das pessoas através da inovação e excelência.</p>
				
				<p>Fundado por Antonio, Fabio e Alberto, empresários visionários do Brasil e Paraguai, o grupo identificou uma oportunidade única no mercado emergente de cannabis medicinal no Paraguai.</p>
				<p>Com um profundo conhecimento do setor farmacêutico e uma paixão por inovações que impactam vidas, eles se uniram para criar algo extraordinário.</p>
				<p>Antonio, com mais de 30 anos de experiência no setor farmacêutico brasileiro, liderou o grupo na competição por uma das poucas licenças concedidas pelo governo paraguaio, superando multinacionais renomadas e estabelecendo as bases do Grupo AFA.</p>
				<p>O sucesso veio com um projeto exemplar que cumpriu todos os requisitos governamentais, estabelecendo um padrão de excelência desde o início.</p>
				<p>O Grupo AFA não se limita apenas à cannabis medicinal. Nossa abordagem é holística e voltada para o futuro.</p>
				<p>Em parceria com a UNESP - Universidade Estadual Paulista, uma das mais respeitadas instituições de ensino da América Latina, e com o apoio de médicos, pós-doutores e especialistas multidisciplinares, estamos transformando ideias inovadoras em realidades que melhoram vidas.</p>
			</div>-->

		</div><!-- Fim Div Class Content-pagina -->

	</section><!-- Fim Section Class Container pagina -->