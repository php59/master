<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('add');?>" method="post">
		username:<input type="text" name="username" id="" /><br>
		password:<input type="text" name="password" id="" /><br>
		repassword:<input type="text" name="repassword" id="" /><br>
		email:<input type="text" name="email" id="" /><br>
		<input type="submit" />
	</form>
</body>
</html>