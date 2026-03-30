<?php include"scripts/restrito_no.php"; ?>
<?php include"header.php"; ?>
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
		<div class="titulo">Notícias | Listar/Editar/Excluir</div> 

<?php if(isset($_GET['delid'])){

	$DelID = $_GET['delid'];

	$DeletarNoticia = mysql_query("DELETE FROM cad_noticias WHERE id = '$DelID'") or die(mysql_error());
	
	if($DeletarNoticia >= '1'){
		echo "<div class=\"ms ok\">Notícia excluida com sucesso!</div>";
	}else{
		echo "<div class=\"ms no\">Erro ao remover a Notícia, tente novamente!</div>";
	}
	
	/* Daqui para exclui as imagens */
	$SelecionaImagem = mysql_query("SELECT * FROM cad_midias_noticias WHERE obraid = '$DelID'") or die(mysql_error());
						   
	while($ResSelecionaImagem=mysql_fetch_array($SelecionaImagem)){	
		
		$NomeImg   = $ResSelecionaImagem['nomeimg'];
		$Pasta    = 'midiasnoticias/';
		unlink($Pasta.$NomeImg);
	}
	
	$ExcluirImagens = mysql_query("DELETE FROM cad_midias_noticias WHERE obraid = '$DelID'") or die(mysql_error());
								   
	if($ExcluirImagens >= '1'){
		echo "<div class=\"ms ok\">Notícia e Imagens excluidas com sucesso!</div>";
		sleep(1);
		$meta = "<script language='javaScript'>window.location.href='noticias_visualizar.php'</script>";
		echo $meta;	
	}else{
		echo "<div class=\"ms no\">As imagens NÃO foram excluidas com sucesso!</div>";
	}
	/* Fim da exclusão das imagens */
}
?>
    <?php
		
		$SelecionarNoticias = mysql_query("SELECT * FROM cad_noticias ORDER BY data DESC") or die(mysql_error());
					  
		if(@mysql_num_rows($SelecionarNoticias) <= '0') echo "<div class=\"ms no\">Nenhuma Notícia para visualizar!</div>";
			else{
	?>
    
    <div class="listar-noticias"><!-- Inicio Div Listar Noticias-->
    
    <center>
    <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="tbdados">
    <tr class="ses">
      <td width="67" height="29" align="center">DATA</td>
      <td width="476" align="center">NOTÍCIAS</td>
      <td width="63" align="center">VISITAS</td>
        <td align="center" colspan="4">AÇÕES</td>
    </tr>
	<?php
	 
	 while($ResSelecionarNoticias=mysql_fetch_array($SelecionarNoticias)){
		 
		 $PegaID      = $ResSelecionarNoticias['id'];
		 $PegaTitulo  = $ResSelecionarNoticias['titulo'];
		 $PegaData    = $ResSelecionarNoticias['data'];
		 $PegaVisitas = $ResSelecionarNoticias['visitas'];
		 
	?>
    <tr>
		<td align="center" valign="middle"><?php echo date('d/m/Y', strtotime($PegaData)); ?></td>
		<td align="center"><?php echo $PegaTitulo; ?></td>
		<td align="center"><?php echo $PegaVisitas; ?></td>
		<td width="36" align="center">
            <a href="noticias_cad_imagens.php?id=<?php echo $PegaID; ?>" title="Editar">
            	<img src="imgs/add_new.png" alt="Adicionar Imagem" title="Adicionar Imagem" />
            </a>
        </td>
        <td width="33" align="center">
			<a href="noticias_editar.php?id=<?php echo $PegaID; ?>" title="Editar">
            	<img src="imgs/edit.png" alt="Editar Notícia" title="Editar Notícia" />
            </a>
        </td>
        <td width="33" align="center">
			<a href="noticias_visualizar.php?delid=<?php echo $PegaID; ?>" title="Excluir">
				<img src="imgs/no.png" alt="Excluir Notícia" title="Excluir Notícia" />
            </a>
        </td>
    </tr>
    <?php 
		}
	}
	?>
    </table>
    </center>
    
    </div><!-- Inicio Div Listar Noticias-->

    </div><!-- FIM DIV CONTEUDO -->
  
</div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<?php include"footer.php"; ?>