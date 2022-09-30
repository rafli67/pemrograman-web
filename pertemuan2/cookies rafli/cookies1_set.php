<?php
$cookies_name = "user";
$cookies_value = "Rafli Adi Firmansyah";

setcookie($cookies_name,$cookies_value,time() + 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Cookies 1</title>
    </head>

    <body>
        <?php
        if(isset($_COOKIE[$cookies_name])) {
            echo "Cookies dengan nama " . $cookies_name . " tersedia. " . "<br>";
            echo "Dengan Value : " . $_COOKIE[$cookies_name];
        } else {
            echo " Cookies has not been create / removed";
        }
        ?>
    </body>

</html>