<p align="center">
  <img src="./public/img/user.jpg" width="120" style="border-radius: 50%;" alt="Logo Toko Smart">
</p>

<h1 align="center">Aplikasi Kasir SMKN 1 Kadipaten Toko Smart</h1>

<p align="center">
  <b>Sistem Point of Sales (POS), Manajemen Inventaris Stok, dan Keanggotaan Terpadu</b><br>
  Dikembangkan untuk digitalisasi transaksi dan operasional koperasi SMKN 1 Kadipaten.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Maintainer-EA2511-0284c7?style=for-the-badge&logo=github" alt="Maintainer">
</p>

---

## 📌 Ringkasan Proyek

**Aplikasi Kasir Toko Smart** dirancang untuk mempermudah tata kelola transaksi penjualan barang, pemantauan stok secara otomatis, serta manajemen kasir dan anggota koperasi secara terintegrasi. Sistem ini memastikan pencatatan kas keluar-masuk akurat, efisien, dan transparan.

---

## ✨ Fitur Utama

### 🛒 Transaksi & Kasir (Point of Sales)
* **Pencatatan Penjualan Cepat**: Input transaksi kasir dengan antarmuka responsif.
* **Cetak Barcode Produk**: Pembuatan kode barcode untuk pelabelan barang dagangan.
* **Kustomisasi Cetak Nota**:
  * Nota Thermal (Printer Struk Kasir)
  * Nota Besar (Format Standar A4)
* **Pencatatan Pengeluaran**: Tracking biaya operasional harian toko.

### 📦 Manajemen Produk & Inventaris
* **Kategori & Katalog Produk**: Pengelompokan barang berdasarkan kategori.
* **Bulk Action**: Fitur Multiple Delete untuk manajemen katalog dalam jumlah besar.
* **Sinkronisasi Stok Otomatis**: Stok bertambah otomatis pada pembelian dan berkurang pada penjualan.

### 👥 Keanggotaan & Mitra (Supplier)
* **Manajemen Member Koperasi**: Registrasi anggota dengan sistem diskon khusus.
* **Cetak Kartu Member**: Desain kartu keanggotaan siap cetak langsung dari aplikasi.
* **Manajemen Supplier**: Pencatatan riwayat pasokan barang dari berbagai distributor.

### 📊 Laporan Finansial & Dashboard
* **Analitik Real-Time**: Visualisasi data statistik dan tren transaksi menggunakan Chart.js.
* **Laporan Laba & Rugi**:
  * Rekapitulasi Harian
  * Rekapitulasi Bulanan
  * Custom Rentang Tanggal

### 🔐 Hak Akses Bertingkat (Role-Based Access)
* **Administrator**: Akses penuh ke seluruh modul, pengaturan identitas toko, kartu member, dan manajemen pengguna.
* **Kasir**: Akses operasional kasir untuk transaksi penjualan dan pencetakan struk.

---

## 🛠️ Tech Stack

| Komponen | Teknologi |
| :--- | :--- |
| **Backend Framework** | Laravel |
| **Bahasa Pemrograman** | PHP 8.x |
| **Database** | MySQL |
| **Frontend Styling** | Tailwind CSS / Blade Templating |
| **Visualisasi Data** | Chart.js |
| **Autentikasi** | Laravel Jetstream / Fortify |

---

## 🚀 Panduan Instalasi

### 1. Clone Repositori
```bash
git clone https://github.com/EA2511/EA2511.github.io.git toko-smart
cd toko-smart
```

### 2. Install Dependensi
```bash
composer install
npm install && npm run dev
```

### 3. Konfigurasi Environment
Salin file `.env.example` menjadi `.env`:
```bash
cp .env.example .env
```
Sesuaikan konfigurasi database pada file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tokoku
DB_USERNAME=root
DB_PASSWORD=
```
Generate application key:
```bash
php artisan key:generate
```

### 4. Database Setup & Seeder
Jalankan migrasi dan seeder awal:
```bash
php artisan migrate --seed
```
*Catatan: Anda juga dapat langsung mengimpor file `tokoku.sql` ke database MySQL Anda.*

### 5. Menjalankan Server Lokal
```bash
php artisan serve
```
Akses aplikasi melalui browser: [http://localhost:8000](http://localhost:8000)

---

## 🔑 Kredensial Default (Seeder)

| Role | Email | Password |
| :--- | :--- | :--- |
| **Administrator** | `administrator1@gmail.com` | `123` |
| **Kasir** | `user1@gmail.com` | `123` |

---

## 👤 Pengembang

* **Edrick Andreas** — [@EA2511](https://github.com/EA2511)
* SMKN 1 Kadipaten
