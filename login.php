<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <style>
    /* ... pakai style yang sama dari contoh kamu ... */
  </style>
</head>
<body>

  <div class="background">
    <div class="form-container">
      <h2>Form Login</h2>
      <form action="proses_login.php" method="POST">
  <label for="email">Alamat Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password">Kata Sandi:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Login</button>
</form>


      <div class="registrasi-link">
        Belum punya akun? <a href="registrasi.php">Register di sini</a>
      </div>
    </div>
  </div>

</body>
</html>
