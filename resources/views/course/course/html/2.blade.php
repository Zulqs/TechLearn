<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('HTML Editors') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Editor teks sederhana adalah semua yang Anda butuhkan untuk belajar HTML.</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Belajar HTML Menggunakan Notepad atau TextEdit</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="px-3 text-4m">Halaman web dapat dibuat dan dimodifikasi dengan menggunakan editor HTML profesional.
            Namun, untuk belajar HTML, kami rekomendasikan editor teks sederhana seperti Notepad (PC) atau TextEdit (Mac).
            Kami percaya bahwa menggunakan editor teks sederhana adalah cara yang baik untuk belajar HTML.
            Ikuti langkah-langkah di bawah ini untuk membuat halaman web pertama Anda dengan Notepad atau TextEdit.
        </ul>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Dokumen HTML yang Sederhana</div>
        <ul style="list-style-type:circle;" class="px-8 py-5">
        </ul>

        <div class="px-4 text-3xl">Step 1: Open Notepad (PC)</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <li>Windows 8 atau yang lebih baru: Layar Mulai (simbol jendela di kiri bawah pada layar Anda). Ketik Notepad.</li>
          <li>Windows 7 atau yang lebih lama: Buka Mulai > Program > Aksesori > Notepad
        </ul>
      </div>
      <div class="py-3 border-b">
        <div class="px-4 text-3xl">Langkah 1: Buka TextEdit (Mac)</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <li>Buka Finder > Aplikasi > TextEdit
          <li>juga beberapa preferensi agar aplikasi dapat menyimpan file dengan benar. Pada Preferensi > Format > pilih “Teks Biasa”</li>
          <li>Kemudian di bawah “Buka dan Simpan”, centang kotak yang bertuliskan “Tampilkan file HTML sebagai kode HTML, bukan teks yang diformat”.</li>
          <li>Kemudian buka dokumen baru untuk menempatkan kode.</li>
        </ul>
        <div class="py-3 border-b">

          <div class="px-4 text-3xl">Langkah 2: Tuliskan Beberapa HTML</div>
          <ul style="list-style-type:circle;" class="px-12 py-5">
            <h1>Tulis atau salin kode HTML berikut ini ke dalam Notepad:</h1>
            <img src="https://www.w3schools.com/html/img_notepad.png" alt="Deskripsi Gambar">
          </ul>
          <div class="py-3 border-b">

            <div class="px-4 text-3xl">Step 3: Save the HTML Page</div>
            <ul style="list-style-type:circle;" class="px-12 py-5">
              <h1>Simpan file di komputer Anda. Pilih File > Save as pada menu Notepad.
                Beri nama file “index.htm” dan atur pengodean ke UTF-8 (yang merupakan pengodean yang lebih disukai untuk file HTML).
              </h1>
              <img src="https://www.w3schools.com/html/img_saveas.png" alt="Deskripsi Gambar">
            </ul>
            <div class="py-3 border-b">

              <div class="px-4 text-3xl">Langkah 4: Lihat Halaman HTML di Browser </div>
              <ul style="list-style-type:circle;" class="px-12 py-5">
                <h1>Buka file HTML yang disimpan di browser favorit Anda (klik dua kali pada file tersebut, atau klik kanan - dan pilih “Open with”).</h1>
                <img src="https://www.w3schools.com/html/img_chrome.png" alt="Deskripsi Gambar">
              </ul>
              <div class="py-3 border-b">
              </div>
</x-app-layout>