<?php include"scripts/restrito_no.php"; ?>
<?php include"header.php"; ?>
<div id="box"><!-- INICIO DIV BOX -->
  
  <div id="header"><!-- INICIO DIV HEADER -->
  
    <div id="header_logo"><!-- INICIO DIV HEADER_LOGO -->
    <a href="painel.php"><img src="imgs/logo.png" alt="FD Engenharia" title="FD Engenharia" border="0" /></a>
    </div><!-- FIM DIV HEADER_LOGO -->
    
    <div id="header_publicidade"><!-- INICIO DIV HEADER_PUBLICIDADE -->
    </div><!-- FIM DIV HEADER_PUBLICIDADE -->
  
  </div><!-- FIM DIV HEADER -->
  
  <div id="content"><!-- INICIO DIV CONTENT -->
  
    <div id="menu"><!-- INICIO DIV MENU -->
		<?php include "menu.php"; ?>
    </div><!-- FIM DIV MENU -->
    
    <div id="conteudo"><!-- INICIO DIV CONTEUDO -->
	<?php
    $usuario = $_SESSION['MM_Username'];

    $boas_vindas = mysql_query("SELECT * FROM users WHERE email = '$usuario'") or die(mysql_error());
    
    if(@mysql_num_rows($boas_vindas) <= '0') echo 'Erro ao selecionar o usuário';
        else{
    
        while($res_boas_vindas=mysql_fetch_array($boas_vindas)){

			 $id = $res_boas_vindas[0];
			 $nome = $res_boas_vindas['nome'];
			 $email = $res_boas_vindas['email'];
			 $default = "http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=40";
             $size = 40;
			 $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5( strtolower( $email ) ) . "&default=" . urlencode( $default ) . "&size=" . $size;		
		
	?>
    <div class="user_home"><!-- Inicio Div User_home -->       
        <img src="<?php echo $grav_url; ?>" width="40" alt="<?php echo $nome;?>" title="<?php echo $nome;?>"/>
        <p><strong>Seja Bem-vindo(a), ao seu painel de gerenciamento.</strong></p>
        <p><strong><?php echo $nome; ?></strong>&nbsp;o que deseja fazer?</p>
        <p><strong>E-mail:</strong>&nbsp;<?php echo $email; ?></p>
	</div><!-- Fim Div User_home --> 
	<?php
    	}
    }
    ?>
<!-- Aqui vai a continuação do painel administrativo -->

<div class="titulohome">Estatísticas de Acessos</div>
     	
<?php
	$ContaNoticias = mysql_query("SELECT * FROM cad_noticias") or die(mysql_error());
	$TotalNoticias = mysql_num_rows($ContaNoticias);
	
	$VisitasTotal = mysql_query("SELECT Sum(visitas) AS visitas_noticias FROM cad_noticias") or die(mysql_error());
	if(@mysql_num_rows($VisitasTotal) <= '0') echo '';
	$views = 0;
	$Visitas = mysql_result($VisitasTotal, $views, 'visitas_noticias');
	
	$MediaNoticias = mysql_query("SELECT * FROM cad_noticias") or die(mysql_error());
		$LinhaNoticias = mysql_num_rows($MediaNoticias);
		if($LinhaNoticias >= '2'){
			$MediaNoticiasTotal = ceil($Visitas/$LinhaNoticias);
		}else{
			$MediaNoticiasTotal = 0;
		}
	?>	
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['', 'Qtde', 'Visitas', 'Média'],
          ['Notícias',  <?php echo $TotalNoticias ?>, <?php echo $Visitas ?>, <?php echo $MediaNoticiasTotal; ?>]
        ]);

        var options = {
          chart: {
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="barchart_material" style="width: 100%; height: 260px; float:left; margin-bottom:10px; padding: 15px 0"></div>
	
<div class="titulohomenew">Top 5 Notícias mais Visualizadas</div>

 	<?php
		$SelNoticias = mysql_query("select * from cad_noticias order by visitas DESC LIMIT 5") or die(mysql_error());
					  
		if(@mysql_num_rows($SelNoticias) <= '0') echo "<div class=\"mshome in\">Nenhuma Notícia Cadastrada!</div>";
			else{
	?>
	<table border="0" align="center" cellpadding="0" cellspacing="0" class="tbhome">
    <tr class="ses">
      <td width="45" height="20" align="center">ID</td>
      <td width="476" align="center">NOTÍCIAS</td>
      <td width="75" align="center">VISUALIZAÇÕES</td>
    </tr>
    <?php
	 
	 while($ResSelecionarNot=mysql_fetch_array($SelNoticias)){
		 
		 $PegaIDNoti     = $ResSelecionarNot['id'];
		 $PegaNomeNoti   = $ResSelecionarNot['titulo'];
		 $PegaVistasNoti = $ResSelecionarNot['visitas'];
	?>
    <tr>
		<td align="center" valign="middle"><a href="#" title="<?php echo $PegaNomeNoti; ?>" target="_blank"><?php echo $PegaIDNoti; ?></a></td>
		<td align="center"><a href="https://www.grupoafa.com/index.php?pagina=ver-noticia&id=<?php echo $PegaIDNoti; ?>" title="<?php echo $PegaNomeNoti; ?>" target="_blank"><?php echo $PegaNomeNoti; ?></a></td>
		<td align="center"><a href="https://www.grupoafa.com/index.php?pagina=ver-noticia&id=<?php echo $PegaIDNoti; ?>" title="<?php echo $PegaNomeNoti; ?>" target="_blank"><?php echo $PegaVistasNoti; ?></a></td>
    </tr>
    <?php 
		}
	}
	?>
    </table>
	
</div><!-- Fim Div Class Resumo -->
        
    </div><!-- FIM DIV CONTEUDO -->
 
</div><!-- FIM DIV CONTENT -->
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->
</div><!-- FIM DIV BOX -->
<?php include "footer.php"; ?>

