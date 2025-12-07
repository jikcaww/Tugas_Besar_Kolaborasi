<?php
require_once 'config.php';
$page = 'reviews';
$pageTitle = 'Review - ' . SITE_NAME;

// Sample reviews data
$reviews = [
    [
        'name' => 'Ahmad Rizki',
        'game' => 'Mobile Legends',
        'rating' => 5,
        'comment' => 'Proses cepat banget! Diamonds langsung masuk dalam 2 menit. Recommended!',
        'date' => '2024-12-05'
    ],
    [
        'name' => 'Siti Nurhaliza',
        'game' => 'Call of Duty Mobile',
        'rating' => 5,
        'comment' => 'Harga murah, pelayanan ramah. Pasti bakal langganan disini.',
        'date' => '2024-12-04'
    ],
    [
        'name' => 'Budi Santoso',
        'game' => 'Mobile Legends',
        'rating' => 4,
        'comment' => 'Bagus sih, cuma sempat delay 5 menit. Tapi overall oke!',
        'date' => '2024-12-03'
    ],
    [
        'name' => 'Dewi Lestari',
        'game' => 'EA FC Mobile',
        'rating' => 5,
        'comment' => 'Top up pertama kali disini, prosesnya mudah dan cepat. Terima kasih!',
        'date' => '2024-12-02'
    ],
    [
        'name' => 'Eko Prasetyo',
        'game' => 'Stumble Guys',
        'rating' => 5,
        'comment' => 'Mantap! Harga lebih murah dari tempat lain. Sukses terus!',
        'date' => '2024-12-01'
    ],
    [
        'name' => 'Fitri Handayani',
        'game' => 'Arena of Valor',
        'rating' => 4,
        'comment' => 'Pelayanan bagus, CS responsif. Cuma website bisa dipercantik lagi.',
        'date' => '2024-11-30'
    ],
];
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
                <li><a href="prices.php">Daftar Harga</a></li>
                <li><a href="check.php">Cek Username</a></li>
                <li><a href="reviews.php" class="active">Review</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>⭐ Review Pelanggan</h1>
            <p>Apa kata mereka tentang layanan kami</p>
        </div>

        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">4.8</div>
                <div class="stat-label">Rating</div>
                <div class="stat-stars">⭐⭐⭐⭐⭐</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1,234</div>
                <div class="stat-label">Total Review</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Kepuasan</div>
            </div>
        </div>

        <div class="reviews-container">
            <?php foreach ($reviews as $review): ?>
            <div class="review-card">
                <div class="review-header">
                    <div class="review-avatar">
                        <?= strtoupper(substr($review['name'], 0, 1)) ?>
                    </div>
                    <div class="review-info">
                        <div class="review-name"><?= htmlspecialchars($review['name']) ?></div>
                        <div class="review-meta">
                            <span class="review-game"><?= htmlspecialchars($review['game']) ?></span>
                            <span class="review-date"><?= date('d M Y', strtotime($review['date'])) ?></span>
                        </div>
                    </div>
                    <div class="review-rating">
                        <?php for ($i = 0; $i < $review['rating']; $i++): ?>
                            ⭐
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="review-comment">
                    <?= htmlspecialchars($review['comment']) ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="cta-box">
            <h3>Punya Pengalaman dengan Kami?</h3>
            <p>Bagikan review kamu dan bantu orang lain!</p>
            <button class="btn btn-primary" onclick="alert('Fitur review akan segera hadir!')">
                ✍️ Tulis Review
            </button>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <p>&copy; 2025 <?= SITE_NAME ?>. Made with ❤️ for gamers</p>
        </div>
    </footer>
</body>
</html>
