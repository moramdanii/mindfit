# 🧠 MindFit - Platform Kesehatan Mental & Kepribadian

<p align="center">
  <img src="https://github.com/user-attachments/assets/3d4b501f-9d5e-4b4a-87ed-0214651ff762" width="300" alt="MindFit Logo">
</p>

<p align="center">
  <strong>Platform web untuk tes kepribadian, cek kesehatan mental, dan fitur wellness lainnya</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.33.0-red?logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.4.3-blue?logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap" alt="Bootstrap">
  <img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

---

## 📋 Tentang MindFit

MindFit adalah platform web yang menyediakan berbagai fitur untuk membantu Anda mengenal diri sendiri lebih baik, melacak kesehatan mental, dan mendapatkan insights tentang kepribadian Anda.

### ✨ Fitur Utama

- 🔮 **Cek Zodiak & Kepribadian** - Temukan zodiak Anda berdasarkan tanggal lahir dengan karakteristik lengkap
- 🧠 **Tes MBTI** - Personality test untuk mengetahui tipe kepribadian Myers-Briggs
- 📊 **Kalkulator BMI** - Cek berat & tinggi badan ideal
- 📅 **Prediksi Haid** - Tracking dan prediksi siklus menstruasi
- 👤 **User & Admin Role** - Sistem role untuk user biasa dan administrator
- 💰 **Freemium Model** - Fitur gratis + subscription premium

---

## 🚀 Tech Stack

- **Backend Framework**: Laravel 12.33.0
- **Frontend**: Bootstrap 5, Blade Template
- **Database**: SQLite (Development) / MySQL (Production)
- **PHP Version**: 8.4.3
- **Package Manager**: Composer & NPM

---

## 📦 Instalasi

### Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- SQLite atau MySQL

### Langkah Instalasi

1. **Clone Repository**
```bash
git clone https://github.com/Denngrh/mindfit.git
cd mindfit
```

2. **Install Dependencies**
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

3. **Setup Environment**
```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

4. **Setup Database**
```bash
# Jalankan migration dan seeder
php artisan migrate:fresh --seed

# Atau jika ingin seeder zodiak saja
php artisan db:seed --class=ZodiacSeeder
```

5. **Build Assets**
```bash
# Compile assets
npm run build

# Atau untuk development dengan watch
npm run dev
```

6. **Jalankan Server**
```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

---

## 🎯 Fitur Detail

### 1. 🔮 Zodiak & Kepribadian

**Status**: ✅ Selesai (Gratis untuk semua user)

Fitur untuk mengecek zodiak berdasarkan tanggal lahir dengan informasi lengkap:
- Karakteristik zodiak
- Kekuatan & kelemahan
- Warna & angka keberuntungan
- Elemen zodiak
- Deskripsi lengkap

**Cara Akses**:
- Menu: `Fitur Kami → Zodiak & Kepribadian`
- Direct URL: `/zodiac`
- Lihat semua zodiak: `/zodiac/all`

**Tech Implementation**:
- Model: `App\Models\Zodiac`
- Controller: `App\Http\Controllers\ZodiacController`
- Migration: `database/migrations/2024_10_16_000001_create_zodiacs_table.php`
- Seeder: `database/seeders/ZodiacSeeder.php`

**Logic Zodiak**:
```php
// Konversi tanggal ke format MMDD (integer)
$monthDay = ($month * 100) + $day;

// Cek range zodiak
if ($monthDay >= $startDate && $monthDay <= $endDate) {
    return $zodiac;
}

// Special case: Capricorn (melewati tahun)
if ($monthDay >= $startDate || $monthDay <= $endDate) {
    return $zodiac;
}
```

### 2. 🧠 Tes MBTI
**Status**: 🚧 Coming Soon

### 3. 📊 Kalkulator BMI  
**Status**: 🚧 Coming Soon

### 4. 📅 Prediksi Haid
**Status**: 🚧 Coming Soon

