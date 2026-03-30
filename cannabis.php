<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?> - A Cannabis</title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<!--<link rel="publisher" href="Agência Digital ESC  - www.agenciaesc.com.br"/>-->
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?> - A Cannabis"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?> - A Cannabis" />
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
			<p>A Cannabis</p>
			<div class="navegacao">
				<p><a href="index.php">Home</a> &raquo; A Cannabis</p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina produtobg"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->
			
			<h1 class="fontzero" id="acannabis">A Cannabis</h1>
			
			<p class="txtespacotop">A cannabis tem uma longa história de uso medicinal, remontando a civilizações antigas como China, Egito e Grécia, onde era empregada por exemplo para tratar inflamações e dores.
			<p>No entanto, no início do século XX, a crescente pressão global para combater o uso de drogas resultou em uma regulamentação rigorosa, que restringiu o uso medicinal da cannabis e limitou os esforços de pesquisa.</p>
			<p>Esse cenário começou a mudar com o isolamento do canabidiol (CBD) e do tetrahidrocanabinol (THC) na década de 1960 e a descoberta do sistema endocanabinoide na década de 1990.</p>
			<p>Esses avanços científicos reavivaram o interesse na pesquisa sobre as propriedades terapêuticas da cannabis, levando a um novo entendimento sobre seus benefícios medicinais. </p>
			
			<article class="prod1">
				
				<div class="txtprod" id="primeira">
					<h2>História e Marcos</h2>
					
					<p><strong>100 d.C.:</strong> O médico grego Pedanios Dioscorides documenta o uso medicinal da cannabis.</p>
					<p><strong>1800s:</strong> O médico irlandês William Brooke O’Shaughnessy publica um dos primeiros estudos modernos defendendo o uso medicinal da cannabis.</p>
					<p><strong>1930s:</strong> Sob a liderança de Harry J. Anslinger, Comissário de Narcóticos dos EUA, a cannabis passa a ser fortemente regulamentada, resultando em restrições globais ao seu uso medicinal.</p>
					<p><strong>1940s:</strong> O químico americano Roger Adams isola (sem determinar a estrutura química) com sucesso o canabidiol (CBD), um dos principais compostos da cannabis.</p>
					<p><strong>1960s:</strong> O químico búlgaro Prof. Dr. Raphael Mechoulam que trabalhava na Universidade de Telaviv isola e determina as estrutras químicas do CBD e do THC , principais compostos bioativos da cannabis.</p>
					<p><strong>1970s:</strong> O médico brasileiro Prof. Dr. Elisaldo Carlini da Universidade  Federal de São Paulo, em parceria com o Prof. Mechoulam, realiza os primeiros estudos comprovando o potencial do CBD na epilepsia.</p>
					<p><strong>1990s:</strong> A descoberta do sistema endocanabinoide no cérebro humano abre caminho para uma nova era de pesquisa sobre os benefícios terapêuticos da cannabis.</p>

				</div>
				
				<div class="imgprod">
					<img src="tim.php?src=imgs/prod1.jpg&w=800&h=600&q=100" alt="A Cannabis - História e Marcos" title="A Cannabis - História e Marcos">
				</div>
			</article>
			
			<article class="prod2" id="segunda">
							
				<div class="txtprod right" id="avancos">
					<h2>Avanços Científicos</h2>

					<p>O Grupo AFA está na linha de frente da pesquisa científica em cannabis medicinal, colaborando ativamente em estudos observacionais e de casos.</p>
					<p>Esses estudos são conduzidos em parceria com a UNESP—Universidade Estadual Paulista, reconhecida internacionalmente por sua excelência acadêmica e científica.</p>
					<p>O envolvimento da UNESP traz ao Grupo AFA um diferencial significativo, com acesso direto a um time de pesquisadores renomados, incluindo pós-doutores e especialistas em Farmacognosia e Química de Produtos Naturais.</p>
					<p>Essa parceria não só fortalece nossa capacidade de inovação, mas também nos permite desenvolver novos cultivares que atendem às exigências em constante evolução do mercado.</p>
					<p>Ao integrar a expertise científica da UNESP, o Grupo AFA se mantém na vanguarda das descobertas e avanços que estão redefinindo o futuro da cannabis medicinal</p>
				</div>
			
				<div class="imgprod left">
					<img src="tim.php?src=imgs/prod3.jpg&w=800&h=600&q=100" alt="A Cannabis - Avanços Científicos" title="A Cannabis - Avanços Científicos">
				</div>
			</article>

			<article class="prod1" id="med">
				
				<div class="txtprod">
					<h2>Cannabis Medicinal como Opção Terapêutica</h2>

					<p>Nos últimos anos, o interesse pela cannabis medicinal foi revitalizado, impulsionado pela recente descoberta do sistema endocanabinoide, e tratamentos eficazes em casos clínicos em que outras abordagens não surtem tanto efeito, surgindo assim a necessidade de atualizar e expandir o conhecimento histórico sobre suas propriedades terapêuticas.</p>
					<p>A cannabis medicinal como opção terapêutica  contempla uma ampla gama de produtos eabordagens clínicas, com diferentes propriedades que ampliam seus potenciais usos e tratamentos, muitos deles ainda inexplorados, sendo considerada a grande inovação em saúde do século XXI.</p>
					<p>Estudar as diferentes possibilidades de composição química da cannabis é essencial para compreender plenamente seu potencial terapêutico.</p>
					<p>Com a mudança na percepção pública e científica sobre a cannabis, o número de publicações científicas sobre o tema cresceu exponencialmente.</p>
					<p>Em 2015, havia cerca de 1.600 publicações; em 2020, esse número subiu para 2.300, refletindo uma tendência crescente na pesquisa sobre os benefícios e aplicações da cannabis medicinal.</p>
					<p>A cannabis medicinal tem se mostrado eficaz no tratamento de uma variedade de condições, especialmente em casos onde os pacientes não obtiveram alívio suficiente com medicamentos convencionais ou enfrentaram efeitos adversos severos.</p>
					<p>No entanto, ela não deve ser vista apenas como um medicamento de "último recurso”.</p>
					<p>Estudos indicam evidências promissoras de sua eficácia no tratamento de várias doenças, destacando seu papel como uma opção terapêutica valiosa.</p>
					<p>Em geral, a pesquisa sugere que a cannabis medicinal não cura doenças, mas pode aliviar sintomas ou retardar a progressão de determinadas condições, resultando em uma melhora significativa na qualidade de vida dos pacientes.</p>
					
				</div>
				
				<div class="imgprod">
					<img src="tim.php?src=imgs/prod2.jpg&w=800&h=600&q=100" alt="Cannabis Medicinal como Opção Terapêutica" title="Cannabis Medicinal como Opção Terapêutica">
				</div>
			</article>

		</div><!-- Fim Div Class Content-pagina -->

	</section><!-- Fim Section Class Container pagina -->
	
	<section class="container-video"><!-- Inicio Section Class Container Vídeo -->
		<h1 class="fontzero">Tratamento variados com a Cannabis</h1>
		<div class="bg-video"><video autoplay muted loop src="imgs/cannabis.mp4"></video></div>
		
		<div class="content-video"><!-- Início Div Class Content-Video -->
			
			<p>A cannabis medicinal tem se mostrado eficaz no tratamento de uma variedade de condições, especialmente em casos onde os pacientes não obtiveram alívio suficiente com medicamentos convencionais ou enfrentaram efeitos adversos severos.</p>
			<p>No entanto, ela não deve ser vista apenas como um medicamento de "último recurso”. Estudos indicam evidências promissoras de sua eficácia no tratamento de várias doenças, destacando seu papel como uma opção terapêutica valiosa.</p>
			<p>Em geral, a pesquisa sugere que a cannabis medicinal não cura doenças, mas pode aliviar sintomas ou retardar a progressão de determinadas condições, resultando em uma melhora significativa na qualidade de vida dos pacientes.</p>
		</div><!-- Fim Div Class Content-Video -->
		
	</section><!-- Fim Section Class Container Vídeo -->	
		
		<section class="container-paginaprod"><!-- Inicio Section Class Container PáginaProd -->

		<div class="content-paginaprod"><!-- Início Div Class Content-PáginaProd -->
			
			<div class="segtxt">
				<h1>Os Benefícios da Cannabis</h1>
				<p><strong>Dor Neuropática:</strong> Os canabinoides têm mostrado eficácia no alívio da dor neuropática associada a diversas condições, como diabetes, quimioterapia, trauma e HIV.</p>
				<p>Uma meta-análise publicada no Annals of Internal Medicine destaca que os canabinoides podem ser uma opção eficaz para aliviar a dor neuropática, oferecendo uma alternativa para pacientes que sofrem de dores crônicas difíceis de tratar</p>
				<p id="esclerose"><strong>Esclerose Múltipla:</strong> Estudos sistemáticos indicam que os canabinoides podem proporcionar alívio significativo para pacientes com esclerose múltipla, especialmente na dor nervosa central e espasmos dolorosos.</p>
				<p>Um estudo multicêntrico europeu demonstrou que medicamentos à base de cannabis não só reduzem a espasticidade, mas também melhoram a frequência dos espasmos e a qualidade do sono, proporcionando uma melhoria na qualidade de vida desses pacientes.</p>
				<p><strong>Dores Relacionadas ao Câncer:</strong> Medicamentos à base de cannabis têm se mostrado eficazes como parte do tratamento da dor em pacientes com câncer.</p>
				<p>Para aqueles que não obtêm alívio suficiente com analgésicos tradicionais, a adição de canabinoides à terapia pode oferecer uma melhora significativa no controle da dor.</p>
				<p id="nauseas"><strong>Náusea e Vômito Induzidos pela Quimioterapia:</strong> Os canabinoides, especialmente o THC, foram inicialmente estudados na década de 1970 por suas propriedades antieméticas. Desde então, vários estudos e meta-análises têm confirmado que o THC é eficaz no alívio de náuseas e vômitos em pacientes submetidos à quimioterapia, tornando-o uma ferramenta valiosa no manejo dos efeitos colaterais
