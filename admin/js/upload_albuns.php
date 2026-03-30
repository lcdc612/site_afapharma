<link href="js/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/uploadifyimplemento/swfobject.js"></script>
<script type="text/javascript" src="js/uploadifyimplemento/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : 'js/uploadifyimplemento/uploadify.swf',
    'script'    : 'js/uploadifyimplemento/uploadify.php',
    'cancelImg' : 'js/uploadifyimplemento/cancel.png',
    'folder'    : 'midias_implementos',
    'multi'     : true,
	'auto'		: false,
    'fileExt'     : '*.jpg;*.gif;*.png',
    'buttonText'  : 'Selecione quantas imagens quiser (jpg, png e gif)',
    'width'       : 670,
	'height'       : 35,
    'scriptData'  : {'postId':'<?php echo $postid;?>'},
	'onAllComplete' : function(event,data) {
       location.reload(true);
    }
  });
});
</script>