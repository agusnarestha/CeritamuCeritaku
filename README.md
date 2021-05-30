# Website CeritamuCeritaku

## Tentang CeritamuCeritaku
Website CeritamuCeritaku yaitu website yang bertemakan tentang cerita yang bisa melakukan sharing cerita antar user, website ini terinsirasi dari [WATTPAD](https://wattpad.con)
#### Dibuat dengan :
* [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/introduction/)
* [Laravel 6.x](https://laravel.com/docs/6.x)

### Contributor :
* Putu Agus Narestha Adi Pratama
* Reihan Muhamad Aziz
* Muhammad Rizq Athariq

## Tata Cara Menggunakan Website CeritamuCeritaku
* [Mengunduh repository ke dalam komputer](#mengunduh-repository)
* [Merubah .env]()

### Mengunduh Repository
Unduh repository ke dalam komputer menggunakan perintah `git clone`. Url
repository dapat dilihat di dalam repository yang diinginkan.
```
git clone https://github.com/agusnarestha/CeritamuCeritaku.git 
```

### Merubah .env
* Duplikat example.env
* Ganti nama hasil duplikat tersebut menjadi .env
* Buat APP_KEY dengan perintah `php artisan key:generate`

### Membuat Table Migration Laravel
* Membuat database dengan nama sesuka anda di MySQL
* Mengganti `DB_DATABASE='nama_database'` dengan nama database yang anda buat di MySQL
* Lakukan migrasi dengan perintah `php artisan migrate`

### Menjalankan Website
* Jalankan XAMPP
* Jalankan Laravel dengan perintah `php artisan serve`
* Kemudian buka di website di `http://localhost:8000/`

