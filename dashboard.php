<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - Random Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">

  <div class="container p-0 mb-4 mt-4 rounded-3 shadow bg-white">

    <!-- Menu -->
    <nav class="d-md-flex p-4">
      <div><h1>Random Book.</h1></div>
      <div class="ms-auto my-auto">
        <ul class="list-inline m-0">
          <li class="list-inline-item mx-md-3"><a href="#collections" class="text-decoration-none text-dark fw-bold">Produk Kami</a></li>
          <li class="list-inline-item mx-md-3"><a href="#tentang" class="text-decoration-none text-dark fw-bold">Tentang Kami</a></li>
          <li class="list-inline-item mx-md-3"><a href="#order" class="text-decoration-none text-dark fw-bold">Cara Order</a></li>
          <li class="list-inline-item mx-md-3"><a href="keranjang.php" class="text-decoration-none text-dark fw-bold">🛒</a></li>
          <li class="list-inline-item mx-md-3"><a href="pembayaran.php" class="text-decoration-none text-dark fw-bold">Transaksi</a></li>
          <li class="list-inline-item mx-md-3"><a href="riwayat.php" class="text-decoration-none text-dark fw-bold">Riwayat</a></li>
          <li class="list-inline-item mx-md-3"><a href="logout.php" class="text-decoration-none text-danger fw-bold">Logout</a></li>
        </ul>
      </div>
    </nav>

    <!-- Banner -->
    <div class="px-4 mb-4">
      <img src="img/Banner1.png" class="w-100 rounded-3" alt="Banner Random Book" />
    </div>

    <!-- Koleksi -->
    <h3 class="text-center" id="collections">Koleksi Kami</h3>
    <div class="text-center w-50 mx-auto fw-light">
      Temukan pilihan buku fiksi dan nonfiksi yang dikurasi khusus untuk menginspirasi perubahan diri.
    </div>

    <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
      <?php
        $books = [
          [
            "judul" => "Atomic Habits",
            "deskripsi" => "Cara mudah membentuk kebiasaan baik yang kecil namun berdampak besar.",
            "harga" => "Rp108.000",
            "gambar" => "img/buku7.jpg"
          ],
          [
            "judul" => "Filosofi Teras",
            "deskripsi" => "Stoikisme modern untuk hidup damai dan bebas dari overthinking.",
            "harga" => "Rp79.000",
            "gambar" => "img/buku10.png"
          ],
          [
            "judul" => "Kebiasaan & Rutinitas",
            "deskripsi" => "Memahami perbedaan antara kebiasaan dan rutinitas dalam kehidupan.",
            "harga" => "Rp47.000",
            "gambar" => "img/buku9.avif"
          ],
          [
            "judul" => "Komet Minor (Tere Liye)",
            "deskripsi" => "Petualangan fantasi dari dunia Klan Komet Minor dengan nilai-nilai kehidupan.",
            "harga" => "Rp100.000",
            "gambar" => "img/buku8.jpg"
          ],
          [
            "judul" => "The Psychology of Money",
            "deskripsi" => "Bagaimana manusia berpikir tentang uang, investasi, dan perilaku keuangan.",
            "harga" => "Rp76.500",
            "gambar" => "img/buku11.jpg"
          ]
        ];

        foreach ($books as $book) {
          echo '
          <div class="col mb-5">
            <div class="card shadow h-100">
              <img src="'.$book["gambar"].'" class="card-img-top" />
              <div class="card-body">
                <p class="card-text fw-bold">'.htmlspecialchars($book["judul"]).'</p>
                <p class="card-text">'.$book["deskripsi"].'</p>
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <button class="btn btn-sm btn-primary btnDetail me-2"
                  data-judul="'.htmlspecialchars($book["judul"]).'"
                  data-deskripsi="'.htmlspecialchars($book["deskripsi"]).'"
                  data-gambar="'.$book["gambar"].'"
                  data-harga="'.$book["harga"].'"
                >Detail</button>
                <button class="btn btn-sm btn-success btnKeranjang"
                  data-judul="'.htmlspecialchars($book["judul"]).'"
                  data-harga="'.$book["harga"].'"
                  data-gambar="'.$book["gambar"].'"
                >+ Keranjang</button>
              </div>
            </div>
          </div>';
        }
      ?>
    </div>

    <!-- Tentang Kami -->
    <div id="tentang" class="px-3 py-5 bg-secondary text-center text-white">
      <div class="mx-auto w-75">
        <h3>📝Tentang Kami</h3>
        <p>Saya adalah seorang mahasiswi yang memiliki ketertarikan dalam teknologi dan literasi. Random Book hadir sebagai sarana untuk berbagi buku-buku terbaik yang menginspirasi perubahan positif dalam hidup.</p>
      </div>
    </div>

    <!-- Cara Order -->
<div id="order" class="px-3 py-5 bg-light text-center">
  <div class="mx-auto w-75">
    <h3 class="text-black">🛒 Cara Order</h3>
    <ol class="text-start text-black">
      <li><strong>Login</strong> ke akun Anda menggunakan email dan password yang sudah didaftarkan.</li>
      <li><strong>Pilih buku</strong> dari halaman dashboard, lalu klik tombol <em>“+ Keranjang”</em> untuk menambahkannya.</li>
      <li><strong>Lihat Keranjang:</strong> Anda bisa mengubah jumlah, menambahkan catatan, atau menghapus buku dari daftar.</li>
      <li><strong>Lanjutkan Pembayaran</strong> dengan mengisi data diri dan memilih metode pembayaran.</li>
      <li><strong>Konfirmasi Pembayaran:</strong> Setelah transaksi berhasil, sistem akan menyimpan data ke dalam <em>Riwayat Pembelian</em>.</li>
    </ol>
  </div>
</div>


  <!-- Modal Detail -->
  <div class="modal fade" id="bookModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title modalTitle">Detail Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <img src="" class="img-fluid modalImage mb-3">
          <p class="modalDeskripsi"></p>
          <p class="modalHarga text-danger fw-bold"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Tombol Detail
    document.querySelectorAll('.btnDetail').forEach((btn) => {
      btn.addEventListener('click', () => {
        const judul = btn.dataset.judul;
        const deskripsi = btn.dataset.deskripsi;
        const gambar = btn.dataset.gambar;
        const harga = btn.dataset.harga;

        document.querySelector('.modalTitle').innerText = judul;
        document.querySelector('.modalImage').src = gambar;
        document.querySelector('.modalDeskripsi').innerText = deskripsi;
        document.querySelector('.modalHarga').innerText = "Harga: " + harga;

        new bootstrap.Modal(document.getElementById('bookModal')).show();
      });
    });

    // Tombol Keranjang
    document.querySelectorAll('.btnKeranjang').forEach((btn) => {
      btn.addEventListener('click', () => {
        const judul = btn.dataset.judul;
        const harga = btn.dataset.harga;
        const gambar = btn.dataset.gambar;

        let keranjang = JSON.parse(localStorage.getItem('keranjang')) || [];

        const existing = keranjang.find(item => item.judul === judul);
        if (existing) {
          existing.qty += 1;
        } else {
          keranjang.push({ judul, harga, gambar, qty: 1, note: '' });
        }

        localStorage.setItem('keranjang', JSON.stringify(keranjang));
        alert("✅ Buku ditambahkan ke keranjang!");
      });
    });
  </script>

</body>
</html>
