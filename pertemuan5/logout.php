<<<<<<< HEAD
<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
    alert("Anda berhasil logout");
    window.location="login-page.php";
    </script>';
}else {
    header("Location:login-page.php");
    exit();
=======
<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
    alert("Anda berhasil logout");
    window.location="login-page.php";
    </script>';
}else {
    header("Location:login-page.php");
    exit();
>>>>>>> 0fd48be4ee8ecfc958d16aa350b920574a61b311
}