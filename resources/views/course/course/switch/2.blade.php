<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('The Switch works and type ') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Penjelasan mengenai Jenis-jenis Switch dan Cara kerjanya</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Jenis-jenis Switch</div>
        <ul style="list-style-type:number;" class="px-12 py-5">
          <div class="px-3 text-4m">Switch memiliki beberapa jenis dengan fungsi dan kelebihan masing-masing, diantaranya sebagai berikut:
          <li>Managed switch
          <div>Managed switch memiliki kelebihan yang tidak bisa kamu temui di switch jenis lainnya, yaitu user interface. Tampilan antarmuka pengguna akan mempermudah user ketika melakukan konfigurasi. Selain itu, konfigurasi dapat dilakukan dengan berbagai metode, sebut saja interface, console, dan di internet.
          <li>Unmanaged switch
          <div>Unmanaged switch merupakan jenis switch yang biasanya digunakan di rumah dan kantor berskala kecil menengah. Switch satu ini tidak memerlukan settingan rumit serta proses instalasinya terbilang cukup mudah. Contoh sederhananya yaitu pengelolaan aliran data antara mesin printer dengan beberapa perangkat komputer.
          <li>Enterprise managed switch
          <div>Enterprise managed merupakan jenis switch yang sering dipakai oleh perusahaan berskala besar. Konsep topologi switch ini sangat kompleks sehingga diperlukan usaha keras untuk monitoring dan konfigurasinya. Selain itu, enterprise managed switch umumnya hanya memiliki empat sampai delapan port khusus ethernet.
          <li>Smart switch
          <div>Smart switch bisa dikatakan sebagai jenis yang telah dimodifikasi dengan karakteristik berada di tengah managed dan unmanaged switch. Konfigurasi dan pengaturan  smart switch dapat dilakukan dengan memanfaatkan teknologi berbasis web. Kelebihannya, settingan switch bisa diatur dan diubah secara otomatis sesuai kebutuhan perangkat.
          </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Cara Kerja Switch</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
        <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/08/Cara-Kerja-Switch-1536x864.jpg" alt="Deskripsi Gambar" width="500">
        <div class="px-3 text-4m">Cara kerja switch sekilas hampir mirip seperti HUB, yakni pertukaran informasi atau data beberapa perangkat dalam sebuah jaringan. Kinerja switch diklaim lebih baik karena kemampuan proses mengirim dan pertukaran datanya yang efisien.
        <div>Ketika switch menerima data tertentu dari perangkat yang terhubung, pada saat yang sama komponen ini akan mendeteksi dan mencocokkan MAC address. Switch kemudian mempelajari dan menghasilkan logika koneksi untuk port dan perangkat yang dituju. Dengan demikian, data yang dikirim hanya akan diterima oleh perangkat tujuan saja tanpa terjadi tabrakan data atau collision.
        </ul>
      </div>
      <div class="py-4 border-b">

</x-app-layout>