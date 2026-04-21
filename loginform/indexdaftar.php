<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Akun - web SAI Delayota</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>
<body>
  <div class="wrapper">
    <div class="title"><span>Daftar Akun</span></div>
    <form action="cekdaftar.php" method="post">
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" required />
        </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <div class="row">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="row">
        <i class="fas fa-phone"></i>
        <input type="text" name="no_telp" placeholder="Nomor Telepon" required />
      </div>
      <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="level" placeholder="Level" required />
      </div>
      <div class="row button">
        <input type="submit" value="Daftar" />
      </div>
      <div class="signup-link">Sudah punya akun? <a href="index.php">Login Sekarang!</a></div>
    </form>
  </div>
</body>
</html>
