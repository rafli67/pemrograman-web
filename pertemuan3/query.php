<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}   echo "Connection Successfully to Project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMALENGKAP, ALAMAT, TTL, NIP,
JURUSAN) VALUES('','Rafli Adi Firmansyah,'Sangkrah-Pasar Kliwon','2005-08-10','K9067583','RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection)
?>