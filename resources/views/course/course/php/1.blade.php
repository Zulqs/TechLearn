<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('HTML Introduction') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">HTML adalah markup languange standard untuk membuat halaman Web.</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Apa itu HTML?</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <li>HTML adalah singkatan dari Hyper Text Markup Language</li>
          <li>HTML adalah markup languange standard untuk membuat halaman Web.</li>
          <li>HTML mengartikan sebuah struktur dari halaman Web</li>
          <li>HTML terdiri dari serangkaian elemen</li>
          <li>Elemen HTML memberi informasi kepada browser bagaimana content harus ditampilkan</li>
          <li>Elemen HTML melabeli potongan konten seperti "ini adalah judul", "ini adalah paragraf", "ini adalah tautan", dll.</li>
        </ul>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Dokumen HTML yang Sederhana</div>
        <ul style="list-style-type:circle;" class="px-8 py-5">
          <p style="background:lightgrey;border-radius: 10px; padding: 20px;" class="text-3xl">Contoh</p>
        </ul>

        <div class="px-4 text-3xl">Penjelasan Contoh</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <li>Deklarasi tersebut <a style="color: red;"> &lt;!DOCTYPE html&gt; </a>mendefinisikan bahwa dokumen ini adalah dokumen HTML5</li>
          <li>Elemen <a style="color: red;">&lt;hml&gt;</a> adalah elemen akar dari halaman HTML</li>
          <li>Elemen tersebut <a style="color: red;">&lt;head&gt; </a> menentukan judul untuk halaman HTML (yang ditampilkan di bilah judul browser atau di tab halaman)</li>
          <li>Elemen <a style="color: red;">&lt;body&gt; </a> mendefinisikan badan dokumen, dan merupakan wadah untuk semua konten yang terlihat, seperti judul, paragraf, gambar, hyperlink, tabel, daftar, dll.</li>
          <li>Elemen <a style="color: red;">&lt;h1&gt; </a> mendefinisikan judul besar</li>
          <li>Elemen <a style="color: red;">&lt;p&gt; </a> mendefinisikan paragraf</li>
        </ul>
      </div>
      <div class="py-3 border-b">

        <div class="px-3 py-5 font-bold text-3xl">Apa itu elemen HTML?</div>

        <div class="px-3 text-4m">Elemen HTML ditentukan oleh tag awal, beberapa konten, dan tag akhir:</div>
        <div class="px-5 py-6 text-2xl"><a style="color: blue;">&lt;</a><a style="color: brown;">tagname</a><a style="color: blue;">&gt;</a> Konten ada di sini... <a style="color: blue;">&lt;</a><a style="color: brown;">/tagname</a><a style="color: blue;">&gt;</a></div>
        <div class="px-3 text-4m"><b> Elemen </b> HTML adalah segalanya mulai dari tag awal hingga tag akhir:</div>
        <div class="px-5 py-5 text-2xl"><a style="color: blue;">&lt;</a><a style="color: brown;">h1</a><a style="color: blue;">&gt;</a> Judul Pertama <a style="color: blue;">&lt;</a><a style="color: brown;">/h1</a><a style="color: blue;">&gt;</a></div>
        <div class="px-5 py-5 text-2xl"><a style="color: blue;">&lt;</a><a style="color: brown;">p</a><a style="color: blue;">&gt;</a> Paragraf Pertama <a style="color: blue;">&lt;</a><a style="color: brown;">/p</a><a style="color: blue;">&gt;</a></div>
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
          <th>Start tag</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        <tr>
          <td>&lt;h1&gt;</td>
          <td>Judul Pertama</td>
          <td>&lt;/h1&gt;</td>
        </tr>
        <tr>
          <td>&lt;p&gt;</td>
          <td>Paragraf Pertama</td>
          <td>&lt;/p&gt;</td>
        </tr>
        <tr>
          <td>&lt;br&gt;</td>
          <td><i>none</i></td>
          <td><i>none</i></td>
        </tr>
      </table>
    </div>

    <p style="background:lightyellow; padding: 30px;" class="text-3l"><b>Catatan:</b> Beberapa elemen HTML tidak memiliki konten (seperti elemen &lt;br&gt;). Elemen-elemen ini disebut elemen kosong. Elemen kosong tidak memiliki tag akhir!</p>
    <div class="flex flex-col p-6">

      <div class="py-1  border-b">
      </div>

      <div class="py-6 border-b">
      </div>

      <div class="px-3 py-4 font-bold text-3xl">Web Browsers</div>
      <div class="px-3 text-4m">Tujuan browser web (Chrome, Edge, Firefox, Safari) adalah untuk membaca dokumen HTML dan menampilkannya dengan benar.
        Browser tidak menampilkan tag HTML, namun menggunakannya untuk menentukan cara menampilkan dokumen:</div>
      <ul style="list-style-type:circle;" class="px-12 py-5">
        <img src="https://www.w3schools.com/html/img_chrome.png" alt="Deskripsi Gambar">

    </div>

  </div>
  </div>
</x-app-layout>