<?php include "Connections/afapharma.php";
$con = mysqli_connect($hostname_afapharma, $username_afapharma, $password_afapharma, $database_afapharma);

$sqlConfigs = "SELECT * FROM cad_configs";
$SelConexaoConfigs = mysqli_query($con, $sqlConfigs);

$TotalConfigs = mysqli_num_rows($SelConexaoConfigs);

	if ($TotalConfigs <= '0') echo '';
	else{
		while ($f = mysqli_fetch_array($SelConexaoConfigs))
		{
			$PegaEnderecoSite  = $f['endereco'];
			$PegaWhatsAppSite  = $f['whatsapp'];
			$PegaEmailSite     = $f['email'];
			$PegaCidadeSite   = $f['cidade'];
			$PegaCEPSite      = $f['cep'];
		}
	}
	$PG_End       = $PegaEnderecoSite;
	$PG_Whatsapp  = $PegaWhatsAppSite;
	$PG_Email     = $PegaEmailSite;
	$PG_Cidade    = $PegaCidadeSite;
	$PG_CEP       = $PegaCEPSite;

	define('HOME', 'https://www.grupoafa.com');
	define('PG_Title', "AFA Pharma");
	define('PG_Desc', "Grupo AFA: laboratório farmacêutico, referência em cultivo e pesquisa de canábis medicinal");

	/*Limita Frase*/
		function limitarTexto($texto, $limite){
		  $contador = strlen($texto);
		  if ( $contador >= $limite ) {      
			  $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
			  return $texto;
		  }
		  else{
			return $texto;
		  }
		} 

	/*Limita Frase*/
	function soNumero($str) {
		return preg_replace("/[^0-9]/", "", $str);
	}
?>