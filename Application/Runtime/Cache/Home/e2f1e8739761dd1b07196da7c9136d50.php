<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>register</title>
	</head>
	<body>
		<div>hello <?php echo session("name"); ?> </div>
		<div>
			<a href="/">index</a>
			<a href="/register">register</a>
			<?php
 if(session("name")!==NULL){ echo '<a href="/logout">logout</a>'; } else{ echo '<a href="/login">login</a>'; } ?>
		</div>
		

<form action="/register" method="post">
	username:<input type="text" name="username">
	password:<input type="password" name="password">
	confirm:<input type="password" name="password2">
	email:<input type="text" name="email">
	<input type="submit" name="submit">
</form>


	</body>
</html>