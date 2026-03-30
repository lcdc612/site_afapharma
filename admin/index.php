<?php require_once('../Connections/afapharma.php');?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$conexao = mysql_connect("$hostname_afapharma","$username_afapharma","$password_afapharma") or die(mysql_error());

$db = mysql_select_db("$database_afapharma") or die(mysql_error());
	
	function criptoSenha($criptoSenha){
		return sha1(md5($criptoSenha));
	}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['email'])) {
	
	$RecuperaEmailOK =	mysql_real_escape_string($_POST['email']);
	$RecuperaSenhaOK =	mysql_real_escape_string(criptoSenha($_POST['senha']));
	
  $loginUsername = $RecuperaEmailOK;
  $password = $RecuperaSenhaOK;
  $MM_fldUserAuthorization = "nivel";
  $MM_redirectLoginSuccess = "painel.php";
  $MM_redirectLoginFailed = "index.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_afapharma);
  	
  $LoginRS__query=sprintf("SELECT email, senha, nivel FROM users WHERE email=%s AND senha=%s",
  GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
    
    $loginStrGroup  = mysql_result($LoginRS,0,'nivel');
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <title>AFA Pharma | Painel Administrativo</title>
        <meta name="description" content="Área restrita aos administradores do site da AFA Pharma"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>        
        <link href="css/login.css" rel="stylesheet" type="text/css" />        
</head>
    <body>
        
        <article class="box-login">
            <img class="logo" src="imgs/logo2.png" alt="AFA Pharma" title="AFA Pharma" />
            <form name="login_erro" action="<?php echo $loginFormAction; ?>" method="post">
                <label>
                    <input class="email" value="" placeholder="E-mail de Acesso:" type="text" name="email" id="email"/>
                </label>

                <label>
                    <input class="senha" value="" placeholder="Senha de Acesso:" type="password" name="senha" id="senha"/>
                </label>
                
                <a href="https://www.grupoafa.com" title="AFA Pharma" class="sistema_btn_green">Acessar o site</a>
                
                <input type="submit" name="logar" value="Logar-se" class="login_btn"/>
                             
                <div class="clear"></div>
            </form>
            
        </article>

    </body>
</html>