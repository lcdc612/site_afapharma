<?php include 'configs.php'; ?>
<!doctype html>
<html lang="pt-br" itemscope itemtype="http://schema.org/WebSite">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title><?php echo PG_Title; ?> - Contato</title>
	<meta name="description" content="<?php echo PG_Desc; ?>"/>
	<meta name="googlebot" content="index,follow"/>

	<link rel="author" href="Eleno Calanca"/>
	<!--<link rel="publisher" href="Agência Digital ESC  - www.agenciaesc.com.br"/>-->
	<link rel="canonical" href="<?php echo HOME; ?>"/>
	<link rel="alternate" href="<?php echo HOME; ?>" hreflang="pt-br" />

	<meta itemprop="name" content="<?php echo PG_Title; ?> - Contato"/>
	<meta itemprop="description" content="<?php echo PG_Desc; ?>"/>
	<meta itemprop="image" content=<?php echo HOME; ?>"/imgs/index.jpg"/>
	<meta itemprop="url" content="<?php echo HOME; ?>"/>
	<meta itemprop="creator" content="Agência Digital ESC"/>

	<meta property="og:url" content="<?php echo HOME; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo PG_Title; ?> - Contato" />
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
	<script type="text/javascript" src="_cdn/jquery.mask.js"></script>
	
	<!-- FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	

	<script>
		Shadowbox.init();
		
		$(function() {
			$("#phone").mask("(99) 9999-9999");
		});
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
			<p>Contato</p>
			<div class="navegacao">
				<p><a href="index.php">Home</a> &raquo; Contato</p>
			</div>
		</span>
		
	</div><!-- Fim Div Class Content-Header -->

	</header><!-- Fim Header Container-Header -->
	
	<section class="container-pagina"><!-- Inicio Section Class Container pagina -->

		<div class="content-pagina"><!-- Início Div Class Content-pagina -->
			
			<h1 class="fontzero">Contato</h1>
			
			<?php if(isset($_POST['enviar'])){
        
				require_once('phpmailer/PHPMailerAutoload.php');

				$mailer = new PHPMailer();
				$mailer->IsSMTP();
				$mailer->Host = 'smtp.grupoafa.com';
				$mailer->SMTPAuth = true; //define se haverá ou não autenticação no SMTP
				$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails

				$mailer->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
				$mailer->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"

				$mailer->Username = 'contato@grupoafa.com'; //Informe o e-mai o completo
				$mailer->Password = 'Contafa2025*'; //Senha da caixa postal

				// DADOS DO REMETENTE
				$mailer->Sender = "contato@grupoafa.com"; // Conta de email existente e ativa em seu domínio
				$mailer->From = "contato@grupoafa.com"; // Sua conta de email que será remetente da mensagem
				$mailer->FromName = "Formulário de Contato do site"; // Nome da conta de email

				$mailer->AddAddress('contato@grupoafa.com', 'Grupo AFA'); // Define qual conta de email receberá a mensagem

				$mailer->IsHTML(true); //enviar em HTML
				$mailer->CharSet = 'utf-8'; // Charset da mensagem (opcional)

				// recebendo os dados do formulario
				if(isset($_POST['nome'])){

				$setor1	   = $_POST['setor'];
				$nome	   = $_POST['nome'];
				$email     = $_POST['email'];
				$telefone  = $_POST['phone'];
				$mensagem  = $_POST['mensagem'];
				$data      = date("d/m/Y");	

				$msg  = "";
				$msg .= "<p style=\"font:16px Tahoma, Geneva, sans-serif; color: #000;\">Contato realizado atraves do Formulario do Site [www.grupoafa.com].</p><br />";
				$msg .= "<p style=\"font:16px Tahoma, Geneva, sans-serif; color: #000;\"><strong>$setor1</strong></p><br />";
				$msg .= "<p style=\"font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; color:#333; line-height:20px;\"><strong>Nome:</strong> $nome</p>";
				$msg .= "<p style=\"font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; color:#333; line-height:20px;\"><strong>E-mail:</strong> $email</p>";
				$msg .= "<p style=\"font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; color:#333; line-height:20px;\"><strong>Telefone:</strong> $telefone</p>";
				$msg .= "<p style=\"font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; color:#333; line-height:20px;\"><strong>Mensagem:</strong> $mensagem</p><br />";
				$msg .= "<p style=\"font:14px 'Trebuchet MS', Arial, Helvetica, sans-serif; color:#333; line-height:20px;\">Mensagem enviada em: $data</p>";		
				}

				$mailer->Subject = utf8_decode("Contato realizado via Site");
				$mailer->Body = utf8_decode($msg);

				if(!$mailer->Send())
				{
				echo "<div class=\"alert-box error\">Houve um erro ao  enviar o email!</div>".$mailer->ErrorInfo;
				//$mail->ErrorInfo informa onde ocorreu o erro
				exit;
				}
				echo"<div class=\"alert-box success\">Mensagem enviada com Sucesso. Retornaremos em breve, obrigado!</div>";
				}
			?>
			
			<div class="ladoa"><!-- Inicio Div Class Lado A -->
			
			<form action="" method="post" name="enviarform" id="enviarform" enctype="multipart/form-data">

				<fieldset>
					<label class="lblsetor">
						<select name="setor" id="setor">
							<option value="#" selected>Escolha o Departamento</option>
							<option value="Clientes e Consumidores">Clientes e Consumidores</option>
							<option value="Area Tecnica para Pesquisadores e Interessados em Parceria">Área Técnica para Pesquisadores e Interessados em Parcerias</option>
							<option value="Trabalhe Conosco">Trabalhe Conosco</option>
						</select>
					</label>
					<label class="lblnome"><input type="text" name="nome" id="nome" placeholder="Nome" required></label>
					<label class="lblemail"><input type="email" name="email" id="email" placeholder="E-mail" required></label>
					<label class="lblfone"><input type="tel" name="phone" id="phone" placeholder="Telefone" required></label>
					<label class="lblmsg"><textarea name="mensagem" id="mensagem" placeholder="Mensagem" rows="5" required></textarea></label>
					<input type="hidden" value="enviar" name="enviar" />
					<input type="submit" name="enviar_msg" class="btn-contato" value="Enviar" />
				</fieldset>	
			</form>
			
		</div><!-- Inicio Div Class Lado A -->
		
		<div class="ladob"><!-- Inicio Div Class Lado B -->
		
			<ul>
				<li class="whats" style="display: none"><a href="#" title="Fale Conosco" class="efeito" target="_blank">+54 9 XXX XXX XXXX</a></li>
				<li class="emailcontact"><a href="mailto:contato@grupoafa.com" title="contato@grupoafa.com" class="efeito">contato@grupoafa.com</a></li>
				<li class="endcontact" style="display: none"><a href="https://maps.app.goo.gl/gwFGuwinQFE9J8gz7" title="Onde estamos" class="efeito" target="_blank">Endereço aqui / Paraguai</a></li>
			</ul>
			
		</div><!-- Inicio Div Class Lado B -->
			
		</div><!-- Fim Div Class Content-pagina -->

	</section><!-- Fim Section Class Container pagina -->