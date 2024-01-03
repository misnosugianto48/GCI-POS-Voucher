<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Project

Project Ini aplikasi web sederhana untuk menyelesaikan test GCI Intern yaitu membuat sebuah perhitungan voucher yang akan bisa dipakai apabila jumlah total mencapai atau lebih dari 2 juta dengan potongan harga menjadi 10 ribu.

## Design Database

Database memiliki 3 table yaitu :

- Staff
- Transactions
- Vouchers

Dengan relasi table staff memiliki banyak transaction dan transaction memiliki 1 voucher.

## Contoh Demo

Berikut beberapa contoh aplikasi webnya saat dijalankan:

- Mengenerate voucher asumsinya kita sebagai staff, kita generate vocuher untuk expired dalam waktu 3 bulan.
- ![Alt text](image-1.png)
- Dibawah list dari voucher yang telah digenerate dan siap pakai dalam kurun 3 bulan kedepan.
- ![Alt text](image-2.png)
- Voucher dapat digunakan apabila total yang dihitung mencapai 2 juta atau lebih, dan jika tidak sampai maka vocuher tidak akan bisa dipakai.
- ![Alt text](image-3.png)
- ![Alt text](image-5.png)
- Ketika berhasil dipakai maka jumlah yang harus dibayar akan berkurang sebanyak 10 ribu.
- ![Alt text](image-4.png)
- Dan saat mencetak faktur kode dan harga yang dipotong dari voucher akan tampil.
- ![Alt text](image-6.png)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
