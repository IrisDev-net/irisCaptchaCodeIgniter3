<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test Iris Captcha</title>
</head>
<body style="padding:100px;">
<form Method="get" action="<?php echo base_url();?>index.php/iriscaptcha/check_answer" >
<input name="Username" required type="text" placeholder="Username" />
<input name="Password" required type="passowrd" placeholder="Password" />
<button type="submit">Submit | Click Me!</button>
<iris-captcha name="irisCaptcha" />
</form>
<?php
echo $js;
?>
</body>
</html>