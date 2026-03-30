<!doctype html>
<html>
<head>
<?php
include "../Connections/afapharma.php";
$conexao = mysql_connect("$hostname_afapharma","$username_afapharma","$password_afapharma") or die(mysql_error());

$db = mysql_select_db("$database_afapharma") or die(mysql_error());
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AFA Pharma | Painel Administrativo</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />
<link href="../_cdn/shadowbox/shadowbox.css" rel="stylesheet" type="text/css" />
<?php include "scripts.php";?>
<script>
$(document).ready(function () {
    $('h1').each(function (index) {
        $(this).click(function () {
            $(this).parent().find('ul').eq(index).find('li').toggle();
        });
    });
});
</script>
</head>

<body>
