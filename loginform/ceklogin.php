<?php
// mengaktifkan session pada php
session_start();
 // menghubungkan php dengan koneksi database
include 'koneksi.php';
 // menangkap data yang dikirim dari form login
$username = $_POST["username"];
$userpass = $_POST["password"];
 // menyeleksi data user dengan username dan password yang sesuai
 $login = mysqli_query($koneksi,"SELECT username, password, level 
        FROM user WHERE username='$username'");
        list($username, $password, $level) = mysqli_fetch_array($login);


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah username dan password di temukan pada database.
if($cek > 0){

    if (password_verify($userpass, $password)) {
    if($level=="admin") {
     session_start();
     $_SESSION['username'] = $username;
     $_SESSION['level'] = $level;
        header("location:../admin/index.php");
     }else if ($level=="operator"){
     session_start();
      $_SESSION ['username'] = $username;
      $_SESSION['level'] = $level;
        header("location:../admin/index.php");
       }else if($level=="pengunjung"){
       session_start();
       $_SESSION['username'] = $username;
       $_SESSION['level'] = $level;
           header("location:../index.php");
    }else{
       header("location:index.php?alert=gagal");}
            die();
            } else { echo '<script language="javascript">
            window.alert("LOGIN GAGAL! Silakan coba lagi,");
            window.location.href="index.php";
            </script>'; }
            } else { echo '<script language="javascript">
              window.alert("LOGIN GAGAL! Silakan coba lagi");
              window.location.href="index.php";
              </script>';
     }

?>

    
        

