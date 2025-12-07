<?php
define('API_KEY', '57962632a0msh6ec3f17ea71332dp1a32d5jsn5d1ceb1c4311');
define('API_HOST', 'api-mobile-game-nickname-checker.p.rapidapi.com');
define('SITE_NAME', 'GameTopUp');

$games = [
    'mobile-legend' => ['name' => 'Mobile Legends', 'icon' => '⚔️', 'zone' => true, 'placeholder' => '114935204', 'prices' => [['diamonds' => '50', 'price' => 15000], ['diamonds' => '100', 'price' => 28000], ['diamonds' => '250', 'price' => 68000], ['diamonds' => '500', 'price' => 135000]]],
    'call-of-duty-mobile' => ['name' => 'Call of Duty', 'icon' => '🔫', 'zone' => false, 'placeholder' => '10808316016143544796', 'prices' => [['cp' => '80', 'price' => 16000], ['cp' => '400', 'price' => 75000], ['cp' => '800', 'price' => 150000]]],
    'arena-of-valor' => ['name' => 'Arena of Valor', 'icon' => '⚡', 'zone' => false, 'placeholder' => '2748846783202461', 'prices' => [['voucher' => '60', 'price' => 14000], ['voucher' => '300', 'price' => 68000], ['voucher' => '600', 'price' => 135000]]],
    'stumble-guys' => ['name' => 'Stumble Guys', 'icon' => '🏃', 'zone' => false, 'placeholder' => 'mTurboGamer', 'prices' => [['gems' => '100', 'price' => 12000], ['gems' => '500', 'price' => 58000], ['gems' => '1000', 'price' => 115000]]],
    'ea-fc' => ['name' => 'EA FC Mobile', 'icon' => '⚽', 'zone' => false, 'placeholder' => '659244876873490432', 'prices' => [['points' => '500', 'price' => 18000], ['points' => '1200', 'price' => 42000], ['points' => '2500', 'price' => 85000]]],
    'genshin-impact' => ['name' => 'Genshin Impact', 'icon' => '🗡️', 'zone' => true, 'placeholder' => '800010000', 'zoneOptions' => ['os_asia', 'os_usa', 'os_euro', 'os_cht'], 'prices' => [['genesis' => '60', 'price' => 16000], ['genesis' => '300', 'price' => 79000], ['genesis' => '980', 'price' => 249000], ['genesis' => '1980', 'price' => 479000]]],
    'blood-strike' => ['name' => 'Blood Strike', 'icon' => '🩸', 'zone' => false, 'placeholder' => '586016025134', 'prices' => [['gold' => '100', 'price' => 15000], ['gold' => '500', 'price' => 70000], ['gold' => '1000', 'price' => 135000]]],
    'racing-master' => ['name' => 'Racing Master', 'icon' => '🏎️', 'zone' => false, 'placeholder' => '6359421899', 'prices' => [['gems' => '100', 'price' => 14000], ['gems' => '500', 'price' => 68000], ['gems' => '1200', 'price' => 155000]]],
    'sausage-man' => ['name' => 'Sausage Man', 'icon' => '🌭', 'zone' => false, 'placeholder' => '7fs17x', 'prices' => [['candy' => '60', 'price' => 12000], ['candy' => '300', 'price' => 58000], ['candy' => '650', 'price' => 120000]]],
];
