<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="css/controls.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/accountform.css" media="all"/>
<title>Pets at Park LLC</title>
</head>
<body>
	<div class="wrap">		
		<div class="content">
			<img src="images/logo.png" />
		</div>
		<div class="clear"></div>
		<div class="title"><h1>Login Form</h1></div>
					
		<div class="content">
			<p>This symbol (*) indicates a required field.</p>
			<?php if(isset($message)) echo $message; ?>
			<div class="clear"></div>				
			<form method="post" action="login.php">
				<div class="text">* Enter E-mail(required):</div>
				<input name="user" type="text"  maxlength="70" class="textBox"/>
				
				<div class="text">* Enter Password(required):</div>
				
				<input name="pwd" type="password" maxlength="70" class="textBox"/>
				
				<input type="submit" class="button" value="SEND FORM" />			
				<div class="clear"></div>
			</form>	
		</div>
	</div>
</body>
</html>