<?php
require_once 'config.php';
require_once 'functions.php';
$page = 'prices';
$pageTitle = 'Daftar Harga - ' . SITE_NAME;
$selectedGame = $_GET['game'] ?? 'mobile-legend';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">🎮 <?= SITE_NAME ?></a>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="prices.php" class="active">Daftar Harga</a></li>
                <li><a href="check.php">Cek Username</a></li>
                <li><a href="reviews.php">Review</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>💰 Daftar Harga Top Up</h1>
            <p>Pilih game dan nominal yang kamu inginkan</p>
        </div>

        <div class="game-tabs">
            <?php foreach ($games as $id => $game): ?>
            <a href="?game=<?= $id ?>" 
               class="game-tab <?= $selectedGame === $id ? 'active' : '' ?>">
                <span class="tab-icon"><?= $game['icon'] ?></span>
                <span class="tab-name"><?= htmlspecialchars($game['name']) ?></span>
            </a>
            <?php endforeach; ?>
        </div>

        <?php if (isset($games[$selectedGame])): ?>
        <div class="prices-container">
            <h2><?= $games[$selectedGame]['icon'] ?> <?= htmlspecialchars($games[$selectedGame]['name']) ?></h2>
            <div class="prices-grid">
                <?php foreach ($games[$selectedGame]['prices'] as $price): ?>
                <div class="price-card">
                    <div class="price-badge">
                        <?php
                        $key = array_key_first($price);
                        if ($key !== 'price') {
                            echo $price[$key] . ' ' . ucfirst($key);
                        }
                        ?>
                    </div>
                    <div class="price-amount"><?= formatRupiah($price['price']) ?></div>
                    <a href="check.php?game=<?= $selectedGame ?>" class="btn btn-primary btn-block">Beli Sekarang</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="info-box">
            <h3>📝 Cara Top Up</h3>
            <ol>
                <li>Pilih game yang ingin di top up</li>
                <li>Pilih nominal yang diinginkan</li>
                <li>Masukkan User ID (dan Zone ID untuk Mobile Legends)</li>
                <li>Pilih metode pembayaran</li>
                <li>Selesaikan pembayaran</li>
                <li>Item akan masuk otomatis ke akun game kamu</li>
            </ol>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <p>&copy; 2025 <?= SITE_NAME ?>. Made with ❤ for gamers</p>
        </div>
    </footer>
</body>
</html>