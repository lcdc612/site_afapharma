<?php include"scripts/restrito_no.php"; ?>
<?php include"header.php"; ?>
<div class="loadaction">
    <div class="boxload">
        <img src="imgs/ajax-loader.gif" alt="Processando requisição" title="Processando requisição" /><p>por favor, aguarde enquanto sua requisição é processada...</p>
    </div>
</div><!-- /loadAction -->

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
       <div class="titulo">Notícias | Cadastrar Imagem</div>

        <?php if(isset($_POST['cadastrar_post']) && $_POST['cadastrar_post'] == 'cad'){
	
			$PostIDInsert = $_GET['id'];
			$img          = $_FILES['thumb'];
			$pasta        = "midiasnoticias/";
			$permitido    = array('image/jpg', 'image/jpeg', 'image/pjpeg');
			
			$m = date('m');
			$y = date('Y');
	
			if(!file_exists($pasta)): mkdir($pasta,0755); endif;
			if(!file_exists($pasta.$y)): mkdir($pasta.$y,0755); endif;
			if(!file_exists($pasta.$y.'/'.$m)): mkdir($pasta.$y.'/'.$m,0755); endif;	
	
			 require("scripts/funcao_upload.php");
			 $nome  = $img['name'];
			 $tmp   = $img['tmp_name'];
			 $type  = $img['type'];
		 
		 if(!empty($nome) && in_array($type, $permitido)){
			 	$name = $y.'/'.$m.'/'.$PostIDInsert.'-'.md5(time()).'.jpg';
				Redimensionar($tmp, $name, 1200, $pasta);
							 
			 	$cadastrar_noticias = mysql_query("INSERT INTO cad_midias_noticias (obraid, nomeimg) VALUES ('$PostIDInsert', '$name')") or die(mysql_error());
									  
				if($cadastrar_noticias >= '1'){
					echo "<div class=\"ms ok\">Imagem Cadastrada com sucesso</div>";
				}else{
					echo "<div class=\"ms no\">Erro ao cadastrar a Imagem</div>";
		   }
		 }
	   }
	?>
		
		<form name="cadastrar_posts" id="cadastrar_posts" method="post" action="" enctype="multipart/form-data" class="envioimgnovo">
             <fieldset>
                <label>
                    <input type="file" name="thumb" class="inputimg"/>					
					 <input type="submit" value="Clique Aqui para Enviar" name="Cadastrar" ac />
                </label> 
               
                <input type="hidden" name="cadastrar_post" value="cad" />
             </fieldset>
      </form>
        
        <?php
			if(!empty($_GET['delid'])){
				
				$ImgIdDel = $_GET['delid'];
				$imgIm    = $_GET['img'];
				$Pasta    = 'midiasnoticias/';
				
				if(file_exists($Pasta.$imgIm)){
					unlink($Pasta.$imgIm);	
				}
				$deletar_img = mysql_query("DELETE FROM cad_midias_noticias WHERE nomeimg = '$imgIm'") or die(mysql_error());	
			}
		
			$postid = $_GET['id'];

			$SelecionaImagem = mysql_query("SELECT * FROM cad_midias_noticias WHERE obraid = '$postid'") or die(mysql_error());
		?>
        <ul class="gblist">
            <?php 
			while($ResSelecionaImg=mysql_fetch_array($SelecionaImagem)){	
				 $FotoId     = $ResSelecionaImg['fotoid'];
				 $FotoIdPost = $ResSelecionaImg['obraid'];	
				 $NomeImagem = $ResSelecionaImg['nomeimg'];
			?>
            <li>
                <img src="tim.php?src=midiasnoticias/<?php echo $NomeImagem; ?>&w=81&h=63&q=100&zc=1" width="81" height="63" />
                <div class="action">
                    <a href="midiasnoticias/<?php echo $NomeImagem; ?>" rel="shadowbox[gb]" title=""><img src="imgs/view.png" title="Ver" alt="Ver" /></a>
                    <a href="noticias_cad_imagens.php?&id=<?php echo $postid; ?>&delid=<?php echo $FotoIdPost; ?>&img=<?php echo $NomeImagem; ?>" title="Exluir"><img src="imgs/no.png" title="Exluir" alt="Exluir" /></a>
                </div><!-- /action -->
            </li>
            <?php
            	}
			?>
		</ul>
        <?php
		
		?>
		
    </div><!-- FIM DIV CONTEUDO -->
  
</div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<!----------------------------- Inicio Cad Imagens ----------------------------->
<!----------------------------- Fim Cad Imagens ----------------------------->
<?php include"footer.php"; ?>