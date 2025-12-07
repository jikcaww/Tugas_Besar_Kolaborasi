GameTopUp

Platform top up game dengan fitur cek username dan daftar harga untuk 9 game populer.

Cara Pakai

```bash
php -S localhost:8000
```

Buka browser: `http://localhost:8000`

Fitur

- **Home** - Landing page dengan daftar game
- **Daftar Harga** - Harga top up semua game
- **Cek Username** - Validasi username game via API
- **Review** - Testimoni pelanggan

Game yang Didukung

Mobile Legends • Call of Duty • Arena of Valor • Stumble Guys • EA FC Mobile • Genshin Impact • Blood Strike • Racing Master • Sausage Man

Struktur

```
├── index.php          # Home
├── prices.php         # Daftar Harga
├── check.php          # Cek Username
├── reviews.php        # Review
├── config.php         # Konfigurasi
├── functions.php      # Helper
└── assets/css/style.css
```

Testing

```bash
composer install
vendor\bin\phpunit
```

License

MIT
