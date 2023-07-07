<h1 align="center">Selamat datang di Aplikasi Voting Pemilihan Ketua Osis! 👋</h1>
<img src="https://user-images.githubusercontent.com/61069138/200459674-928d1bfc-a291-4c06-a343-0b964c04c64b.png" >


<p align="center">Dibuat Menggunakan Framework Laravel Versi 9 Dan Realtime Notification Menggunakan Pusher.</p>
<div align="center">

[![All Contributors](https://img.shields.io/github/contributors/fikrisuheri/-laravel-9-evoting-pemilihan-ketua-osis)](https://github.com/fikrisuheri/-laravel-9-evoting-pemilihan-ketua-osis/graphs/contributors)
![GitHub last commit](https://img.shields.io/github/last-commit/fikrisuheri/-laravel-9-evoting-pemilihan-ketua-osis.svg)
![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/fikrisuheri/-laravel-9-evoting-pemilihan-ketua-osis)
</div>

## DIMOHON UNTUK TIDAK DIPERJUALBELIKAN !

## Fitur apa saja yang tersedia di Aplikasi Aplikasi Voting Pemilihan Ketua Osis?

- Realtime Notification Pusher
- Crud Kelas & Jurusan
- Atur Tanggal Pemilihan Dan Jam Dibuka&Tutup
- Yajradatatable Service
- Role Menggunakan Spatie


## Akun Default

- email: admin@gmail.com
- Password: password
- Login Admin 127.0.0.1:8000/login-admin
---

## Install

1. **Clone Repository**

```bash
git clone https://github.com/fikrisuheri/-laravel-9-evoting-pemilihan-ketua-osis.git
cd laravel-9-evoting-pemilihan-ketua-osis
composer install
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Buka `.env` lalu ubah baris berikut sesuai dengan api pusher kamu kamu**

```bash
PUSHER_APP_ID=xxxxx
PUSHER_APP_KEY=xxxxx
PUSHER_APP_SECRET=xxxxx
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=ap1
```


4. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --seed
```

5. **Jalankan Aplikasi**

```bash
php artisan serve
```

