<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('PHP Editors') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Cara untuk Mengisntall PHP</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Apa saja yang Butuhkan?</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="px-3 text-4m">Untuk mulai menggunakan PHP, bisa menggunakan cara berikut ini:
          <li>Menemukan host web dengan dukungan PHP dan MySQL</li>
          <li>Menginstal server web pada PC Anda sendiri, lalu menginstal PHP dan MySQL</li>
        </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Gunakan Host Web Dengan Dukungan PHP</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="px-3 text-4m">Jika server Anda telah mengaktifkan dukungan untuk PHP, Anda tidak perlu melakukan apa pun.
          <div> Cukup buat beberapa file .php, letakkan di direktori web Anda, dan server akan secara otomatis mem-parsingnya untuk Anda.
          <div> Anda tidak perlu mengkompilasi apa pun atau menginstal alat tambahan apa pun.
          <div> Karena PHP gratis, sebagian besar host web menawarkan dukungan PHP.
        </ul>
      </div>
      <div class="py-4 border-b">
     
      <div class="px-3 font-bold text-3xl">Mengatur PHP di PC masing masing</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
        <div class="px-3 text-4m"> Namun, jika server Anda tidak mendukung PHP, maka harus:
        <li>memasang server web</li>
        <li>menginstall PHP</li>
        <li>menginstal sebuah basis data, seperti MySQL</li>
      </ul>
        <div> Situs web resmi PHP (PHP.net) memiliki petunjuk instalasi untuk PHP: http://php.net/manual/en/install.php
        </div>
      <div class="py-4 border-b">

</x-app-layout>