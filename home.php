<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?></title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?>"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?>" />
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
	
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-YZW2WHHG06"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-YZW2WHHG06');
	</script>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PZW77SFT');</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PZW77SFT"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="container-header"><!-- Início Header Container-Header -->

	<div class="content-header"><!-- Início Div Class Content-Header -->

		<h1 class="fontzero"><?php echo PG_Title; ?></h1>
		<div class="logo"><a href="index.php" title="<?php echo PG_Title; ?>"><img src="imgs/logo.png" title="<?php echo PG_Title; ?>" alt="<?php echo PG_Title; ?>"></a></div>
		
		<?php include 'menu-responsivo.php'; ?>
		
		<?php include 'menu-linguas.php'; ?>
		
		<?php include 'menu-principal.php'; ?>
		
		<span class="chamada">
			<p>Transformando vidas por meio de Inovação e Excelência</p>
			<a href="index.php?pagina=quem-somos" title="Saiba mais">Saiba mais</a>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-cannabis"><!-- Inicio Section Class Container Cannabis -->

		<div class="content-cannabis"><!-- Início Div Class Content-Cannabis -->

			<h1 class="fontzero">Cannabis Medicinal</h1>

			<div class="grid"><!-- inicio Div Class Grid -->

				<article>
					<h1 class="fontzero">A Cannabis</h1>
					<figure class="effect-bubba">
						<img src="tim.php?src=imgs/cannabis-historia.jpg&w=700&h=500&q=100" alt="A Cannabis" title="A Cannabis" />
						<figcaption>
							<h2>A <span>Cannabis</span></h2>
							<p>Saiba mais</p>
							<a href="index.php?pagina=cannabis#acannabis" title="A Cannabis">Saiba Mais</a>
						</figcaption>			
					</figure>
				</article>

				<article>
				<h1 class="fontzero">Avanços Científicos</h1>
					<figure class="effect-bubba">
						<img src="tim.php?src=imgs/cannabis-avancos-cientificos.jpg&w=700&h=500&q=100" alt="Avanços Científicos da Cannabis" title="Avanços Científicos da Cannabis" />
						<figcaption>
							<h2>Avanços <span>Científicos</span></h2>
							<p>Saiba mais</p>
							<a href="index.php?pagina=cannabis#avancos" title="Saiba Mais">Avanços Científicos da Cannabis</a>
						</figcaption>			
					</figure>
				</article>

				<article>
				<h1 class="fontzero">Cannabis Medicinal</h1>
				<figure class="effect-bubba">
					<img src="tim.php?src=imgs/cannabis-medicinal.jpg&w=700&h=500&q=100" alt="Cannabis Medicinal" title="Cannabis Medicinal" />
					<figcaption>
						<h2>Cannabis <span>Medicinal</span></h2>
						<p>Saiba mais</p>
						<a href="index.php?pagina=cannabis#med" title="Saiba Mais">Saiba Mais</a>
					</figcaption>			
				</figure>
				</article>

			</div><!-- Fim Div Class Grid -->
			
			<p class="txtchamada">A Cannabis Medicinal como <span class="txtgreen">opção terapêutica</span> se mostra eficaz no tratamento de uma variedade de condições, confira algumas:</p>

		</div><!-- Fim Div Class Content-Pesquisa -->

	</section><!-- Fim Section Class Container Pesquisa -->

	<section class="container-tratamentos"><!-- Inicio Section Class Container-Tratamentos -->
		<div class="content-tratamentos"><!-- Início Div Class Content-Tratamentos -->

			<h1 class="fontzero">Algumas Indicações de Tratamentos</h1>
			
			<article class="trat">
				<img src="imgs/icon01.png" alt="Alzheimer" title="Alzheimer">
				<h2>Alzheimer</h2>
				<p>Evidências sugerem que a cannabis pode ajudar a reduzir a agitação e melhorar o sono em pacientes...</p>
				<a href="index.php?pagina=cannabis#alzheimer" title="Saiba mais">Saiba mais</a>
			</article>
			
			<article class="trat">
				<img src="imgs/icon03.png" alt="Ansiedade" title="Ansiedade">
				<h2>Ansiedade</h2>
				<p>Estudos mostram que o CBD, um dos principais compostos da cannabis, pode reduzir a ansiedade e...</p>
				<a href="index.php?pagina=cannabis#ansiedade" title="Saiba mais">Saiba mais</a>
			</article>
			
			<article class="trat">
				<img src="imgs/icon02.png" alt="Depressão" title="Depressão">
				<h2>Depressão</h2>
				<p>Estudos sugerem que a cannabis pode aliviar sintomas de depressão e melhorar o humor, proporcionando...</p>
				<a href="index.php?pagina=cannabis#depressao" title="Saiba mais">Saiba mais</a>
			</article>
			
			<article class="trat">
				<img src="imgs/icon04.png" alt="Esclerose Múltipla" title="Esclerose Múltipla">
				<h2>Esclerose Múltipla</h2>
				<p>Estudos sistemáticos indicam que os canabinoides podem proporcionar alívio significativo para pacientes...</p>
				<a href="index.php?pagina=cannabis#esclerose" title="Saiba mais">Saiba mais</a>
			</article>

			<article class="trat">
				<img src="imgs/icon05.png" alt="TDAH" title="TDAH">
				<h2>TDAH</h2>
				<p>Alguns estudos indicam que a cannabis pode melhorar a atenção e reduzir a impulsividade em pacientes...</p>
				<a href="index.php?pagina=tdah" title="Saiba mais">Saiba mais</a>
			</article>
			
			<article class="trat">
				<img src="imgs/icon06.png" alt="Transtorno do Espectro Autista" title="Transtorno do Espectro Autista">
				<h2>Transtorno do Espectro Autista</h2>
				<p>Pesquisas preliminares indicam que a cannabis pode ajudar a reduzir comportamentos agressivos e...</p>
				<a href="index.php?pagina=cannabis#autismo" title="Saiba mais">Saiba mais</a>
			</article>
		
		<a href="index.php?pagina=cannabis#tratamentos" title="Confira mais tratamentos" class="btn radius">Confira mais tratamentos!</a>
		</div><!-- Fim Div Class Content-Tratamentos -->
	</section><!-- Fim Section Class Container-Tratamentos -->
		
	<section class="container-produtos"><!-- Inicio Section Class Container-Produtos -->

		<div class="content-produtos"><!-- Início Div Class Content-Produtos -->
			
			<div class="content-diferencial"><!-- Início Div Class Content-Diferencial -->

				<div class="ladoa"></div>
				<div class="ladob">
					
					<h2>Regulamentação e o Mercado do Cannabis Medicinal</h2>
					
					<p>O processo de regulamentação e obtenção de licenças para a produção de cannabis medicinal no Paraguai foi uma jornada complexa e cuidadosamente estruturada, refletindo o rigor do governo e a...</p>
					<a href="index.php?pagina=regulamentacao" title="Saiba mais">Saiba mais</a>
				</div>

			</div><!-- Fim Div Class Content-Diferencial -->
			
			<div class="content-exibeproduto"><!-- Início Div Class Content-ExibeProduto -->
				
				<h1 class="titleh1">Nossos Produtos</h1>

				<p class="txtchamadaprod">Estamos na vanguarda da excelência e inovação na produção de <span class="txtgreen">cannabis medicinal.</span></p>
				
				<article class="articleprod">
					<img src="tim.php?src=imgs/prod1.jpg&w=800&h=600&q=100" alt="Cultivo e Colheita" title="Cultivo e Colheita">
					<h2>Cultivo e Colheita de Flores de Cannabis</h2>
					<a href="index.php?pagina=produtos#primeira" title="Cultivo e Colheita">Saiba mais</a>
				</article>
				
				<article class="articleprod">
					<img src="tim.php?src=imgs/prod2.jpg&w=800&h=600&q=100" alt="Insumos Farmacêuticos Ativo (IFA)" title="Insumos Farmacêuticos Ativo (IFA)">
					<h2>Insumos Farmacêuticos Ativo (IFA)</h2>
					<a href="index.php?pagina=produtos#segunda" title="Insumos Farmacêuticos Ativo (IFA)">Saiba mais</a>
				</article>
				
				<article class="articleprod">
					<img src="tim.php?src=imgs/prod3.jpg&w=800&h=600&q=100" alt="Centro Químico-Farmacêutico" title="Centro Químico-Farmacêutico">
					<h2>Centro Químico-Farmacêutico</h2>
					<a href="index.php?pagina=produtos#terceira" title="Centro Químico-Farmacêutico">Saiba mais</a>
				</article>

			</div><!-- Fim Div Class Content-ExibeProduto -->

		</div><!-- Fim Div Class Content-Produtos -->
	</section><!-- Fim Section Class Container-Produtos -->
		
	<section class="container-cannabishistoria"><!-- Inicio Section Class Container-CannabisHistoria -->

		<div class="content-cannabishistoria"><!-- Início Div Class Content-CannabisHistoria -->

			<div class="segtxt">
			
				<h1>Cannabis: Uma Longa Tradição na Medicina</h1>
				
				<p class="txtdestaquehist">A cannabis tem uma longa história de uso medicinal, remontando a civilizações antigas como China, Egito e Grécia, onde era empregada por exemplo para tratar inflamações e dores.</p>
				
				<p>No entanto, no início do século XX, a crescente pressão global para combater o uso de drogas resultou em uma regulamentação rigorosa, que restringiu o uso medicinal da cannabis e limitou os esforços de pesquisa.</p>
				<p>Esse cenário começou a mudar com o isolamento do canabidiol (CBD) e do tetrahidrocanabinol (THC) na década de 1960 e a descoberta do sistema endocanabinoide na década de 1990.</p>
				
				<a href="index.php?pagina=cannabis" title="Saiba mais">Saiba mais</a>
			</div>

		</div><!-- Fim Div Class Content-CannabisHistoria -->

	</section><!-- Fim Section Class Container-CannabisHistoria -->