<?php include"scripts/restrito_admin.php"; ?>
<?php include"header.php"; ?>
<script>
$(document).ready( function() {
	$("#caduser").validate({
		// Define as regras
		rules:{
			nome:{
				required: true
			},email:{
				required: true
			},senha:{
				required: true
			}
		},
		// Define as mensagens de erro para cada regra
		messages:{
			nome:{
				required: "&raquo; Digite seu Nome Completo!"
			},email:{
				required: "&raquo; Digite seu E-mail Corretamente!"
			},senha:{
				required: "&raquo; Digite sua Senha!"
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
        <div class="titulo">Usuário | Cadastrar</div>

<?php if(isset($_POST['cadastro']) && $_POST['cadastro'] == 'ok'){
	
	function criptoSenha($criptoSenha){
		return sha1(md5($criptoSenha));
	}
	
	$nome    = strip_tags(trim($_POST['nome']));
	$email   = strip_tags(trim($_POST['email']));
	$senha   = strip_tags(trim($_POST['senha']));
	$RecuperaSenhaOK =	mysql_real_escape_string(criptoSenha($_POST['senha']));
	$nivel   = strip_tags(trim($_POST['nivel']));	
	
	$verificar_usuario = mysql_query("SELECT email FROM users WHERE email = '$email'")
						 or die(mysql_error());
	if(@mysql_num_rows($verificar_usuario) >= '1'){
		echo "<div class=\"ms no\">Usuário não pode ser cadastrado pois já existe!</div>";
	}else{

	$cadastra_usuario = mysql_query("INSERT INTO users (nome, email, senha, nivel)
								    VALUES ('$nome', '$email', '$RecuperaSenhaOK', '$nivel')")
	                    or die(mysql_error());
						
	if($cadastra_usuario >= '1'){
		echo "<div class=\"ms ok\">Usuário cadastrado com sucesso!</div>";
	}else{
		echo "<div class=\"ms no\">Erro ao cadastrar Usuário!</div>";
	}
	
  }

}
?>
        <form id="caduser" name="caduser" action="" method="post" enctype="multipart/form-data">
          
          
          <label>
          <h2>Nome Completo</h2>
          <input type="text" name="nome" id="nome" />
          </label>
          
          <label>
          <h2>E-mail</h2>
          <input type="text" name="email" id="email"/>
          </label>
                    
          <label>
          <h2>Senha</h2>
          <input type="password" name="senha" id="senha"/>
          </label>
          
          <label>
          <h2>Nivel</h2>
          <select name="nivel" id="nivel">
          	<option value="admin" selected="selected">Admin</option>
			<option value="editor">Editor</option>
          </select>
          </label>


          <input type="hidden" name="cadastro" id="cadastro" value="ok" />
          <input type="submit" name="Cadastrar" id="cadastrar" value="Cadastrar Usuário" class="cadastro_btn" />

        </form>
    </div><!-- FIM DIV CONTEUDO -->
  
</div><!-- FIM DIV CONTENT -->
  
<div id="clear"></div><!-- INICIO E FIM DIV CLEAR -->

</div><!-- FIM DIV BOX -->
<?php include"footer.php"; ?>