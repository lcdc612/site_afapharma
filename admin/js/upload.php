<link href="js/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/uploadify/swfobject.js"></script>
<script type="text/javascript" src="js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : 'js/uploadify/uploadify.swf',
    'script'    : 'js/uploadify/uploadify.php',
    'cancelImg' : 'js/uploadify/cancel.png',
	'fileSizeLimit' : '10MB',
    'folder'    : 'midias',
    'multi'     : true,
	'auto'		: false,
    'fileExt'     : '*.jpg;*.gif;*.png',
    'buttonText'  : 'Selecione no maximo 20 imagens (jpg, png e gif)',
    'width'       : 712,
	'height'       : 35,
    'scriptData'  : {'postId':'<?php echo $postid;?>'},
	'onAllComplete' : function(event,data) {
       location.reload(true);
    }
  });
});
</script>