---

## 📂 Struktur Project

```
mindfit/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── ZodiacController.php
│   └── Models/
│       ├── User.php
│       └── Zodiac.php
├── database/
│   ├── migrations/
│   │   └── 2024_10_16_000001_create_zodiacs_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── ZodiacSeeder.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── default.blade.php
│       │   └── app.blade.php
│       ├── includes/
│       │   ├── header.blade.php
│       │   ├── footer.blade.php
│       │   ├── head.blade.php
│       │   └── scripts.blade.php
│       └── zodiac/
│           ├── index.blade.php      # Form cek zodiak
│           ├── result.blade.php     # Hasil zodiak
│           └── all.blade.php        # Semua 12 zodiak
├── routes/
│   └── web.php
├── public/
│   └── assets/
└── README.md
```

---

## 🎨 Design System

### Color Palette
- **Primary**: `#667eea` (Purple)
- **Secondary**: `#764ba2` (Violet)
- **Success**: `#28a745` (Green)
- **Info**: `#17a2b8` (Cyan)
- **Warning**: `#ffc107` (Yellow)

### Typography
- **Font Family**: Roboto, Open Sans, Questrial
- **Headings**: Bold, 600-900
- **Body**: Regular, 400

### Components
- **Cards**: Rounded corners (`rounded-4`), shadow effects
- **Buttons**: Rounded pills, hover animations
- **Icons**: Bootstrap Icons + Emoji

---

## 🗄️ Database Schema

### Tabel: `zodiacs`

| Column         | Type    | Description                    |
|----------------|---------|--------------------------------|
| id             | bigint  | Primary key                    |
| name           | string  | Nama zodiak (Aries, Taurus...) |
| symbol         | string  | Symbol zodiak (♈, ♉, ♊...)     |
| start_month    | integer | Bulan mulai (1-12)             |
| start_day      | integer | Tanggal mulai (1-31)           |
| end_month      | integer | Bulan akhir (1-12)             |
| end_day        | integer | Tanggal akhir (1-31)           |
| element        | string  | Elemen (Fire, Earth, Air, Water)|
| description    | text    | Deskripsi zodiak               |
| characteristics| text    | Karakteristik                  |
| strengths      | text    | Kekuatan                       |
| weaknesses     | text    | Kelemahan                      |
| lucky_color    | string  | Warna keberuntungan            |
| lucky_number   | string  | Angka keberuntungan            |
| created_at     | timestamp | -                            |
| updated_at     | timestamp | -                            |

---

## 🔧 Development

### Menjalankan Development Server
```bash
# Terminal 1: Laravel Server
php artisan serve

# Terminal 2: Asset Watcher (optional)
npm run dev
```

### Clear Cache
```bash
# Clear semua cache
php artisan optimize:clear

# Clear specific cache
php artisan view:clear
php artisan config:clear
php artisan cache:clear
php artisan route:clear
```

### Database Commands
```bash
# Fresh migration dengan seeder
php artisan migrate:fresh --seed

# Rollback migration
php artisan migrate:rollback

# Jalankan seeder saja
php artisan db:seed
php artisan db:seed --class=ZodiacSeeder
```

---

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter ZodiacTest
```

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 👨‍💻 Developer

**Denngrh**
- GitHub: [@Denngrh](https://github.com/Denngrh)
- Repository: [mindfit](https://github.com/Denngrh/mindfit)

---

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework
- [Bootstrap](https://getbootstrap.com) - Frontend Framework
- [Bootstrap Icons](https://icons.getbootstrap.com) - Icon Library
- Zodiac data and characteristics compiled from various astrological sources

---

## 📞 Support

Jika Anda menemukan bug atau memiliki saran, silakan buat [Issue](https://github.com/Denngrh/mindfit/issues) di repository ini.

---

<p align="center">Made with ❤️ by Denngrh</p>

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
