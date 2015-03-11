<?php

include('conn.php');

session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if (empty($user) && empty($pass)) {
    //kalau username dan password kosong
    header('location:login.php?error=1');
    break;
} else if (empty($user)) {
    //kalau username saja yang kosong
    header('location:login.php?error=2');
    break;
} else if (empty($pass)) {
    //kalau password saja yang kosong
    //redirect ke halaman login
    header('location:login.php?error=3');
    break;
}

$sql="Select * from user where UserName='" . $user . "' and Password='". $pass ."'";
$result = mysql_query($conn, $sql);
$num=mysql_num_rows($result);

if ($num == 1) {
    //kalau username dan password sudah terdaftar di database
    header('location:index.html');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:login.php?error=4');
}

?>
