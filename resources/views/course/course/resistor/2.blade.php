<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Resistor Editors') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Mengenal FUngsi Resistor</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Fungsi Resistor</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="px-3 text-4m"> Fungsi utama resistor adalah membatasi aliran arus listrik dalam suatu sirkuit. Mereka digunakan untuk mengontrol kecepatan motor listrik, membagi tegangan, mengatur sinyal dalam amplifikasi, dan menjaga suhu dalam aplikasi daya tinggi. 
            Resistor juga digunakan untuk melindungi komponen lain dalam sirkuit dari aliran arus yang berlebihan.
          <img src="https://ft.unj.ac.id/elektronika/wp-content/uploads/2021/10/1K-ohm-05-5-percent.jpg" alt="Deskripsi Gambar" width="170">
        </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Gunakan Host Web Dengan Dukungan resistor</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="px-3 text-4m">Jika server Anda telah mengaktifkan dukungan untuk resistor, Anda tidak perlu melakukan apa pun.
          <div> Cukup buat beberapa file .resistor, letakkan di direktori web Anda, dan server akan secara otomatis mem-parsingnya untuk Anda.
          <div> Anda tidak perlu mengkompilasi apa pun atau menginstal alat tambahan apa pun.
          <div> Karena resistor gratis, sebagian besar host web menawarkan dukungan resistor.
        </ul>
      </div>
      <div class="py-4 border-b">
     
      <div class="px-3 font-bold text-3xl">Mengatur resistor di PC masing masing</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
        <div class="px-3 text-4m"> Namun, jika server Anda tidak mendukung resistor, maka harus:
        <li>memasang server web</li>
        <li>menginstall resistor</li>
        <li>menginstal sebuah basis data, seperti MySQL</li>
      </ul>
        <div> Situs web resmi resistor (resistor.net) memiliki petunjuk instalasi untuk resistor: http://resistor.net/manual/en/install.resistor
        </div>
      <div class="py-4 border-b">

</x-app-layout>