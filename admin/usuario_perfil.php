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
               <div class="titulo">Usuários | Editar Perfil</div>
	
<?php if(isset($_POST['editar']) && $_POST['editar'] == 'ok'){
	
     $usuario = $_SESSION['MM_Username'];
	 $nome    = strip_tags(trim($_POST['nome']));
	 $email   = strip_tags(trim($_POST['email']));
	 
	 $atualizar_perfil = mysql_query("UPDATE users SET nome = '$nome', email = '$email' WHERE email = '$usuario'")
	                     or die(mysql_error());
						 
	 if($atualizar_perfil >= '1'){
	   echo "<div class=\"ms ok\">Seus dados foram atualizados com sucesso!</div>";
    }else{
	   echo "<div class=\"ms no\">Erro ao atualizar seus dados!</div>";
	}
	
}
?>
     <?php
	 $usuario = $_SESSION['MM_Username'];
	 $perfil = mysql_query("SELECT id, senha, nome, email FROM users WHERE email = '$usuario'")
	                  or die(mysql_error());
	 if(@mysql_num_rows($perfil) <= '0') echo 'Erro ao selecionar o usuario';
	 else{
		 
		 while($res_perfil=mysql_fetch_array($perfil)){
			 
			 $id = $res_perfil[0];
			 $senha = $res_perfil[1];
			 $nome = $res_perfil[2];
			 $email = $res_perfil[3];

			 $default = "http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=40";
             $size = 40;
			 $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=" . md5( strtolower( $email ) ) . "&default=" . urlencode( $default ) . "&size=" . $size;
	         ?>
<div class="usuario_editar">          
<img src="<?php echo $grav_url; ?>" alt="<?php echo $nome; ?>" title="<?php echo $nome; ?>"/>
<strong><?php echo $nome;?></strong><br />
<?php echo $email;?>
</div>           

<form name="editar_usuario" action="" enctype="multipart/form-data" method="post">

     <label>
    <h2>Altera Nome</h2>
      <input type="text" name="nome" value="<?php echo $nome;?>" />
  </label>
  
  <label>
    <h2>Altera E-mail</h2>
      <input type="text" name="email" value="<?php echo $email; ?>" />
  </label>
  
  <input type="hidden" name="editar" value="ok" />
  <input type="submit" name="Editar_usuario" value="Editar Usuário" class="cadastro_btn" />

</form>
      
    <?php
	   }
	 }
     ?>   
</div><!--usuarios-->    

    </div><!-- FIM DIV CONTEUDO -->
  
</div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<?php include"footer.php"; ?>