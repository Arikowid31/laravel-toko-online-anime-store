<h1 align="center">Selamat datang di Aplikasi Toko Online Laravel! 👋</h1>
<img src="" >


<p align="center">Dibuat Menggunakan Framework Laravel Versi 9.</p>
<div align="center">

[![All Contributors]
![GitHub last commit]
![GitHub code size in bytes]
</div>

## DIMOHON UNTUK TIDAK DIPERJUALBELIKAN !

## Fitur apa saja yang tersedia di Aplikasi Toko Online Laravel?

- TERINTEGRASI DENGAN PAYMENT GATEWAY MIDTRANS
- PERHITUNGAN ONGKIR SUDAH MEMAKAI RAJA ONGKIR
- ORDER LEBIH DARI SATU PRODUK
- KERANJANG BELANJA
- Dan lain-lain


## Akun Default

- email: admin@gmail.com
- Password: admin123

---

## Install

1. **Clone Repository**

```bash
git clone 
cd laravel-toko-online-anime-store
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

3. **Buka `.env` lalu ubah baris berikut sesuai dengan api rajaongkir kamu**

```bash
RAJAONGKIR_API_KEY=xxxxxxxxxx
RAJAONGKIR_PACKAGE=starter
```

4. **Buka `.env` lalu ubah baris berikut sesuai dengan api midtrans kamu**

```bash
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_MERCHAT_ID=xxxxxx
MIDTRANS_CLIENT_KEY=SB-Mid-client-xxxxx
MIDTRANS_SERVER_KEY=SB-Mid-server-xxxxx
```


5. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan Aplikasi**

```bash
php artisan serve
```


## Contributing

Contributions, issues and feature requests di persilahkan.


## Author

- Facebook : <a href="https://web.facebook.com/"> Immanuel Abel Belare Lirung</a>
- INSTAGRAM : <a href="https://www.instagram.com/"> Immanuel Abel Belare Lirung</a>

## Donation

You can support Me On [Saweria](https://saweria.co/) Or [Traktee](https://trakteer.id/)

## Preview

![Screenshot 2022-07-04 115800]()
![Screenshot 2022-07-04 120138]()
![Screenshot 2022-07-04 120326]()
![Screenshot 2022-07-04 120307]()
