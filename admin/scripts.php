<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>
<script src="js/maskedinput.min.js" type="text/javascript"></script>
<script src="../_cdn/shadowbox/shadowbox.js" type="text/javascript"></script>

<script type="text/javascript">
<!-- INICIO SHADOWBOX -->
Shadowbox.init();

<!-- INICIO MASCARAS -->
$(function() {
	$("#telefone").mask("(99) 9999-9999");
	$("#fone1").mask("(99) 9999-9999");
	$("#fone2").mask("(99) 9999-9999");
	$("#fone3").mask("(99) 9999-9999");
	$("#celular").mask("(99) 99999-9999");
	$("#data").mask("99/99/9999");
	$("#datanasc").mask("99/99/9999");
	$("#cep").mask("99.999-999");
});

<!-- LOAD ACTION -->
$(window).load(function () {
  complete:$(".loadaction").fadeOut("slow");
  complete:$(".msg").delay(5000).fadeOut("slow");
});

$(function(){
	$(".setload").click(function(){
	beforeSend:$(".loadaction").fadeIn("slow");
	});
	
	$(".msfclose").click(function(){
	complete:$(".msf").fadeOut("slow");
	});
});

<!-- TABS ACTIONS -->
$(function(){
	$(".listarts:first").show();
	$(".tabnavigation li a").click(function(){
		$(".tabnavigation li a").removeClass("active");
		$(".listarts").hide();
		$(this).addClass("active");
		var div = $(this).attr('href');
		$(div).show();
		return false;
	});
});
</script>
