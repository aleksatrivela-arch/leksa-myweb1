<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indah Donuts</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #ffe5eb;
            font-family: 'Arial';
        }

        /* NAVBAR */
        .navbar-custom {
            background: white;
            margin: 20px auto;
            border-radius: 35px;
            width: 90%;
            padding: 12px 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .navbar-custom a {
            color: #333 !important;
            font-weight: bold;
            margin: 0 15px;
        }

        .logo-text {
            font-size: 26px;
        }

        .logo-text span {
            color: #ff4f8b;
        }

        /* HERO SECTION (HOME) */
        .hero {
            margin-top: 30px;
            padding: 50px 0;
        }

        .hero-title {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.2;
        }

        .hero-title span {
            color: #ff9db5;
        }

        .hero-desc {
            max-width: 480px;
            font-size: 16px;
            margin-top: 20px;
            color: #444;
        }

        .cta-btn {
            background: #ff8aaa;
            border: none;
            padding: 12px 28px;
            border-radius: 40px;
            color: white;
            font-size: 18px;
            margin-top: 25px;
            box-shadow: 0 4px 10px rgba(255, 124, 150, 0.4);
        }

        .donuts-img {
            width: 600px;
        }

        /* MENU PAGE */
        .menu-title {
            font-weight: 800;
            font-size: 40px;
            text-align: center;
            margin: 40px 0;
        }

        .menu-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start; 
            gap: 25px;
        }

        .donut-card {
            width: 260px;
            height: 360px;
            border-radius: 20px;
            padding: 15px;
            position: relative;
            text-align: center;
            box-shadow: 0 8px 18px rgba(0,0,0,0.15);
            transition: transform 0.25s ease;
            overflow: visible;
        }

        .donut-card:hover {
            transform: rotate(-0deg) scale(1.05);
            filter: brightness(1.1);
        }

        .search-box {
            background: rgba(255,255,255,0.7);
            padding: 6px 10px;
            height: 32px;
            border-radius: 20px;
            width: 70%;
            font-size: 13px;
            border: none;
            outline: none;
        }

        .bell-icon {
            position: absolute;
            right: 18px;
            top: 18px;
            color: white;
            opacity: 0.8;
        }

        .donut-big-text {
            font-size: 30px;
            font-weight: bold;
            margin-top: 40px;
        }
        .donut-image {
        width: 160px;
            height: 160px;
            object-fit: contain;
            margin: -40px auto 5px auto; /* Gambar sedikit ke atas */
            display: block;
            transform: rotate(-8deg);
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .price-label {
            font-size: 16px;
            font-weight: bold;
            margin: 6px 0;
        }

        .qty-box {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            gap: 10px;
        }

        .qty-btn {
            background: rgba(255,255,255,0.6);
            width: 32px;
            height: 32px;
            border-radius: 8px;
            border: none;
            font-weight: bold;
            color: white;
            font-size: 18px;
        }

        .order-btn {
            width: 80%;
            margin-top: 15px;
            background: rgba(255,255,255,0.8);
            color: #333;
            border: none;
            padding: 8px 0;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
        }

        .heart {
            position: absolute;
            bottom: 15px;
            right: 15px;
            font-size: 20px;
            opacity: 0.9;
        }

    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-brand logo-text" href="index.php?page=home">
        Indah<span>Donuts</span>
    </a>

    <div class="ms-auto d-flex align-items-center nav-links">
        <a href="index.php?page=home"><i class="fa fa-house"></i> Home</a>
        <a href="index.php?page=menu"><i class="fa fa-cookie-bite"></i> Menu</a>
        <a href="index.php?page=order"><i class="fa fa-cart-shopping"></i> Order</a>
    </div>
</nav>


<?php
$page = $_GET['page'] ?? 'home';

/* ================================================
   ========== PAGE: HOME ===========================
   ================================================*/
if ($page == "home"):
?>

<div class="container hero">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h1 class="hero-title">
                Sweet Rings Happiness,<br>
                <span>Delivered Daily.</span>
            </h1>

            <p class="hero-desc">
                “Baru saja tersajikan dan dibalut penuh cinta – 
                <span style='color:#ff4f8b;'>setiap gigitan manis</span>
                siap menghapus penatmu dan menghadirkan senyum di wajahmu.”
            </p>

            <button class="cta-btn" onclick="window.location.href='index.php?page=menu'">
    <i class="fa fa-bag-shopping"></i> Shop Now
</button>


            <div class="footer-info mt-4">
                <p><i class="fa fa-location-dot"></i> Jalan. Lembaga, Bengkalis</p>
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
        </div>

        <div class="col-md-6 text-center">
           <img src="donut.png" class="donuts-img">

        </div>

    </div>
</div>

<?php 
/* ================================================
   ========== PAGE: MENU ===========================
   ================================================*/
elseif ($page == "menu"): ?>

<h1 class="menu-title">Our Donuts Menu</h1>

<div class="container menu-container">

    <!-- FUNCTION UNTUK BUAT CARD -->
    <?php
   $donuts = [
    ["Strawberry", "#ffb8c8", "strawberry.png"],
    ["Chocolate", "#8d5b33", "chocolate.png"],
    ["Tiramisu", "#e3a43b", "tiramisu.png"],
    ["Matcha", "#3de065", "matcha.png"],
    ["Taro", "#b14def", "taro.png"]
];


    foreach ($donuts as $d):
    ?>
    <div class="donut-card" style="background:<?= $d[1] ?>;">
        <input type="text" class="search-box" placeholder="Search">
        <i class="fa fa-bell bell-icon"></i>

        <div class="donut-big-text"><?= strtoupper($d[0]) ?></div>

       <img src="<?= $d[2] ?>" class="donut-image">

        <p class="price-label">Rp 2.000</p>

        <div class="qty-box">
            <button class="qty-btn" onclick="ubahQty(this, -1)">−</button>
            <span>0</span>
            <button class="qty-btn" onclick="ubahQty(this, 1)">+</button>
        </div>

        <button class="order-btn" onclick="pesan('<?= $d[0] ?>')">Order New</button>
        <i class="fa-regular fa-heart heart"></i>
    </div>

    <?php endforeach; ?>

</div>

<script>
function ubahQty(btn, nilai) {
    let box = btn.parentElement;
    let jumlah = box.querySelector("span");
    let num = parseInt(jumlah.innerText) + nilai;
    if (num < 0) num = 0;
    jumlah.innerText = num;
}

function pesan(rasa) {
    let card = event.target.parentElement;
    let qty = card.querySelector(".qty-box span").innerText;

    if (qty == 0) {
        alert("Jumlah pesanan masih 0. Tambahkan dulu ya 😊");
        return;
    }

    window.location.href = "index.php?page=order&rasa=" + rasa + "&qty=" + qty;
}
</script>

<?php
/* ======================================================
   ORDER PAGE - STRUK BELANJA
====================================================== */
elseif ($page == "order"): 

$rasa = $_GET['rasa'] ?? '';
$qty  = $_GET['qty'] ?? 0;
$harga = 2000;
$total = $harga * $qty;

?>

<div class="container mt-5" style="max-width: 450px;">

    <div class="receipt">

        <h3 class="text-center fw-bold">INDAH DONUTS</h3>
        <p class="text-center">Jalan Lembaga, Bengkalis</p>

        <hr>

        <p><strong>Tanggal:</strong> <?= date("d-m-Y") ?></p>
        <p><strong>Waktu:</strong> <?= date("H:i:s") ?></p>

        <hr>

        <?php if ($qty > 0): ?>
        <p><strong>Item:</strong> <?= $rasa ?></p>
        <p><strong>Jumlah:</strong> <?= $qty ?></p>
        <p><strong>Harga Satuan:</strong> Rp 2.000</p>

        <hr>

        <h4 class="fw-bold">Total: Rp <?= number_format($total) ?></h4>
        <?php else: ?>
        <p class="text-danger">Belum ada pesanan.</p>
        <?php endif; ?>

        <hr>

        <p class="text-center">Makasih sudah pilih donat kami! Datang lagi yaa, manisnya selalu nunggu kamu! 🍩💗</p>

    </div>

    <button class="btn btn-dark w-100 mt-3 no-print" onclick="window.print()">
        <i class="fa fa-print"></i> Print Struk
    </button>

    <a class="btn btn-success w-100 mt-2 no-print"
       href="https://wa.me/6281363112447?text=Halo%20Saya%20ingin%20pesan%20Donut%20<?= urlencode($rasa) ?>%20sebanyak%20<?= $qty ?>%20pcs.%20Total%20Rp%20<?= $total ?>">
       <i class="fa fa-whatsapp"></i> Pesan via WhatsApp
    </a>

</div>


<?php endif; ?>

</body>
</html>
