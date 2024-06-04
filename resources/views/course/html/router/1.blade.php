<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Router Introduction') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Kode router dieksekusi di server.</div>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Apa itu router?</div>
        <ul class="px-12 py-5">
          <div>Pengertian router adalah perangkat yang berfungsi untuk mentransmisikan paket data dari jaringan internet ke perangkat lain melalui proses routing.</div>
          <div>Proses routing sendiri merupakan proses meneruskan paket jaringan satu dengan yang lainnya.</div>
          <div class="px-12 py-5">Dalam arti lain, router adalah perangkat yang menghubungkan dua atau lebih jaringan atau sub-jaringan. 
          Router mengelola lalu lintas antar jaringan dengan meneruskan paket data ke alamat IP yang dituju. Nantinya, router memungkinkan beberapa perangkat untuk menggunakan koneksi internet yang sama.</div>  
        </ul>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Cara kerja Router</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div>Router bekerja dengan mengarahkan jaringan data menggunakan routing table untuk menentukan jalur mana saja yang akan dilalui sebuah paket data dalam mencapai tujuannya.</div>
         </ul>
         <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/03/cara-kerja-router.png" alt="Deskripsi Gambar" width="500">
      <div class="px-12 py-5">Paket data tersebut berisi beberapa bagian, salah satunya membawa informasi seperti pengirim, tipe data, dan alamat IP tujuan. Router akan membaca tiap bagian ini kemudian menentukan rute terbaik yang akan digunakan untuk setiap proses transmisi data.</div>
      <div class="px-12 py-2">Paket data dari komputer A akan melalui beberapa jaringan untuk sampai ke komputer B. Intinya, ketika router mendapat paket, perangkat ini akan langsung mengecek tujuan akhirnya.
      Kemudian, router akan menentukan jalur terbaik menuju tujuan tersebut untuk menghasilkan koneksi yang cepat.</div>
      </div>
</x-app-layout>