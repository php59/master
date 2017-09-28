<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<link href="/tp/Public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/tp/Public/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/Public/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/Public/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/tp/Public/umeditor/lang/zh-cn/zh-cn.js"></script>
    <textarea id="content"></textarea>
    <script>
    	var um = UM.getEditor('content',{
    		initialFrameWidth:800,
    		initialFrameHeight:400,
    		initialContent:'欢迎使用UMEDITOR！'
    	});
    </script>
</body>
</html>