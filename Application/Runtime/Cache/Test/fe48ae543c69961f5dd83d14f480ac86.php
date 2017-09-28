<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1" width="600">
		<tr>
			<th>用户编号</th>
			<th>用户名</th>
			<th>用户生日</th>
		</tr>
		<?php if(is_array($user_list)): foreach($user_list as $key=>$vo): ?><tr>
				<td><?php echo ($vo["uid"]); ?></td>
				<td><?php echo ($vo["uname"]); ?></td>
				<td><?php echo ($vo["birthday"]); ?></td>
			</tr><?php endforeach; endif; ?>
	</table>
	<?php echo ($show); ?>
</body>
</html>