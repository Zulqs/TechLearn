<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Router Introduction') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Kode Resistor dieksekusi di server.</div>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Apa itu Resistor?</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div class="py-3">Resistor adalah komponen pasif dalam sirkuit elektronik yang mengatur aliran arus listrik. Mereka memiliki resistansi, yang mengukur seberapa besar hambatan yang mereka tawarkan terhadap aliran arus.
          <div class="py-3">Resistansi diukur dalam ohm (Ω) dan dapat bervariasi dari nilai yang sangat rendah hingga sangat tinggi tergantung pada jenis resistor dan aplikasinya.
          </ul>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Fungsi Router</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
        <img src="https://ft.unj.ac.id/elektronika/wp-content/uploads/2021/10/1K-ohm-05-5-percent.jpg" alt="Deskripsi Gambar" width="300">
          <div class="py-3">Fungsi utama resistor adalah membatasi aliran arus listrik dalam suatu sirkuit. Mereka digunakan untuk mengontrol kecepatan motor listrik, membagi tegangan, mengatur sinyal dalam amplifikasi, dan menjaga suhu dalam aplikasi daya tinggi. 
          Resistor juga digunakan untuk melindungi komponen lain dalam sirkuit dari aliran arus yang berlebihan.
         </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Jenis-Jenis Resistor</div>
        <ul style="list-style-type:number;" class="px-12 py-5">
        <li>Resistor Karbon: 
        <div>Resistor karbon adalah tipe resistor yang paling umum. Mereka terbuat dari inti silinder karbon dengan lapisan luar yang berfungsi sebagai terminal. Resistor karbon cocok untuk aplikasi umum dan tersedia dalam berbagai nilai resistansi.
        <li>Resistor Film Logam:
        <div>Resistor film logam memiliki inti dengan lapisan film tipis dari logam resistif seperti nikel krom. Mereka memiliki toleransi yang lebih baik dan stabilitas suhu yang lebih tinggi daripada resistor karbon.
        <li>Resistor Lapisan Oksida Logam: 
        <div>Resistor ini memiliki inti dengan lapisan oksida logam yang digunakan sebagai elemen resistif. Mereka tahan terhadap suhu yang tinggi dan memiliki toleransi yang baik.
        <li>Resistor SMD (Surface Mount Device): 
        <div>Resistor SMD digunakan dalam perangkat elektronik modern yang memanfaatkan teknologi permukaan. Mereka memiliki ukuran fisik yang kecil dan memungkinkan perakitan otomatis.
        <li>Resistor Varibel: 
        <div>Resistor varibel atau potensiometer memungkinkan pengguna untuk mengubah nilai resistansi secara manual. Mereka digunakan dalam aplikasi seperti mengatur volume dalam perangkat audio.
        <li>Resistor Daya Tinggi: 
        <div>Resistor ini dirancang untuk menangani daya yang tinggi. Mereka biasanya digunakan dalam aplikasi daya besar seperti dalam rangkaian daya listrik dan elektronik daya.
        <li>Resistor LDR (Light-Dependent Resistor): 
        <div>Resistor LDR memiliki resistansi yang berubah-ubah tergantung pada intensitas cahaya yang diterimanya. Mereka sering digunakan dalam aplikasi seperti pengaturan kecerahan layar.
        <li>Resistor Termistor: 
        <div>Resistor termistor memiliki resistansi yang dipengaruhi oleh suhu. Mereka digunakan dalam aplikasi pengaturan suhu dan sensor suhu.
        </ul>
</x-app-layout>