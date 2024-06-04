<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Switch Introduction') }}
    </h2>
  </x-slot>

  <div class="container max-w-[1110px] my-8 bg-white rounded-lg shadow-sm">
    <div class="flex flex-col p-6">
      <div class="flex flex-row border-y py-4">
        <div class="px-3">Switch adalah perangkat keras dalam jaringan.</div>
      </div>
      <div class="py-4 border-b">

        <div class="px-3 font-bold text-3xl">Apa itu switch?</div>
        <ul style="list-style-type:circle;" class="px-12 py-5">
          <div> Switch adalah perangkat dalam jaringan komputer yang digunakan untuk menghubungkan beberapa perangkat, seperti komputer, server, printer, atau perangkat jaringan lainnya, dalam suatu jaringan lokal (Local Area Network atau LAN).
            <div class="px-12 py-5"> Fungsi utama switch adalah untuk mengirimkan data secara efisien dari satu perangkat ke perangkat lain dalam jaringan dengan menggunakan alamat Media Access Control (MAC). Dengan kata lain, switch bertindak sebagai pengatur trafik data di dalam jaringan.
              <div class="px-12 py-5"> Namun demikian, masih banyak yang berasumsi bahwa switch dan router adalah komponen yang sama. Kenyataannya, keduanya berbeda. Router justru memilih jalur untuk paket data dalam melewati jaringan dan mencapai tujuannya. Router melakukannya dengan menghubungkan jaringan berbeda dan meneruskan data dari jaringan ke jaringan, termasuk LAN, WAN, atau sistem otonomus.
                <div class="px-12 py-5"> Jadi dalam praktiknya, router menjadi komponen penting untuk koneksi internet, sedangkan switch hanya digunakan untuk menghubungkan perangkat. Biasanya, perkantoran besar, jaringan dan data center dengan ratusan komputer pasti akan lebih membutuhkan switch.
        </ul>
      </div>
</x-app-layout>