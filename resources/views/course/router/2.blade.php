<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Fungsi dan Jenis Router') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Fungsi dan Jenis Router</div>
      </div>
      <div class="py-4 border-b">
        <div class="px-3 font-bold text-3xl">Fungsi Router</div>
        <ul style="list-style-type:number;" class="px-12 py-5">
          <li> Mengirimkan informasi. Router bekerja dengan pola networking bridge. Pola ini memungkinkan router untuk menjadi perantara jaringan agar suatu jaringan internet bisa digunakan oleh jaringan lainnya.</li>
          <li> Menghubungkan jaringan. Agar pengguna dapat melakukan pembagian paket data ke berbagai perangkat, router menghubungkan beberapa jaringan ke satu (atau lebih) perangkat. Dalam melakukan fungsi ini, router melakukan distribusi alamat IP ke setiap perangkat pada jaringan tertentu.</li>
          <li> Menyaring paket data. Router menyaring paket data internet pada sebuah jaringan guna menyediakan koneksi internet yang cepat tanpa adanya broadcast storm yang dapat menghambat kecepatan jaringan. Dalam prosesnya, filtering dilakukan dengan aturan penyaringan melalui alamat IP, TCP dan UDP, dan Internet Control Message Protocol (ICMP).</li>
          <li> Menghubungkan jaringan ke DSL. Penggunaan router tidak hanya terpaku pada pemakaian kabel LAN saja. Router dapat membagikan jaringan internet secara nirkabel dengan menghubungkan jaringan lokal ke digital subscriber line (DSL).</li>
          <li> Membagikan file. Router juga berfungsi untuk membagikan berbagai sumber daya atau file internet ke perangkat-perangkat seperti printer, scanner, dan layanan penyimpanan berkas sebuah instansi. Pengaturan jaringan dan perangkat berbasis internet yang digunakan ini dapat dikelola langsung oleh administrator jaringan.</li>
        </ul>
      </div>
      <div class="py-4 border-b">

      <div class="px-3 font-bold text-3xl">Jenis-jenis Router</div>
        <ul style="list-style-type:number;" class="px-12 py-5">
          <li> Wireless router
          <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/03/wireless-router.jpeg" alt="Deskripsi Gambar" width="170">
          <div> Wireless router adalah jenis router yang menawarkan konektivitas Wi-Fi atau nirkabel ke perangkat pengguna. Jenis ini menggunakan kabel ethernet agar terhubung ke modem, lalu mendistribusikan sinyal dengan mengubah paket data dari kode biner menjadi sinyal radio.
          Sinyal tersebut lalu dibagikan menggunakan antena yang ada pada perangkat router. Jadi, router jenis ini tidak memerlukan kabel untuk terhubung ke perangkat pengguna. Jika kamu memiliki Wi-Fi di rumah, kamu berarti memiliki router jenis nirkabel.
          <li> Wired router
          <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/03/wired-router.jpeg" alt="Deskripsi Gambar" width="170">
          <div>Router kabel menggunakan kabel ethernet untuk terhubung ke modem. Namun router jenis ini memerlukan kabel terpisah untuk menghubungkan beberapa perangkat ke jaringan yang terhubung dengan modem.
          <li>Virtual router
          <img src="https://v2.com.sa/wp-content/uploads/2023/02/Virtual-Router.png" alt="Deskripsi Gambar" width="170">
          <div>Virtual router atau Router memungkinkan komputer atau server menyalurkan paket data melalui aplikasi perangkat lunak. Jenis ini berbentuk perangkat lunak, namun tugas dan fungsinya sama seperti router perangkat keras.
          <li>Core router
          <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/03/core-router.jpeg" alt="Deskripsi Gambar" width="170">
          <div>Jenis ini biasanya digunakan oleh perusahaan dengan volume pengiriman paket data yang tinggi. Core router beroperasi pada inti jaringan dan tidak berkomunikasi dengan jaringan eksternal.
          <li>Edge router
          <img src="https://dwblog-ecdf.kxcdn.com/wp-content/uploads/2022/03/edge-router.jpeg" alt="Deskripsi Gambar" width="170">
          <div>Jenis router ini bertugas untuk berkomunikasi dengan router inti dan jaringan eksternal. Sesuai namanya, edge (ujung) router berada di tepi jaringan dan menggunakan BGP (Border Gateway Protocol) untuk mengirim dan menerima data dari LAN dan WAN yang berada di luar jaringan.
        </ul>
      </div>
      <div class="py-4 border-b">
     
      <div class="px-3 font-bold text-3xl">Mengatur router di PC masing masing</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
        <div class="px-3 text-4m"> Namun, jika server Anda tidak mendukung router, maka harus:
        <li>memasang server web</li>
        <li>menginstall router</li>
        <li>menginstal sebuah basis data, seperti MySQL</li>
      </ul>
        <div> Situs web resmi router (router.net) memiliki petunjuk instalasi untuk router: http://router.net/manual/en/install.router
        </div>
      <div class="py-4 border-b">

</x-app-layout>