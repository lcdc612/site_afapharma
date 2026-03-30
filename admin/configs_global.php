<?php include"scripts/restrito_admin.php"; ?>
<?php include"header.php"; ?>
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny.js"></script>
<script>
$(document).ready( function() {
	$("#cad_configs").validate({
		// Define as regras
		rules:{
			titulo:{
				required: true
			},
			descricao:{
				required: true
			},
			tags:{
				required: true
			},
			endereco:{
				required: true
			},
			whatsapp1:{
				required: true
			},
			whatsapp2:{
				required: true
			},
			email:{
				required: true
			},
			email2:{
				required: true
			},
			cidade:{
				required: true
			},
			horario:{
				required: true
			},
			cep:{
				required: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages:{
			titulo:{
				required: "&raquo; Digite o Título!"
			},
			descricao:{
				required: "&raquo; Digite a Descrição!"
			},
			tags:{
				required: "&raquo; Digite as Tags!"
			},
			endereco:{
				required: "&raquo; Digite o Endereço Completo!"
			},
			whatsapp:{
				required: "&raquo; Digite o Whatsapp do Fábio!"
			},
			whatsapp2:{
				required: "&raquo; Digite o Whatsapp do Denis!"
			},
			email:{
				required: "&raquo; Digite o E-mail Corretamente do Fábio!"
			},
			email2:{
				required: "&raquo; Digite o E-mail Corretamente do Denis!"
			},
			cidade:{
				required: "&raquo; Digite a Cidade!"
			},
			horario:{
				required: "&raquo; Digite o Horário de Atendimento!"
			},
			cep:{
				required: "&raquo; Digite o CEP!"
			}
		}
	});
});
jQuery(function($){
$("#whatsapp").mask("(99) 99999-9999");
$("#whatsapp2").mask("(99) 99999-9999");
$("#cep").mask("99.999-999");
});
</script>
<div id="box"><!-- INICIO DIV BOX -->
  
    <div id="header"><!-- INICIO DIV HEADER -->
    
        <div id="header_logo"><!-- INICIO DIV HEADER_LOGO -->
            <a href="painel.php"><img src="imgs/logo.png" alt="" border="0" /></a>
        </div><!-- FIM DIV HEADER_LOGO -->
        
        <div id="header_publicidade"><!-- INICIO DIV HEADER_PUBLICIDADE -->
        </div><!-- FIM DIV HEADER_PUBLICIDADE -->
    
    </div><!-- FIM DIV HEADER -->
  
    <div id="content"><!-- INICIO DIV CONTENT -->
    
        <div id="menu"><!-- INICIO DIV MENU -->
            <?php include "menu.php"; ?>
        </div><!-- FIM DIV MENU -->
    
        <div id="conteudo"><!-- INICIO DIV CONTEUDO -->
            <div class="titulo">Atualizar Configurações do Site</div>
<?php
	 $SelecionaConfigs = mysql_query("SELECT * FROM cad_configs") or die(mysql_error());
					  
	 if(@mysql_num_rows($SelecionaConfigs) <= '0') echo "<div class=\"ms no\">Erro ao localizar as Configurações, tente novamente!</div>";
	 else{
		 
		 while($RsSelecionaConfigs=mysql_fetch_array($SelecionaConfigs)){
			 
			$PegaEndereco  = $RsSelecionaConfigs['endereco'];
			$PegaWhats     = $RsSelecionaConfigs['whatsapp'];
			$PegaEmail     = $RsSelecionaConfigs['email'];
			$PegaCidade    = $RsSelecionaConfigs['cidade'];
			$PegaCep       = $RsSelecionaConfigs['cep'];			 
	}}
?>
<?php if(isset($_POST['editar']) && $_POST['editar'] == 'ok'){

	$Endereco  = strip_tags(trim($_POST['endereco']));
	$Whatsapp  = strip_tags(trim($_POST['whatsapp']));
	$Email     = strip_tags(trim($_POST['email']));
	$Cidade    = strip_tags(trim($_POST['cidade']));
	$Cep       = strip_tags(trim($_POST['cep']));	

	$AtualizaConfigs = mysql_query("UPDATE cad_configs SET endereco = '$Endereco', whatsapp = '$Whatsapp', email = '$Email', cidade = '$Cidade', cep = '$Cep'") or die(mysql_error());
						
	if($AtualizaConfigs >= '1'){
		echo "<div class=\"ms ok\">Configurações atualizadas com sucesso!</div>";
		sleep(1);
		$meta = "<script language='javaScript'>window.location.href='configs_global.php'</script>";
		echo $meta;
	}else{
			echo "<div class=\"ms no\">Erro ao editar as Configurações!</div>";
		}
	}
?>
            <form id="cad_configs" name="cad_configs" action="" method="post" enctype="multipart/form-data">
                
                <label>
                    <h2>Endereço Completo</h2>
                    <input type="text" name="endereco" id="endereco" value="<?php echo $PegaEndereco; ?>"/>
                </label>
                           
                <label>
                    <h2>Telefone</h2>
                    <input type="text" name="whatsapp" id="whatsapp" value="<?php echo $PegaWhats; ?>"/>
                </label>
				               
                <label>
                    <h2>E-mail</h2>
                    <input type="text" name="email" id="email" value="<?php echo $PegaEmail; ?>"/>
                </label>
                
                <label>
                    <h2>Cidade</h2>
                    <input type="text" name="cidade" id="cidade" value="<?php echo $PegaCidade; ?>"/>
                </label>
                                
                <label>
                    <h2>CEP</h2>
                    <input type="text" name="cep" id="cep" value="<?php echo $PegaCep; ?>"/>
                </label>
            
                <input type="hidden" name="editar" id="editar" value="ok" />
                <input type="submit" name="cadastrar" id="cadastrar" value="Atualizar Configurações" class="cadastro_btn" />
            
            </form>
        </div><!-- FIM DIV CONTEUDO -->
    
    </div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<?php include"footer.php"; ?>