# 🎮 GameTopUp - Platform Top Up Game

Platform top up game dengan fitur lengkap: Home, Daftar Harga, Cek Username, dan Review.

## ✨ Fitur

### 🏠 Halaman Home
- Hero section dengan CTA buttons
- Fitur unggulan (Proses Cepat, Harga Terjangkau, Aman, 24/7 Support)
- Grid game populer

### 💰 Halaman Daftar Harga
- Tab selector untuk setiap game
- Grid harga dengan nominal berbeda
- Panduan cara top up

### 🔍 Halaman Cek Username
- Form cek username dengan game selector
- Support Zone ID untuk Mobile Legends
- Real-time validation
- Result display dengan status

### ⭐ Halaman Review
- Statistik rating dan kepuasan
- List review pelanggan
- CTA untuk menulis review

## 🎯 Game yang Didukung

| Game | Icon | Zone ID | Harga Mulai |
|------|------|---------|-------------|
| Mobile Legends | ⚔️ | ✅ | Rp 15.000 |
| Call of Duty Mobile | 🔫 | ❌ | Rp 16.000 |
| Arena of Valor | ⚡ | ❌ | Rp 14.000 |
| Stumble Guys | 🏃 | ❌ | Rp 12.000 |
| EA FC Mobile | ⚽ | ❌ | Rp 18.000 |
| Genshin Impact | 🗡️ | ✅ | Rp 16.000 |
| Blood Strike | 🩸 | ❌ | Rp 15.000 |
| Racing Master | 🏎️ | ❌ | Rp 14.000 |
| Sausage Man | 🌭 | ❌ | Rp 12.000 |

## 🚀 Quick Start

### ⚡ Super Simple - Langsung Jalankan!

```bash
php -S localhost:8000
```

Buka browser: `http://localhost:8000`

✅ **API Key sudah built-in!** Tidak perlu setup tambahan.

### 🔧 (Optional) Gunakan API Key Sendiri

Jika ingin menggunakan API key sendiri:

```bash
# Windows
set RAPID_API_KEY=your_api_key_here

# Linux/Mac
export RAPID_API_KEY=your_api_key_here
```

Lalu jalankan server seperti biasa.

## 📁 Struktur File

```
project/
├── index.php          # Halaman Home
├── prices.php         # Halaman Daftar Harga
├── check.php          # Halaman Cek Username
├── reviews.php        # Halaman Review
├── config.php         # Konfigurasi & data game
├── functions.php      # Fungsi helper
├── header.php         # Header & navbar
├── footer.php         # Footer
├── assets/
│   └── css/
│       └── style.css  # Stylesheet
└── tests/
    └── FileTypeTest.php
```

## 🎨 Fitur Design

- **Gradient Background**: Purple theme yang gaming
- **Responsive Design**: Mobile-first approach
- **Smooth Animations**: Hover effects & transitions
- **Card-based Layout**: Modern & clean
- **Color-coded Status**: Success (green) & Error (red)

## 🔧 Konfigurasi

### Menambah Game Baru

Edit `config.php`:
```php
$games['new-game'] = [
    'name' => 'New Game',
    'icon' => '🎯',
    'zone' => false,
    'placeholder' => 'example-id',
    'prices' => [
        ['item' => '100', 'price' => 10000],
        ['item' => '500', 'price' => 48000],
    ]
];
```

### Menambah Review

Edit `reviews.php`:
```php
$reviews[] = [
    'name' => 'Nama User',
    'game' => 'Nama Game',
    'rating' => 5,
    'comment' => 'Komentar...',
    'date' => '2024-12-07'
];
```

## 🧪 Testing

```bash
composer install
vendor/bin/phpunit
```

## 📱 Browser Support

- ✅ Chrome, Firefox, Safari, Edge (latest)
- ✅ Mobile browsers
- ✅ Responsive design

## 🔒 Keamanan

- Input sanitization dengan `htmlspecialchars()`
- API Key dari environment variable
- HTTPS untuk API calls
- XSS protection

## 📝 License

MIT License

---

Made with ❤️ for gamers by GameTopUp Team
