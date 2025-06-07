# 📚 Perpustakaan

Sistem manajemen perpustakaan berbasis Laravel. Proyek ini mendukung fitur manajemen anggota, buku, kategori buku, peminjaman, pengembalian, dan staf

---

## 🚀 Fitur Utama

- ✅ Dashboard Sederhana
- 👤 Manajemen Anggota
- 📚 Manajemen Buku
- 🏷️ Manajemen Kategori Buku
- 📥 Peminjaman Buku
- 📤 Pengembalian Buku
- 👨‍💼 Manajemen Staf

---

## 📦 Tech Stack

- PHP 8.2
- Laravel 11
- MySQL


## 🔧 Cara Install

### 1. Clone Repositori

```bash
git clone https://github.com/ArilPopon/RPL_Perpustakaan.git
cd RPL_Perpustakaan
```

### 2. Install Dependensi

```bash
composer install
```

### 3. Salin file .env

```bash
cp .env.example .env
```

### 4. Atur Konfiguransi .env

```bash
APP_NAME="RPL Perpustakaan"
APP_URL=http://localhost:8000
APP_TIMEZONE=Asia/Jakarta

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rpl_perpustakaan
DB_USERNAME=root
DB_PASSWORD=

Sesuaikan Sendiri
```

### 5. Generate App Key

```bash
php artisan key:generate
```

### 6. Migrasi Database

```bash
php artisan migrate:fresh
php artisan db:seed --class=UsersSeeder (Untuk Admin Awalan)
```
### 7. Jalankan

```bash
php artisan serve
```
##  Password Admin
- Email : admin123@gmail.com
- Password : admin123




    
