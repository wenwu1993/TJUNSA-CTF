<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>login</title>
	</head>
	<body>
		<div>hello <?php echo session("name"); ?> </div>
		<div>
			<a href="/">index</a>
			<a href="/register">register</a>
			<?php
 if(session("name")!==NULL){ echo '<a href="/logout">logout</a>'; } else{ echo '<a href="/login">login</a>'; } ?>
		</div>
		

<form action="/login" method="POST">
	username:<input type="text" name="username">
	password:<input type="password" name="password">
	<input type="submit" name="submit">
</form>


	</body>
</html>