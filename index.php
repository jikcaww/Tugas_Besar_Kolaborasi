<?php
require_once 'config.php';
$page = 'home';
$pageTitle = 'Home - ' . SITE_NAME;
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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="prices.php">Daftar Harga</a></li>
                <li><a href="check.php">Cek Username</a></li>
                <li><a href="reviews.php">Review</a></li>
            </ul>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-content">
            <div class="hero-icon">🎮</div>
            <h1>Selamat Datang di <?= SITE_NAME ?></h1>
            <p>Top Up Game Favorit Kamu dengan Mudah dan Cepat</p>
            <div class="hero-buttons">
                <a href="prices.php" class="btn btn-primary">Lihat Harga</a>
                <a href="check.php" class="btn btn-secondary">Cek Username</a>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="features">
            <h2>Kenapa Pilih Kami?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Proses Cepat</h3>
                    <p>Top up langsung masuk dalam hitungan menit</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>Harga Terjangkau</h3>
                    <p>Harga kompetitif dengan promo menarik</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Aman & Terpercaya</h3>
                    <p>Transaksi dijamin aman 100%</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>24/7 Support</h3>
                    <p>Customer service siap membantu kapan saja</p>
                </div>
            </div>
        </section>

        <section class="games-section">
            <h2>Game Populer</h2>
            <div class="games-grid">
                <?php foreach ($games as $id => $game): ?>
                <div class="game-card">
                    <div class="game-icon-large"><?= $game['icon'] ?></div>
                    <h3><?= htmlspecialchars($game['name']) ?></h3>
                    <a href="prices.php?game=<?= $id ?>" class="btn btn-small">Lihat Harga</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <p>&copy; 2025 <?= SITE_NAME ?>. Made with ❤️ for gamers</p>
        </div>
    </foote