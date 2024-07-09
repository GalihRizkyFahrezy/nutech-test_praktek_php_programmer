#README

program ini dibuat dengan menggunakan html, css, javascript, php, laravel dan bootstrap dan ditunjukan untuk proses tes rekrutmen PT Nutech Integrasi oleh Galih Rizky Fahrezy pada tanggal 7 Juli 2024.

----------
Buatlah Create, Read, Update dan Delete (CRUD) data barang yang terdiri dari :

1. fotobarang
2. namabarang
3. hargabeli
4. hargajual
5. stok

  •  walaupun tidak diminta, namun pada pembuatan table ini saya menambahkan id untuk berjaga-jaga jika ada masalah selama pemrograman karena mencari id cenderung lebih mudah dibanding mencari string dari namabarang.
  
  •  Proses delete hanya mendelete baris pada table dan meninggalkan file foto. Namun saya membuat komentar code pada controller untuk menghapus file foto jika diinginkan.

  • Untuk namabarang sengaja saya buat readonly pada edit karena id saya sembunyikan dari UI. sehingga namabarang akan menjadi identitas dari suatu baris, jika namabarang dapat diganti seperti kolom lain maka baris tersebut akan menjadi ambigu dan tidak jelas asal-usulnya.

Point utamanya adalah sebagai berikut :

1. Format foto barang yang diizinkan hanya JPG dan PNG, dan ukurannya maksimal 100kb ✔
2. Nama barang harus unik ✔
3. harga beli, harga jual dan stok hanya boleh diisi dengan angka ✔
4. ketika delete data harus ada konfirmasi terlebih dahulu ✔

Point tambahan adalah sebagai berikut :
1. Tampilan data barang mempunyai pagination dan searching ✔
   
  • Pagination terhitung setiap 5 baris dan untuk searching kolom yang dicari adalah namabarang.
   
2. Form data barang menggunakan popup ✔

  • saya tidak yakin popup yang dimaksud disini adalah menggunakan modal atau popup ke page baru. jadi saya membuat 2 tombol insert/create.

-----------------------------

tempat ini berisi kode-kode yang saya tulis :

nutech/app/http/controllers

  • BarangController.php


nutech/app/models/

  • barang.php


nutech/database/migrations/

  • 2024_07_05_030643_create_barangs_table.php
  

nutech/public/barang

  (disini berisi foto-foto yang di upload)
  

nutech/public/javascript

  • index.js


nutech/resources/views


  • edit.blade.php

  
  • home.blade.php

  
  • insertbarangpage.blade.php

  

nutech/resources/route


  • web.php
  


nutech


  • .env
