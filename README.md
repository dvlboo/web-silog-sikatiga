
# Project Laravel

Selamat datang di proyek SIKATIGA ini. Berikut adalah langkah-langkah yang perlu diikuti untuk menjalankan aplikasi ini di server lokal menggunakan Laragon dan penjelasan terkait proses development. Ikuti panduan di bawah ini untuk menginstal dan menjalankan aplikasi dengan benar.

## Prasyarat

Sebelum memulai, pastikan bahwa Anda sudah memiliki beberapa perangkat lunak berikut:

1. **Laragon** – [download sini](https://laragon.org/download/).
2. **Composer** – [download sini](https://getcomposer.org/).
3. **Node.js & npm** – [download sini](https://nodejs.org/).
4. **Git** - 

## Instalasi

1. Clone repositori ini ke folder `www` Laragon:
   ```bash
   git clone https://github.com/dvlboo/web-silog-sikatiga
   ```

2. Masuk ke direktori proyek:
   ```bash
   cd web-silog-sikatiga
   ```

3. Install dependensi PHP menggunakan Composer:
   ```bash
   composer install
   ```

4. Jika aplikasi menggunakan asset frontend, install dependensi npm:
   ```bash
   npm install
   ```

5. Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

6. Atur konfigurasi environment pada file `.env`, khususnya pengaturan seperti:
   - Database connection
   - Mail server
   - APP_URL, dll.

7. Generate application key:
   ```bash
   php artisan key:generate
   ```

## Menyiapkan Database

1. Buat database MySQL baru menggunakan Laragon. Anda bisa menggunakan phpMyAdmin atau HeidiSQL untuk membuat database.

2. Edit file `.env` dan sesuaikan pengaturan database:
   ```env
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

4. (Opsional) Jika ada seed data untuk testing, jalankan:
   ```bash
   php artisan db:seed
   ```

## Menjalankan Aplikasi

1. Jalankan Laragon dan pastikan bahwa server Apache/Nginx dan MySQL sudah berjalan.

2. Ketikkan di terminal :
   ```bash
   php artisan serve
   ```

3. Ketikaan di terminal :
   ```bash
   npm run dev
   ```

4. Akses aplikasi melalui browser dengan URL sesuai pengaturan Laragon. Secara default, Laragon akan membuatkan domain lokal, misalnya:
  ```
   http://web-silog-sikatiga.test
   ```


## Kendala Umum & Solusi

### 1. Cache Masalah Konfigurasi
Jika Anda mengalami kendala terkait konfigurasi (misalnya, perubahan pada file `.env` atau pengaturan lain yang tidak terbaca), Anda bisa mencoba membersihkan cache konfigurasi Laravel.

**Perintah untuk membersihkan cache konfigurasi:**
```bash
php artisan config:clear
```

**Perintah untuk meng-cache ulang konfigurasi (untuk production):**
```bash
php artisan config:cache
```

Perintah `config:clear` berguna saat Anda sedang dalam proses development, terutama jika Anda sering mengubah pengaturan di file `.env`. Sementara `config:cache` digunakan ketika Anda sudah yakin konfigurasi Anda final dan ingin meningkatkan performa aplikasi.

### 2. Cache Route dan View
Jika Anda mengalami masalah terkait routing atau tampilan, Anda juga bisa membersihkan cache route dan view:

- **Membersihkan cache route:**
  ```bash
  php artisan route:clear
  ```

- **Membersihkan cache view:**
  ```bash
  php artisan view:clear
  ```

## Deployment

Untuk deployment di server production, pastikan langkah berikut dilakukan:

1. Jalankan perintah ini untuk mengoptimalkan konfigurasi:
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## Penutup

Jika Anda menghadapi kendala lain yang tidak disebutkan di sini, jangan ragu untuk menghubungi kami. Semoga panduan ini dapat membantu Anda dalam menjalankan dan mengelola proyek SIKATIGA ini.