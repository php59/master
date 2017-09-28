<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script language="JavaScript" src="/tp/Public/Admin/js/jquery.js"></script>
</head>
<body>
	<img src="<?php echo U('verify');?>" id="v">
</body>
<script type="text/javascript">

	$('#v').click(function(){
		var src = "/tp/index.php/Test/SC/verify/"+Math.random();
        $(this).attr('src',src);
	})
</script>
</html>