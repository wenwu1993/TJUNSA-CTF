<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>register</title>
	</head>
	<body>
		

<form action="/register" method="post">
	username:<input type="text" name="username">
	password:<input type="password" name="password">
	confirm<input type="password" name="password2">
	email<input type="email" name="email">
	<input type="submit" name="submit">
</form>


	</body>
</html>