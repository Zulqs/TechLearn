<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Garis warna Resistor') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Kode warna pada Resistor</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Apa saja kode warna di resistor?</div>
        <ul class="px-12 py-5">
        <img src="https://www.electronics-tutorials.ws/wp-content/uploads/2018/05/resistor-res5.gif" alt="Deskripsi Gambar" width="300">
       </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Tabel Kode Warna Resistor</div>
      <div class="px-12 py-5">
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td,
        th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
      </style>
      </head>
      <table>
        <tr>
          <th>Warna</th>
          <th>Angka</th>
          <th>Pengali</th>
          <th>Toleransi</th>
        </tr>
        <tr>
          <td>hitam</td>
          <td>0</td>
          <td>1</td>
          <td></td>
        </tr>
        <tr>
        <td>coklat</td>
          <td>1</td>
          <td>10</td>
          <td>±1%</td>
        </tr>
        <tr>
        <td>merah</td>
          <td>2</td>
          <td>100</td>
          <td>±2%</td>
        </tr>
        <tr>
        <td>orange</td>
          <td>3</td>
          <td>1000</td>
          <td></td>
        </tr>
        <tr>
        <td>kuning</td>
          <td>4</td>
          <td>10000</td>
          <td>±0.5%</td>
        </tr>
        <tr>
        <td>hijau</td>
          <td>5</td>
          <td>100000</td>
          <td>±0.5%</td>
        </tr>
        <tr>
        <td>biru</td>
          <td>6</td>
          <td>1000000</td>
          <td>±0.5%</td>
        </tr>
        <tr>
        <td>ungu</td>
          <td>7</td>
          <td>10000000</td>
          <td>±0.25%</td>
        </tr>
        <tr>
        <td>abu-abu</td>
          <td>8</td>
          <td></td>
          <td>±0.05%</td>
        </tr>
        <tr>
        <td>putih</td>
          <td>9</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
        <td>emas</td>
          <td></td>
          <td>0,1</td>
          <td>±5%</td>
        </tr>
        <tr>
        <td>perak</td>
          <td></td>
          <td>0.01</td>
          <td>±10%</td>
        </tr>
        <tr>
        <td>tidak ada</td>
          <td></td>
          <td></td>
          <td>±20%</td>
        </tr>
      </table>
      <div>
      <div class="py-4 border-b">
      <div class="py4">Kemudian kita dapat menyimpulkan posisi tertimbang yang berbeda dari masing-masing pita warna yang membentuk kode warna resistor di atas dalam tabel berikut:
    </div>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        td,
        th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
      </style>
      </head>
      <table>
        <tr>
          <th>Jumlah Pita Berwarna</th>
          <th>3 Tali Berwarna (Seri E6)</th>
          <th>4 Tali Berwarna (Seri E12)</th>
          <th>3 Tali Berwarna (Seri E6)</th>
          <th>6 Tali Berwarna (Seri E96)</th>
        </tr>
        <tr>
          <td>Kelompok pertama​</td>
          <td>Angka ke -1</td>
          <td>Angka ke -1</td>
          <td>Angka ke -1</td>
          <td>Angka ke -1</td>
        </tr>
        <tr>
        <td>Pita ke -2</td>
        <td>Angka ke -2</td>
        <td>Angka ke -2</td>
        <td>Angka ke -2</td>
        <td>Angka ke -2</td>
      </tr>
      <tr>
        <td>Kelompok ke -3</td>
        <td>Pengali</td>
        <td>Pengali</td>
        <td>Angka ke -3</td>
        <td>Angka ke -3</td>
      </tr>
      <tr>
        <td>Kelompok ke -4</td>
        <td>-</td>
        <td>Toleransi</td>
        <td>Pengali</td>
        <td>Pengali</td>
      </tr>
      <tr>
        <td>Jalur ke-5</td>
        <td>-</td>
        <td>-</td>
        <td>Toleransi</td>
        <td>Toleransi</td>
      </tr>
      <tr>
        <td>Kelompok ke -6</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>Koefisien Suhu</td>
      </tr>
      </table> 
      <div class="py-4 border-b">

    <div class="font-bold text-3xl">Menghitung Nilai Kode Warna Resistor</div>
    <ul style="list-style-type:circle;" class="px-10 py-5">
        <div>Sistem Kode Warna Resistor semuanya baik dan bagus tetapi kita perlu memahami cara menerapkannya agar mendapatkan nilai resistor yang benar. Pita berwarna “sebelah kiri” atau yang paling signifikan adalah pita yang paling dekat dengan kabel penghubung dengan pita warna yang dibaca dari kiri ke kanan sebagai berikut:
          <li>Digit, Digit, Pengali = Warna, Warna x 10 warna dalam Ohm (Ω)</li>
    <ul>
    </x-app-layout>