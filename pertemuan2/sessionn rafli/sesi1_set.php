<?php
//memulai sesi
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        $_SESSION['nama'] = "Rafli Adi Firmansyah";

        $_SESSION['absen'] = 20;

        echo "Nama saya : " . $_SESSION['nama'] . "<br>" . "Nomor Absen : " . $_SESSION['absen'];
        ?>
    </body>
</html>