desse tratamento.</p>
				<p id="anorexia"><strong>Anorexia e Caquexia:</strong> Os efeitos estimulantes do apetite dos canabinoides têm sido explorados em pacientes com câncer e HIV.
				<p>Estudos demonstram que o THC pode melhorar significativamente o apetite e o humor em pacientes com caquexia, especialmente em estágios avançados do câncer, promovendo uma melhor nutrição e qualidade de vida.</p>
			</div>
		</div><!-- Fim Div Class Content-PáginaProd -->

	</section><!-- Fim Section Class Container-PáginaProd -->
	
	<section class="container-paginatrat" id="tratamentos"><!-- Inicio Section Class Container Página-Tratamento -->

		<div class="content-paginatrat"><!-- Início Div Class Content Página-Tratamento -->
					
			<article class="trat" id="artrite">
				<img src="imgs/icon01.png" alt="Artrite" title="Artrite">
				<h2>Artrite</h2>
				<p>Pesquisas demonstram que a cannabis pode aliviar a dor e a inflamação em pacientes com artrite, resultando em melhor mobilidade e qualidade de vida.</p>
			</article>
			
			<article class="trat" id="fibromialgia">
				<img src="imgs/icon02.png" alt="Fibromialgia" title="Fibromialgia">
				<h2>Fibromialgia</h2>
				<p>Evidências sugerem que a cannabis é eficaz no alívio da dor crônica e na melhoria do sono em pacientes com fibromialgia, proporcionando um alívio significativo dos sintomas.</p>
			</article>
			
			<article class="trat" id="hiv">
				<img src="imgs/icon03.png" alt="HIV/AIDS" title="HIV/AIDS">
				<h2>HIV/AIDS</h2>
				<p>Estudos indicam que a cannabis pode ajudar a aliviar a dor neuropática associada ao HIV e estimular o apetite, contribuindo para uma melhor qualidade de vida dos pacientes.</p>
			</article>
			
			<article class="trat" id="tensao">
				<img src="imgs/icon04.png" alt="Tensão Pré-Menstrual" title="Tensão Pré-Menstrual">
				<h2>TPM - Tensão Pré-Menstrual</h2>
				<p>Pesquisas sugerem que a cannabis pode aliviar sintomas como cólicas e dores associadas à tensão pré-menstrual, proporcionando conforto durante o ciclo menstrual.</p>
			</article>
			
			<article class="trat" id="tdah">
				<img src="imgs/icon03.png" alt="TDAH" title="TDAH">
				<h2>TDAH</h2>
				<p>Alguns estudos indicam que a cannabis pode melhorar a atenção e reduzir a impulsividade em pacientes com TDAH, oferecendo uma alternativa potencial para o manejo dos sintomas.</p>
			</article>
			
			<article class="trat" id="alzheimer">
				<img src="imgs/icon06.png" alt="Alzheimer" title="Alzheimer">
				<h2>Alzheimer</h2>
				<p>Evidências sugerem que a cannabis pode ajudar a reduzir a agitação e melhorar o sono em pacientes com Alzheimer, melhorando a qualidade de vida desses indivíduos.</p>
			</article>
			
			<article class="trat" id="ansiedade">
				<img src="imgs/icon01.png" alt="Ansiedade" title="Ansiedade">
				<h2>Ansiedade</h2>
				<p>Estudos mostram que o CBD, um dos principais compostos da cannabis, pode reduzir a ansiedade e promover o bem-estar em indivíduos com transtornos de ansiedade.</p>
			</article>
			
			<article class="trat" id="autismo">
				<img src="imgs/icon05.png" alt="Autismo" title="Autismo">
				<h2>Transtorno do Espectro Autista</h2>
				<p>Pesquisas preliminares indicam que a cannabis pode ajudar a reduzir comportamentos agressivos e melhorar a comunicação em pacientes com autismo, oferecendo uma nova esperança para essas famílias.</p>
			</article>
			
			<article class="trat" id="depressao">
				<img src="imgs/icon06.png" alt="Depressão" title="Depressão">
				<h2>Depressão</h2>
				<p>Estudos sugerem que a cannabis pode aliviar sintomas de depressão e melhorar o humor, proporcionando uma abordagem adicional no tratamento da depressão.</p>
			</article>
			
			<article class="trat" id="epilepsia">
				<img src="imgs/icon06.png" alt="Epilepsia" title="Epilepsia">
				<h2>Epilepsia</h2>
				<p>Pesquisas demonstram que o CBD pode reduzir a frequência e a gravidade das crises epilépticas, especialmente em casos de epilepsia resistente a tratamentos tradicionais.</p>
			</article>
			
			<article class="trat" id="toc">
				<img src="imgs/icon02.png" alt="TOC" title="TOC">
				<h2>TOC - Transtorno Obsessivo Compulsivo</h2>
				<p>Estudos indicam que a cannabis pode ajudar a reduzir os sintomas de TOC, incluindo comportamentos compulsivos, oferecendo uma nova opção de tratamento.</p>
			</article>
			
			<article class="trat" id="tept">
				<img src="imgs/icon04.png" alt="TEPT" title="TEPT">
				<h2>TEPT - Transtorno de Estresse Pós-traumático</h2>
				<p>Pesquisas sugerem que a cannabis pode aliviar os sintomas de TEPT, como ansiedade e insônia, proporcionando um alívio significativo para os pacientes.</p>
			</article>
			
			<p class="txtbottonjustify">No Grupo AFA, nosso compromisso é claro: Líderes na produção e pesquisa de cannabis medicinal, dedicados a transformar vidas e promover o bem-estar global. Estamos constantemente buscando inovações que possam melhorar a saúde mental e a qualidade de vida das pessoas em todo o mundo.</strong>.</p>
		</div><!-- Fim Div Class Content Página-Tratamento -->

	</section><!-- Fim Section Class Container Página-Tratamento -->
	