<?php include"scripts/restrito_admin.php"; ?>
<?php include"header.php"; ?>
<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="js/tiny_mce/tiny.js"></script>
<script>
$(document).ready( function() {
	$("#cad_noticias").validate({
		// Define as regras
		rules:{
			titulo:{
				required: true
			},
			data:{
				required: true
			},
			descricao:{
				required: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages:{
			titulo:{
				required: "&raquo; Digite o Título da Notícia!"
			},
			data:{
				required: "&raquo; Digite a Data da Notícia!"
			},
			descricao:{
				required: "&raquo; Digite a Descrição da Notícia!"
			}
		}
	});
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
        <div class="titulo">Notícias | Editar</div>

<?php
	 $PegaID = $_GET['id'];

	 $SelecionaNoticias = mysql_query("SELECT * FROM cad_noticias WHERE id = '$PegaID'") or die(mysql_error());
					  
	 if(@mysql_num_rows($SelecionaNoticias) <= '0') echo '<div class=\"ms no\">Erro ao selecionar a Notícia!</div>';
	 else{
		 
		 while($RsSelecionaNoticias=mysql_fetch_array($SelecionaNoticias)){
			 
			$PegaTitulo    = $RsSelecionaNoticias['titulo'];
			$PegaData      = $RsSelecionaNoticias['data'];
			$PegaDescricao = $RsSelecionaNoticias['descricao'];		 
	}}
?>

<?php if(isset($_POST['editar']) && $_POST['editar'] == 'ok'){
	
	$Titulo	     = strip_tags(trim($_POST['titulo']));
	$Data        = strip_tags(trim($_POST['data']));
	$DataCorreta = implode("-",array_reverse(explode("/",$Data)));
	$Descricao   = $_POST['descricao'];

	$AtualizaProf = mysql_query("UPDATE cad_noticias SET titulo = '$Titulo', data = '$DataCorreta', descricao = '$Descricao' WHERE id = '$PegaID'") or die(mysql_error());
						
	if($AtualizaProf >= '1'){
		echo "<div class=\"ms ok\">Notícia cadastrada com sucesso!</div>";
		sleep(1);
		$meta = "<script language='javaScript'>window.location.href='noticias_visualizar.php'</script>";
		echo $meta;
		
		}else{
			echo "<div class=\"ms no\">Erro ao editar a Notícia!</div>";
		}
	}
?>
        <form id="atualiza_noticias" name="atualiza_noticias" action="" method="post" enctype="multipart/form-data">
              
            	<label>
                    <h2>Título</h2>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $PegaTitulo; ?>"/>
                </label>
            
                <label>
                    <h2>Data</h2>
                    <input type="text" name="data" id="data" value="<?php echo date('d/m/Y', strtotime($PegaData)); ?>"/>
                </label>
              
                <label>
                    <h2>Descrição</h2>
                    <textarea name="descricao"  id="descricao" rows="20"><?php echo htmlspecialchars($PegaDescricao); ?></textarea>
                </label>
            
            <input type="hidden" name="editar" id="editar" value="ok" />
            <input type="submit" name="cadastrar" id="cadastrar" value="Editar Notícia" class="cadastro_btn" />
        
        </form>
    </div><!-- FIM DIV CONTEUDO -->
  
</div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<?php include"footer.php"; ?>