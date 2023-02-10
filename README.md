## Rental DVD 
UAS Pemrograman Lanjut Kelompok 3

Alwan Fauzaan <br>
Aldo Nicholas <br>
M. Raafi Ramadhan <br>
M. Yusuf Mulya Utama <br>
Yanuar Efendi <br>

## Deskripsi
Aplikasi yang dikembangkan adalah aplikasi DVD.

Dihalaman awal aplikasi terdapat header yang berguna untuk memper mudah melihat isi seperti list DVD yang di sewakan ,about, login dan register, Jika user menekan pesan sekarang akan tapi belum login maka user akar di arahkan ke halaman Login / bisa Register jika belum memiliki akun. saat mengunakan login user ,user akan di tampilkan halaman user yang berisi memesan Dvd , dan di tampilan header akan berisi home ,list Dvd , about dan nama user Di saat mengunakan Admin , Admin akan bisa menampilakan halaman List order dan Data user, admin bisa menghapus akun user dan mengedit akun user 

role <br>
-admin <br>
-user

## Cara install
```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login Admin

-   email = admin@example.com
-   password = 123

#### Login User

-   email = user@example.com
-   password = 123

