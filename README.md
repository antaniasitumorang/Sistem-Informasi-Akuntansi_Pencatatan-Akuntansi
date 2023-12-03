<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Cara Install Project DENGAN github desktop
Untuk menginstal project ini anda harus memiliki Composer
bagi yang belum install composer silahkan download [Klik di sini](https://getcomposer.org/download/1.9.0/composer.phar) tutorial cara instal composer [klik di sini](https://www.malasngoding.com/cara-install-composer/)

Bagi yang sudah memiliki composer silahkan ikuti tutor dibawah ini
- Klik tombol Clone or download
- Klik Open in desktop
- Klik open GithubDesktop.exe
- Silahkan pilih lokasi path yang anda inginkan
- Kemudian klik Clone
- Tunggu sampai proses clone selesai
- Buka folder porject yang sudah di clone melalui terminal
- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash atau terminal linux bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
bagi yang menggunakan terminal windows bisa ketik seperti dibawah
```terminal
copy .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate --seed
```
- kemudian ketik :
```
php artisan storage:link
```
- Finish project laravel bisa dijalankan dengan menggunakan development server dengan cara ketik
```terminal
php artisan serve
```
- Lalu ctrl+klik pada http://127.0.0.0:8000

## Cara instal project TANPA github desktop
Bagi yang sudah memiliki composer silahkan ikuti tutor dibawah ini
- Klik tombol Clone or download
- Klik download zip
- Silahkan pilih lokasi path yang anda inginkan
- Kemudian klik Oke
- Tunggu sampai proses download selesai
- Extract here 
- Buka folder porject yang sudah di extract dengan terminal
- Lakukan composer install ketik
```terminal
composer install
```
- Tunggu sampai proses selesai
- Buat database baru di phpmyadmin anda beri nama sesuka hati anda
- Copy file .env.example yang ada di dalam folder project dan ubah namanya menjadi .env
bagi yang menggunakan git bash atau terminal linux bisa ketik seperti dibawah
```terminal
cp .env.example .env
```
bagi yang menggunakan terminal windows bisa ketik seperti dibawah
```terminal
copy .env.example .env
```
- Lakukan generate key ketik 
```terminal
php artisan key:generate
```
- Buka file .env
- Ubah konfigurasi database sesuai nama database yang anda buat tadi lalu simpan
- lakukan migrate ketik :
```terminal
php artisan migrate --seed
```
- kemudian ketik :
```
php artisan storage:link
```
- Finish project laravel bisa dijalankan dengan menggunakan development server dengan cara ketik
```terminal
php artisan serve
```
- Lalu ctrl+klik pada http://127.0.0.0:8000

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credit to https://github.com/maulanakevinp/akuntansi terima kasih ^_^

## structure pada halaman database localhost
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi_Pencatatan-Akuntansi/assets/151722099/3d9f050b-d87a-4984-8e11-a59935e1e89c)


## flowchart penggunaan aplikasi
![WhatsApp Image 2023-12-03 at 00 00 43_b827bd8b](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi_Pencatatan-Akuntansi/assets/151722099/104672ba-7979-45a4-8a79-be1bcc02b169)

## flowchart (designer) pada database localhost
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi_Pencatatan-Akuntansi/assets/151722099/8e1d7615-6a37-4623-a7a2-d1064ce39af4)


## tampilan awal
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/8eb913cd-9e49-4c0c-ac7c-c396fb917c9b)

## halaman login akun
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/27470caf-8a96-48ab-8c31-cc92cdb1b892)

## halaman depan pada menu "Akun"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/dee79fe9-91db-4f46-9b62-d4b866ead363)

## tampilan menu "Jurnal Umum" 
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/ef0ccf43-bf59-422a-94c1-474a7cddb4d3)


## tampilan pada menu "Jurnal Penyesuaian"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/3c2c3e55-4c1e-4edf-85ef-5f528ad46dad)

## menu "Buku Besar"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/de09e015-c2c9-47d3-aa7f-bdb137c01d97)

## tampilan "Neraca Lajur"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/92d585ae-dedf-46f1-ac86-cbbb2b85f7c2)
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/25d3ca7c-ff51-4331-8af0-ee113578eb78)


## menu "Laporan" pada Laporan "Perubahan Ekuitas"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/e5da10a6-9366-4c6a-a6bf-6bf92e71b7fd)

## menu "Laporan" pada Laporan "Laba Rugi"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/de7da109-83bb-40ed-b1f3-a0f5c7481758)

## menu "Laporan" pada Laporan "Posisi Keuangan"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/de6aa5cb-4072-4168-8b9f-18c899d42166)

## tampilan "Jurnal Penutup"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/4e1221a6-bd3a-4bc8-bc3d-7b5f8ed6b5bb)

## tampilan menu "Pengaturan Akun"
![image](https://github.com/antaniasitumorang/Sistem-Informasi-Akuntansi/assets/151722099/1974a432-ce68-4647-9f8b-965c73b3c975)
