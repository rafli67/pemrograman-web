<?
session_start();
// membuat database / isikan dengan mnama kamu
$database = [
    'username' => 'rafli',
    'password' => 'rondoo1'
];

// cek apakah terdapat submit yang dilakukan
if(isset($_POST['submit'])){
    // mengambil nilai yang dikirim melalui method post ke dalam variabel
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengecek apakah username dan password sesuai dengan database
    if ($username == $database['username'] && $password == $database['password']) {
        // set session username
        $_SESSION['username'] = $username;
        // redirect/mengarahkan meuju halaman admin
        header("location:admin.php");
    } else {
        // memunculkan pemberitahuan gagal login dan redirect ke login page
        echo '<script> alert("username atau password salah!");
        window.location="login-page.php"; </script>';
    }
} else {
    // jika tidak ada submit mengembalikan ke login-page
    echo '<script> window.location="login-page.php; ,</script>';
}
?>