<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test Iris Captcha</title>
</head>
<body style="padding:100px;">
<?php
            if($res->is_valid) {
                // Captcha verified - continue ...
                echo "HOOOORAAAA";
            }else{
                echo $res->error;
            }
?>
</body>
</html>