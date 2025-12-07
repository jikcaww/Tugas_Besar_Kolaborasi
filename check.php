<?php
require_once 'config.php';
require_once 'functions.php';
$page = 'check';
$pageTitle = 'Cek Username - ' . SITE_NAME;

$result = null;
$selectedGame = $_GET['game'] ?? ($_POST['game'] ?? 'mobile-legend');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $game = $_POST['game'] ?? '';
    $userId = trim($_POST['userId'] ?? '');
    $zoneId = trim($_POST['zoneId'] ?? '');
    
    $selectedGame = $game;
    
    if ($game && $userId) {
        $result = checkNickname($game, $userId, $zoneId);
    } else {
        $result = ['error' => 'User ID wajib diisi'];
    }
}
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
                <li><a href="check.php" class="active">Cek Username</a></li>
                <li><a href="reviews.php">Review</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>🔍 Cek Username Game</h1>
            <p>Pastikan User ID kamu benar sebelum melakukan top up</p>
        </div>

        <div class="check-container">
            <form method="POST" class="check-form">
                <div class="form-group">
                    <label>Pilih Game</label>
                    <div class="game-selector">
                        <?php foreach ($games as $id => $game): ?>
                        <label class="game-option">
                            <input type="radio" 
                                   name="game" 
                                   value="<?= $id ?>" 
                                   <?= $selectedGame === $id ? 'checked' : '' ?>
                                   onchange="updateForm('<?= $id ?>')">
                            <div class="game-option-content">
                                <span class="game-option-icon"><?= $game['icon'] ?></span>
                                <span class="game-option-name"><?= htmlspecialchars($game['name']) ?></span>
                            </div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="userId">User ID</label>
                    <input type="text" 
                           name="userId" 
                           id="userId" 
                           class="form-control"
                           placeholder="Masukkan User ID"
                           value="<?= htmlspecialchars($_POST['userId'] ?? '') ?>"
                           required>
                    <small class="form-hint" id="userIdHint">
                        Contoh: <?= $games[$selectedGame]['placeholder'] ?>
                    </small>
                </div>

                <div class="form-group" id="zoneGroup" style="display: <?= $games[$selectedGame]['zone'] ? 'block' : 'none' ?>">
                    <label for="zoneId">Zone ID / Server</label>
                    <?php if (isset($games[$selectedGame]['zoneOptions'])): ?>
                    <select name="zoneId" id="zoneId" class="form-control">
                        <?php foreach ($games[$selectedGame]['zoneOptions'] as $option): ?>
                        <option value="<?= $option ?>" <?= ($_POST['zoneId'] ?? '') === $option ? 'selected' : '' ?>>
                            <?= strtoupper(str_replace('os_', '', $option)) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <small class="form-hint">Pilih server region</small>
                    <?php else: ?>
                    <input type="text" 
                           name="zoneId" 
                           id="zoneId" 
                           class="form-control"
                           placeholder="Masukkan Zone ID"
                           value="<?= htmlspecialchars($_POST['zoneId'] ?? '') ?>">
                    <small class="form-hint">Untuk Mobile Legends</small>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary btn-block">🔍 Cek Username</button>
            </form>

            <?php if ($result): ?>
            <div class="result-box <?= isset($result['error']) ? 'error' : 'success' ?>">
                <?php if (isset($result['error'])): ?>
                    <div class="result-icon">❌</div>
                    <div class="result-message"><?= htmlspecialchars($result['error']) ?></div>
                <?php else: ?>
                    <?php $nickname = getNickname($result); ?>
                    <?php if ($nickname): ?>
                        <div class="result-icon">✅</div>
                        <div class="result-label">Username Ditemukan</div>
                        <div class="result-value"><?= htmlspecialchars($nickname) ?></div>
                        <a href="prices.php?game=<?= $selectedGame ?>" class="btn btn-primary">Lanjut Top Up</a>
                    <?php else: ?>
                        <div class="result-icon">⚠️</div>
                        <div class="result-message">Username tidak ditemukan</div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-container">
            <p>&copy; 2024 <?= SITE_NAME ?>. Made with ❤️ for gamers</p>
        </div>
    </footer>

    <script>
    const games = <?= json_encode($games) ?>;

    function updateForm(gameId) {
        const game = games[gameId];
        const zoneGroup = document.getElementById('zoneGroup');
        const userIdHint = document.getElementById('userIdHint');
        
        // Toggle zone field
        zoneGroup.style.display = game.zone ? 'block' : 'none';
        
        // Update hint
        userIdHint.textContent = 'Contoh: ' + game.placeholder;
        
        // Update zone hint
        const zoneHint = zoneGroup.querySelector('.form-hint');
        if (zoneHint) {
            if (gameId === 'genshin-impact') {
                zoneHint.textContent = 'Pilih server region';
            } else {
                zoneHint.textContent = 'Untuk Mobile Legends';
            }
        }
    }
    </script>
</body>
</html>
