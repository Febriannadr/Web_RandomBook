<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

include 'koneksi.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Katalog Buku - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .card-img-top {
      height: 250px;
      object-fit: cover;
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
    }

    .card-subtitle {
      font-size: 14px;
    }

    .card-text {
      font-size: 14px;
      color: #333;
      max-height: 60px;
      overflow: hidden;
    }

    .btn-cart {
      width: 100%;
      margin-top: 10px;
    }

    .card-body {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
  </style>
</head>
<body class="p-4">

<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">Katalog Buku</h2>
    <a href="logout.php" class="btn btn-danger">Logout</a>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <div class="col">
        <div class="card h-100 d-flex flex-column">
          <!-- Gambar Produk -->
          <img src="assets/img/<?= htmlspecialchars($row['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($row['name']) ?>">

          <!-- Isi Card -->
          <div class="card-body">
            <div>
              <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?= htmlspecialchars($row['category']) ?></h6>
              <p class="card-text"><?= htmlspecialchars($row['description']) ?></p>
            </div>

            <div class="mt-3">
              <p class="mb-1"><strong>Harga:</strong> Rp<?= number_format($row['price'], 0, ',', '.') ?></p>
              <p class="mb-2"><strong>Stok:</strong> <?= $row['stock'] ?></p>

              <!-- Tombol Keranjang -->
              <form method="POST" action="cart.php">
                <input type="hidden" name="product_id" value="<?= $row['id'] ?>">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn btn-success btn-cart">🛒 Masukkan ke Keranjang</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>

</body>
</html>
