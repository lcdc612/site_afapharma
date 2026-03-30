<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?> - Quem Somos</title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<!--<link rel="publisher" href="Agência Digital ESC  - www.agenciaesc.com.br"/>-->
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?> - Quem Somos"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?> - Quem Somos" />
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
	<script type="text/javascript" src="_cdn/jquery.cbpNTAccordion.min.js"></script>
	
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<script>
		Shadowbox.init();
		
		$( function() {
			$( '#cbp-ntaccordion' ).cbpNTAccordion();
		} );
	</script>
</head>
<body>
	<header class="header-pg-video"><!-- Início Header Container-Header-Pg -->
	
		<div class="bg-video"><video autoplay muted loop src="imgs/cannabis.mp4"></video></div>
		
	<div class="content-header content-pg"><!-- Início Div Class Content-Header-PG -->
		
		<h1 class="fontzero"><?php echo PG_Title; ?></h1>
		<div class="logo"><a href="index.php" title="<?php echo PG_Title; ?>"><img src="imgs/logo.png" title="<?php echo PG_Title; ?>" alt="<?php echo PG_Title; ?>"></a></div>
		
		<?php include 'menu-responsivo.php'; ?>
		
		<?php include 'menu-linguas.php'; ?>
		
		<?php include 'menu-principal.php'; ?>
		
		<span class="chamadapg">
			<p>Quem somos</p>
			<div class="navegacao">
				<p><a href="index.php">Home</a> &raquo; Quem Somos</p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->

			<div class="segimgpg">
				<img src="tim.php?src=imgs/quem-somos-bg.jpg&w=800&h=600&q=100" alt="AFA Pharma" title="AFA Pharma">
			</div>
			
			<div class="segtxtpg">
				<h1 class="fontzero">Quem somos</h1>
				
				<p class="txtdestaquehist">O Grupo AFA é um catalisador na transformação de vidas, combinando inovação e excelência em cada passo.</p>
				
				<p>Fundado por Antonio, Fabio e Alberto—empresários visionários com raízes no Brasil e Paraguai—o grupo identificou uma oportunidade singular no emergente mercado de cannabis medicinal no Paraguai. </p>
				<p>Com um vasto conhecimento no setor farmacêutico e uma paixão inabalável por inovações que impactam positivamente a vida das pessoas, eles se uniram para criar algo verdadeiramente extraordinário.</p>
				<p>Antonio, com mais de 30 anos de experiência no setor farmacêutico brasileiro, liderou o grupo na conquista de uma das raras licenças concedidas pelo governo paraguaio, superando multinacionais de renome e lançando as bases do que se tornaria o Grupo AFA.</p>
				<p>O sucesso veio com um projeto exemplar que atendeu a todos os rigorosos requisitos governamentais, estabelecendo desde o início um padrão de excelência.</p>
				<p>Mas o Grupo AFA vai além da cannabis medicinal.</p>
				<p>Nossa abordagem é holística e voltada para o futuro.</p>
				<p>Em parceria com a UNESP—Universidade Estadual Paulista, uma das instituições de ensino mais respeitadas da América Latina—e com o apoio de pesquisadores, pósdoutores e especialistas de diversas áreas, estamos transformando ideias inovadoras em realidades que melhoram a vida das pessoas.</p>
			</div>

		</div><!-- Fim Div Class Content-pagina -->
		
		<div class="segimgdesc"><img src="tim.php?src=imgs/destaque-quem-somos.jpg&w=1920&h=600&q=100" alt="AFA Pharma - Quem Somos" title="AFA Pharma - Quem Somos"></div>

	</section><!-- Fim Section Class Container pagina -->
	
	<section class="container-pagina-historia"><!-- Inicio Section Class Container Página Tragetória -->
		
		<h1 class="fontzero">História - AFA Pharma</h1>
		
		<article class="trajetoria">
			<h2>Nossa Trajetória</h2>

			<p class="txtdestaquehist">O Grupo AFA é um motor de transformação na vida das pessoas, impulsionado pela inovação e excelência.</p>

			<p>Nosso percurso se inicia com o cultivo de cannabis medicinal em uma propriedade com 15 mil m2 de casas de vegetação agrícolas totalmente controladas, localizadas na região metropolitana de Assunção.</p>
			<p>Adotamos o cultivo orgânico e utilizamos sementes com genética selecionada para garantir um alto teor de produção de CBD, seguindo rigorosamente os mais elevados padrões de boas práticas agrícolas.</p>
			<p>Com essa fase já concluída, estamos prontos para avançar para a próxima etapa: a construção do nosso laboratório, que em breve será uma realidade.</p>
		</article>
		
		<article class="proximopassos">
			<h2>Próximos Passos</h2>
				
			<p>Nosso laboratório foi projetado para atender aos mais rigorosos padrões da indústria farmacêutica mundial e está equipado com tecnologia de ponta, focado na produção final de medicamentos de alta qualidade.</p>
			<p>Atualmente, disponibilizamos flores de cannabis que passam por um processo de liofilização, que preserva seus componentes químicos essenciais e assegura o teor de água adequado para cada finalidade.</p>
			<p>Embora liofilizadas, essas flores mantêm sua qualidade superior e estão disponíveis para venda imediata, sendo fundamentais na produção interna do Insumo Farmacêutico Ativo (IFA).</p>
			<p>Em breve, em parceria com um laboratório especializado e utilizando nossa própria matéria-prima, teremos nosso próprio Insumo Farmacêutico Ativo (IFA), consolidando nossa posição no mercado enquanto avançamos na construção do laboratório.</p>
		</article>

	</section><!-- Fim Section Class Container Página Tragetória -->
	
	<section class="container-pagina-linhatempo"><!-- Inicio Section Class Container Página Linha do Tempo -->

		<div class="content-pagina-linhatempo"><!-- Início Div Class Content-Página Linha do Tempo -->
			
			<h1>Linha do Tempo</h1>
				
			<ul class="cbp_tmtimeline">
					<li>
						<time class="cbp_tmtime" datetime="2019-01"><span>01/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Janeiro de 2019</h2>
							<p>Criação da empresa e formação da equipe central. Aprovação do Conselho do Grupo AFA para o desenvolvimento do projeto e a obtenção da Licença para a Produção de Óleo de Cannabis Medicinal.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2019-06"><span>07/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2 class="txtcolor">Julho 2019</h2>
							<p class="txtcolor">Aquisição de uma propriedade de 16 ha em Villeta, destinada à futura construção de estufas e plantio. Início da colaboração com a UNESP—Universidade Estadual Paulista.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2019-08"><span>08/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-mail"></div>
						<div class="cbp_tmlabel">
							<h2>Agosto 2019</h2>
							<p>Lançamento da divisão de industrialização de preformas injetadas—AFA Plast, com investimentos significativos para impulsionar essa nova etapa.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2019-09"><span>10/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2 class="txtcolor">Outubro 2019</h2>
							<p class="txtcolor">Apresentação de um projeto robusto, elaborado em colaboração com a UNESP, ao governo e às autoridades paraguaias, com o objetivo de obter a Licença para a Produção de Óleo de Cannabis Medicinal—AFA Pharma. O projeto destacou-se pela sua qualidade e alinhamento com os mais altos padrões regulatórios, refletindo o compromisso do Grupo AFA com a excelência no setor.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2019-11"><span>11/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<h2>Novembro 2019</h2>
							<p>Lançamento da divisão especializada em steel frame—AFA STEEL, com investimentos robustos em equipamentos e infraestrutura de ponta.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2019-12"><span>12/2019</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<h2 class="txtcolor">Dezembro 2019</h2>
							<p class="txtcolor">Aquisição da empresa brasileira—AFA do Brasil, estabelecendo a base para uma futura distribuidora dos produtos da AFA Pharma no mercado brasileiro, fortalecendo a presença do Grupo AFA na América Latina.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2020-02"><span>02/2020</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>Fevereiro 2020</h2>
							<p>Após um rigoroso processo de avaliação, o Grupo AFA S.A. conquista a licença para a Produção de Óleo Medicinal de Cannabis, posicionando-se como um dos poucos autorizados a atuar na indústria de cannabis medicinal no Paraguai.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2021-09"><span>09/2021</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2 class="txtcolor">Setembro 2021</h2>
							<p class="txtcolor">Publicação no Diário Oficial do Estado de São Paulo do Convênio de Cooperação Científica nº 2100.0247 entre o Grupo AFA S.A. e a UNESP —Universidade Estadual Paulista.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2023-10"><span>10/2023</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Outubro 2023</h2>
							<p>Aquisição de uma segunda propriedade de 6 ha para a construção de um laboratório químico-farmacêutico contendo 15 mil m2 de casas de vegetação agrícolas totalmente controladas, localizadas na região metropolitana de Assunção</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2024-07"><span>07/2024</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2 class="txtcolor">Julho 2024</h2>
							<p class="txtcolor">Início do cultivo de plantas de Cannabis Medicinal, com suporte técnico da UNESP — Universidade Estadual Paulista.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2024-08"><span>08/2024</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>Agosto 2024</h2>
							<p>A Divisão AFA STEEL une forças com a Construtora Guzzo do Brasil, dando origem à joint venture "AFA STEEL Brasil—Paraguay". Essa nova parceria é focada na distribuição, incorporações e construções de obras pré-fabricadas em steel frame no território brasileiro. A joint venture se compromete a entregar construções de altíssima qualidade, respeitando os mais altos padrões de qualidade e cumprindo rigorosamente as normas e legislações brasileiras e norte americanas.</p>
						</div>
					</li>
				</ul>

		</div><!-- Fim Div Class Content-Página Linha do Tempo -->
		
		<section class="container-pagina-missao"><!-- Inicio Section Class Container Página Missão, Visão e Valores -->

			<div class="content-pagina-missao"><!-- Início Div Class Content-Página Missão, Visão e Valores -->

				<h1 class="fontzero">Missão, Visão e Valores</h1>

				<article class="item">
					<h2>Missão</h2>
					<p>Transformar vidas com inovação, excelência e ética, criando soluções que promovem bem-estar e sustentabilidade.</p>
				</article>
				
				<article class="item">
					<h2>Visão</h2>
					<p>Estabelecer o Grupo AFA como um participante relevante no mercado sul-americano de cannabis medicinal, comprometido com a inovação, excelência e crescimento sustentável, enquanto colaboramos com líderes do setor e seguimos as melhores práticas globais para oferecer produtos de alta qualidade que melhorem a vida das pessoas.</p>
				</article>
				
				<article class="item">
					<h2>Valores</h2>
					<p><strong>Inovação:</strong> Movidos pela criatividade, buscamos constantemente transformar o mundo.</p>
					<p><strong>Ética:</strong> Atuamos com transparência, honestidade e integridade.</p>
					<p><strong>Excelência:</strong> Comprometidos com os mais altos padrões de qualidade.</p>
					<p><strong>Paixão:</strong> Trabalhamos com entusiasmo para causar um impacto positivo duradouro.</p>
					<p><strong>Responsabilidade Social e Ambiental:</strong> Praticamos a sustentabilidade e cuidamos das comunidades onde operamos.</p>
				</article>
				
			</div><!-- Fim Div Class Content-Página Missão, Visão e Valores -->

		</section><!-- Fim Section Class Container Missão, Visão e Valores -->

	</section><!-- Fim Section Class Container Página Linha do Tempo -->
	
	<section class="container-pagina-diferencial" id="diferenciais"><!-- Inicio Section Class Container Página Diferencial -->

		<div class="content-pagina-diferencial"><!-- Início Div Class Content-Página Diferencial -->
			
			<h1>Nossos Diferenciais</h1>
			
			<p>No Grupo AFA, nosso compromisso é oferecer soluções de cannabis medicinal que atendam os mais elevados padrões globais de qualidade, eficácia e segurança. Nosso potencial no setor é impulsionado por uma combinação única de inovação tecnológica, parcerias estratégicas e uma cultura inabalável de seriedade e transparência.</p>
			<p>Aqui estão os principais diferenciais que nos destacam no mercado:</p>
			
			<ul id="cbp-ntaccordion" class="cbp-ntaccordion">
				
				<li>
					<h3 class="cbp-nttrigger">Parceria Prestigiada com a UNESP</h3>
					<div class="cbp-ntcontent">
						<p>Nossa exclusiva colaboração internacional com a Universidade Estadual Paulista (UNESP), uma das melhores do mundo, fortalece nossa credibilidade e capacidade de inovação.
						<p>Com o apoio de um time de pesquisadores renomados, incluindo pós-doutores, doutores, mestres e especialistas, desenvolvemos produtos de excelência comprovada.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">A UNESP — Universidade Estadual Paulista</h3>
					<div class="cbp-ntcontent">
						<img src="imgs/svg/logo-unesp.png" alt="UNESP Paulista" title="Unesp Paulista" class="diferenciais">
						<p>O Grupo de Pesquisa da UNESP em Cannabis Medicinal é formado pelos Laboratórios de Farmacognosia e de Botânica do Departamento de Fármacos e Medicamentos da Faculdade de Ciências Farmacêuticas (FCF) da Universidade Estadual Paulista - UNESP, campus de Araraquara-SP (Brasil), uma instituição pública com mais de 100 anos e reconhecida como uma das melhores e maiores universidades do Brasil e da América Latina.</p>
						<p>O grupo é coordenado pelo Professor Dr. André Gonzaga dos Santos, farmacêutico e doutor em Química, que atua no Laboratório de Farmacognosia da FCF-UNESP desde 2009 e que possui experiência no estudo de plantas medicinais desde 1998, desenvolvendo pesquisa com  extração, purificação e identificação de substâncias com atividades farmacológicas, controle de qualidade e padronização dos processos envolvidos na cadeia produtiva de fitoterápicos.</p>
						<p>O Professor Dr. Luis Vitor Silva do Sacramento, também coordenador do grupo, é engenheiro agrônomo e doutor em Agronomia, sendo o responsável pelo Laboratório de Botânica da FCF-Unesp, e tem ampla experiência na identificação botânica macroscópica e microscópica de plantas medicinais e drogas vegetais, bem como em aspectos agronômicos relacionados ao cultivo de plantas medicinais e na produção de drogas vegetais.</p>
						<p>O pesquisador (pós-doutorando) Dr. Flávio Alexandre Carvalho, farmacêutico e doutor em Ciências Farmacêuticas, e o técnico e mestrando Caio Humberto Perego estão vinculados ao Laboratório de Farmacognosia, onde realizam pesquisas na mesma área há cerca de 10 anos.</p>
						<p>Os pesquisadores da UNESP envolvidos na parceria com o Grupo AFA S. A., atuam em pesquisas relacionadas a cannabis medicinal desde o início de 2019.</p>
						<p>Nestes seis anos de experiência, adquiriram amplo conhecimento em processos e métodos de análise relacionados à cadeia produtiva da cannabis que, juntamente com a experiência prévia sobre outras plantas medicinais, os habilitam a fornecer as informações ao Grupo AFA sobre todos os processos envolvidos nesta cadeia.</p>
						<p>O grupo de pesquisa da UNESP já orientou dissertações de mestrado, trabalhos de conclusão de curso de alunos de graduação e estágios supervisionados em pesquisa com a Cannabis sativa L.</p>
						<p>Atualmente o Prof. André orienta um estudante de doutorado, um de mestrado, três estagíários do curso de Farmácia e um pós-doutorando em projetos que estudam processos da cadeia produtiva da Cannabis Medicinal.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Tecnologia de ponta</h3>
					<div class="cbp-ntcontent">
						<p>Operamos casas de vegetação de última geração, totalmente automatizadas, que garantem as condições ideais de cultivo.</p>
						<p>Nossas instalações na região metropolitana de Assunção, são equipadas com tecnologia avançada e comprometidas com o manejo orgânico do cultivo e sustentabilidade em todas as etapas da cadeia produtiva.</p>
						<p>Seguimos rigorosamente as boas práticas agrícolas, promovendo a saúde do solo e a biodiversidade, ao mesmo tempo em que asseguramos a produção de cannabis medicinal e CBD de alta qualidade.</p>
						<p>Nosso compromisso com a sustentabilidade e a inovação consolida o Grupo AFA como uma referência de excelência e responsabilidade no mercado global de cannabis medicinal.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Personalização e Qualidade</h3>
					<div class="cbp-ntcontent">
						<p>Oferecemos a capacidade de cultivar flores com concentrações personalizadas de canabinoides (THC e CBD) por meio de contratos específicos com laboratórios e parceiros internacionais.</p>
						<p>Essa flexibilidade nos permite atender às demandas exclusivas de nossos parceiros globais, garantindo sempre a mais alta qualidade em nossos produtos.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Transparência e seriedade</h3>
					<div class="cbp-ntcontent">
						<p>Em todas as nossas operações, adotamos práticas sustentáveis, cuidando das comunidades em que atuamos e minimizando nosso impacto ambiental, reafirmando nosso compromisso com um futuro mais responsável.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Diferenciais sustentáveis e inovadores do Grupo AFA.</h3>
					<div class="cbp-ntcontent">
						<img src="imgs/logo-esg.jpg" alt="ESG - Environmental, Social, and Governance" title="ESG - Environmental, Social, and Governance" class="diferenciais">
						<p>O Grupo AFA destaca-se no projeto de cannabis medicinal por seus diferenciais estratégicos que garantem qualidade, inovação e compromisso com a sustentabilidade.</p>
						<p>A empresa adota práticas de cultivo orgânico em casas agrícolas de última geração, garantindo produtos de alta pureza e eficácia.</p>
						<p>Além disso, o Grupo AFA opera sob os princípios do ESG (Environmental, Social, and Governance), integrando ações de responsabilidade ambiental, como a redução da pegada de carbono, com iniciativas sociais que beneficiam as comunidades locais e práticas de governança que asseguram transparência e conformidade regulatória.</p>
						<p>Este compromisso com o ESG reflete a visão do Grupo AFA de crescer de forma sustentável, respeitando o meio ambiente e promovendo impactos sociais positivos, enquanto entrega soluções inovadoras e de alta qualidade ao mercado.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Conquista da licença.</h3>
					<div class="cbp-ntcontent">
						<p>Conquistamos uma das raras licenças concedidas pelo governo paraguaio para o cultivo, colheita, processamento pós-colheita, extrações e produção de medicamentos à base de óleo de cannabis medicinal e CBD, destacando-nos em um cenário altamente competitivo, que incluía grandes players do mercado internacional.</p>
						<p>Esse feito não apenas comprova nossa capacidade de atender a todos os rigorosos requisitos governamentais, mas também nos posiciona entre os líderes no mercado latino-americano.</p>
						<p>O projeto em implantação foi projetado para atender aos rigorosos padrões de vigilância sanitária de países como Brasil, Estados Unidos e União Europeia, assegurando que nossos produtos estejam em conformidade com as mais exigentes regulamentações internacionais.</p>
						<p>A obtenção dessa licença, em um país com uma das economias mais estáveis e promissoras da região, reforça nossa posição de destaque em um mercado onde poucas empresas possuem uma autorização tão brangente.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Nossas Flores</h3>
					<div class="cbp-ntcontent">
						<p>Cultivamos e colhemos nossas flores de cannabis medicinal em condições rigorosamente controladas, garantindo a consistência e a eficácia dos produtos.</p>
						<p>As flores, após a colheita, passam por um processo de liofilização, que preserva seus componentes químicos essenciais e assegura o teor de água adequado para cada finalidade.</p>
						<p>Embora liofilizadas, essas flores mantêm sua qualidade superior e estão disponíveis para venda imediata, sendo fundamentais na produção interna do Insumo Farmacêutico Ativo (IFA).</p>
						<p>Com o uso de tecnologia de ponta, como liofilizadores avançados, garantimos que as flores cheguem ao destino final com a mais alta qualidade, preservando suas propriedades terapêuticas.</p>
					</div>
				</li>
				
				<li>
					<h3 class="cbp-nttrigger">Implementação de um Centro Químico-Farmacêutico de Excelência.</h3>
					<div class="cbp-ntcontent">
						<p>Estamos em pleno desenvolvimento do nosso Centro Químico-Farmacêutico de Excelência, um laboratório de última geração com previsão de conclusão em 2026.</p>
						<p>Este centro permitirá que realizemos todo o processo de produção de medicamentos à base de cannabis, desde a extração do Insumo Farmacêutico Ativo (IFA) até a formulação e embalagem dos produtos finais.</p>
						<p>No Grupo AFA, a busca contínua pela excelência, inovação e transparência guia todas as nossas operações.</p>
						<p>Estamos comprometidos em adotar as melhores práticas globais para garantir que nossos produtos de cannabis medicinal atendam e superem os mais altos padrões de qualidade e eficácia, contribuindo significativamente para o bem-estar das comunidades que servimos.</p>
					</div>
				</li>

				<!--<li>
					<h3 class="cbp-nttrigger">Diferenciais que Destacam a Divisão no Mercado</h3>
					<div class="cbp-ntcontent">
						<p class="txtespaco"><strong>Parceria Prestigiada com a UNESP:</strong></p>
						<p>A exclusiva cooperação internacional com a Universidade Estadual Paulista (UNESP), uma das melhores universidades do mundo, reforça nossa credibilidade e capacidade de inovação. O time de farmacologia da UNESP, composto por médicos, pós-doutores e especialistas de diversas áreas, colabora estreitamente conosco para desenvolver produtos de alta qualidade e eficácia.</p>

						<p class="txtespaco"><strong>Tecnologia de Ponta:</strong></p>
						<p>Utilizamos estufas de última geração, totalmente controladas, para garantir condições ideais de cultivo.Nossas instalações de 15 mil metros quadrados de estufas na Grande Assunção são equipadas com a tecnologia mais avançada para o cultivo orgânico e a produção de altos teores de CBD.</p>
					</div>
				</li>

				<li>
					<h3 class="cbp-nttrigger">Estudos de Caso ou Exemplos de Sucesso</h3>
					<div class="cbp-ntcontent">

						<p class="txtespaco"><strong>Sucesso na Obtenção de Licença:</strong></p>
						<p>Obtivemos uma das raras licenças concedidas pelo governo paraguaio para o plantio, cultivo e produção de óleo de cannabis medicinal, destacando-nos em um cenário altamente competitivo que incluía gigantes multinacionais. Este feito não só demonstra nossa capacidade de atender a todos os rigorosos requisitos governamentais com excelência, mas também nos diferencia significativamente no mercado latino-americano.</p>
						<p>Tal conquista é um grande diferencial para o Grupo AFA, pois poucos países na América Latina possuem uma licença tão abrangente.</p>
						<p>Esta realização é resultado de um processo de licenciamento rigoroso em um país que atualmente possui uma das economias mais estáveis e promissoras da região. A economia paraguaia, reconhecida por sua estabilidade e crescimento acima da média, oferece um ambiente favorável para o desenvolvimento de negócios inovadores e de alta qualidade como o nosso.</p>

						<p class="txtespaco"><strong>Colheita e Produção de Flores:</strong></p>
						<p>Nossas flores de cannabis medicinal são cultivadas e colhidas sob condições controladas, garantindo a consistência e a potência dos produtos. As flores in natura estão disponíveis para venda imediata e são utilizadas na produção interna de Ingrediente Farmacêutico Ativo (IFA).</p>

						<p class="txtespaco"><strong>Desenvolvimento do Laboratório Químico-Farmacêutico:</strong></p>
						<p>Estamos construindo um laboratório de última geração, com previsão de conclusão em 2026. Este laboratório nos permitirá realizar todo o processo de produção de medicamentos à base de cannabis, desde a extração do IFA até a formulação e embalagem dos produtos finais.No Grupo AFA, nosso compromisso com a excelência, a inovação e a transparência nos permite transformar vidas e promover o bem-estar global. Continuamos a expandir e evoluir, alinhando-nos às melhores práticas globais e oferecendo produtos de cannabis medicinal que redefinem os padrões de qualidade e eficácia no mercado.</p>

					</div>
				</li>-->
			</ul>	
		</div><!-- Fim Div Class Content-Página Diferencial -->

	</section><!-- Fim Section Class Container Página Diferencial -->